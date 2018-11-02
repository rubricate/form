<?php

namespace Rubricate\Form;

use Rubricate\Form\Active\ValueActiveForm;



class FileForm implements IElementForm
{
    private $e;



    public function __construct($name)
    {
        $this->e = new InputForm('file', $name);
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


