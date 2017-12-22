<?php 

namespace Rubricate\Form;

use Rubricate\Element\IGetElement;


class CheckboxForm implements IGetElement
{

    private $e;
    private $name;
    private $value;
    private $property = array('type', 'name', 'value');



    public function __construct($name, $value = NULL)
    {
        self::init($name, $value);

        $this->e = new InputForm('checkbox', self::getName(), self::getValue());
    }



    private function init($name, $value)
    {
        $this->name  = $name;
        $this->value = $value;
    } 
 


    public function setAttribute($property, $value = NULL)
    {
        if (in_array($property, $this->property)) {
            throw new \Exception("the '{$property}' attribute is already set.\n");
        }

        $this->e->setAttribute($property, $value);

        return $this;
    } 



    public function getName()
    {
        return $this->name;
    } 
    


    public function getValue()
    {
        return $this->value;
    } 
    





    public function getElement()
    {
        return  $this->e->getElement();
    } 



    public function checked($checked)
    {
        if (
            (self::getValue() !== NULL) && 
            (self::getValue() == $checked)
        ) {
            $this->e->setAttribute('checked', 'checked');
        }

        return $this;
    } 



}

