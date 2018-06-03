<?php 

namespace Rubricate\Form;

use Rubricate\Form\Active\ValueActiveForm;



class CheckboxForm implements IElementForm
{

    private $e;



    public function __construct($name, $value = null)
    {
        $this->e = new InputForm('checkbox', $name, $value);
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
    


    public function getValue()
    {
        return $this->e->getValue();
    } 



    public function getElement()
    {
        return  $this->e->getElement();
    } 



    public function checked($value)
    {
        $checked = new ValueActiveForm(self::getValue(), $this->e);
        $checked->setActive('checked', $value);

        return $this;
    } 



}

