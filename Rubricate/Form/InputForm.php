<?php 

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class InputForm implements IGetElement
{

    private $e;
    private $name;
    private $value;
    private $property = array('type', 'name', 'value');
    
    

    public function __construct($type, $name, $value = NULL)
    {
        self::init($name, $value);

        $this->e     = new CreateElement('input');
        $this->e->setAttribute('type',  $type);
        $this->e->setAttribute('name',  self::getName());
        $this->e->setAttribute('value', self::getValue());
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



}

