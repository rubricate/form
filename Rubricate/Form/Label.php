<?php 

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class Label implements IGetElement
{
    private $e;
    
    public function __construct($labelName)
    {
        $this->e = new CreateElement('label');
        $this->e->addInnerText($labelName);
    }

    public function setAttribute($property, $value)
    {
        $this->e->setAttribute($property, $value);

        return $this;
    } 


    public function addInnerText($inner)
    {
        $this->e->addInnerText($inner);

        return $this;
    } 




    public function addInnerJoin(IGetElement $inner)
    {
        $this->e->addInnerJoin($inner);

        return $this;
    } 
    


    public function getElement()
    {
        return $this->e->getElement();
    } 
    
    
}

