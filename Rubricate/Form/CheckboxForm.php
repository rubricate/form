<?php 

namespace Rubricate\Form;

use Rubricate\Form\Active\ValueActiveForm;

class CheckboxForm implements IElementForm
{
    private $e, $value;

    public function __construct($name, $value = null)
    {
        $this->e     = new InputForm('checkbox', $name, $value);
        $this->value = $value;
    }

    public function setAttribute($property, $value = null)
    {
        $this->e->setAttribute($property, $value);

        return $this;
    } 

    public function getName()
    {
        return $this->e->getName();
    } 

    public function getElement()
    {
        return  $this->e->getElement();
    } 

    public function checked($value)
    {
        $checked = new ValueActiveForm($this->value, $this->e);
        $checked->setActive('checked', $value);

        return $this;
    } 

}

