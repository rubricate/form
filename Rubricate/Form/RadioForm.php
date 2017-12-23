<?php 

namespace Rubricate\Form;

use Rubricate\Form\Active\ValueActiveForm;


class RadioForm implements IElementForm
{

    private $e;
    private $property = array('type', 'name', 'value');



    public function __construct($name, $value = NULL)
    {
        $this->e = new InputForm('radio', $name, $value);
    }



    public function setAttribute($property, $value = NULL)
    {
        if (in_array($property, $this->property)) {
            throw new \Exception(''
                . "the '{$property}' attribute is already set."
                ."\n"
            );
        }

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

