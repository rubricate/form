<?php 

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class TextareaForm implements IGetElement
{
    private $e;
    private $name;
    private $value;
    private $property = array('name');
    


    public function __construct($name, $value = NULL)
    {
        self::init($name, $value);

        $this->e = new CreateElement('textarea');
        $this->e->setAttribute('name', self::getName());
        $this->e->addInnerText(self::getValue());
    }


    private function init($name, $value)
    {
        $this->name  = $name;
        $this->value = $value;
    } 
    



    public function setAttribute($property, $value)
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
        return $this->e->getElement();
    } 
    


}

