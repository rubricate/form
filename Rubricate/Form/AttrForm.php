<?php

namespace Rubricate\Form;

use Rubricate\Element\ISetAttributeElement;



class AttrForm implements INameValueAttrForm, ISetAttributeElement
{
    private $attr, $form, $property;



    public function __construct
        (ISetAttributeElement $form, $name, $value, $property = array('name'))
    {
        $this->attr     = new NameValueAttrForm($name, $value);
        $this->form     = $form;
        $this->property = $property;
    }



    public function getName()    
    {
        return $this->attr->getName();
    }



    public function getValue()   
    {
        return $this->attr->getValue();
    }



    public function setAttribute($property, $value = null)
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

