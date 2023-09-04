<?php

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\StrElement;

class TextareaForm implements IElementForm
{
    private $e, $a;

    public function __construct($name, $value = null)
    {
        $this->e = new CreateElement('textarea');
        $this->a = new AttrForm($this->e, $name, $value);

        $this->e->setAttribute('name', $name);
        $this->e->addChild(new StrElement($value));
    }

    public function setAttribute($property, $value)
    {
        $this->a->setAttribute($property, $value);

        return $this;
    } 

    public function getName()
    {
        return $this->a->getName();
    } 

    public function getElement()
    {
        return $this->e->getElement();
    } 
}

