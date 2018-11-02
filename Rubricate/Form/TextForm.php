<?php

namespace Rubricate\Form;


class TextForm implements IElementForm
{
    private $e;



    public function __construct($name, $value = null)
    {
        $this->e = new InputForm('text', $name, $value);
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



}

