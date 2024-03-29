<?php

declare(strict_types=1);

namespace Rubricate\Form;

use Rubricate\Element\ISetAttributeElement;

class AttrForm implements INameValueAttrForm, ISetAttributeElement
{
    private $attr, $form, $property;

    public function __construct (
        ISetAttributeElement $form, 
        $name, $value, $property = array('name')
    ){
        $this->attr     = new NameValueAttrForm($name, $value);
        $this->form     = $form;
        $this->property = $property;
    }

    public function getName(): string
    {
        return $this->attr->getName();
    }

    public function getValue(): string
    {
        return $this->attr->getValue();
    }

    public function setAttribute($property, $value = null): object
    {
        if (in_array($property, $this->property)) {
            throw new \Exception(
                ''
                . "the '{$property}' attribute is already set."
                ."\n"
            );
        }

        $this->form->setAttribute($property, $value);

        return $this;
    } 

}

