<?php 

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\ISetAttributeElement;



class InputForm implements IElementForm, ISetAttributeElement
{

    private $e, $a;
    private $property = array('type', 'name', 'value');
    
    

    public function __construct($type, $name, $value = null)
    {
        $this->e = new CreateElement('input');
        $this->a = new AttrForm($this->e, $name, $value, $this->property);

        $this->e->setAttribute('type',  $type);
        $this->e->setAttribute('name',  self::getName());
        $this->e->setAttribute('value', self::getValue());
    }



    public function setAttribute($property, $value = null)
    {
        $this->a->setAttribute($property, $value);

        return $this;
    } 



    public function getName()
    {
        return $this->a->getName();
    } 
    


    public function getValue()
    {
        return $this->a->getValue();
    } 
    


    public function getElement()
    {
        return  $this->e->getElement();
    } 



}

