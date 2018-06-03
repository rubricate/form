<?php 

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;



class ButtonForm implements IGetElement
{

    public function __construct($value)
    {
        $this->e = new CreateElement('button');
        $this->e->addInnerText($value);
    }



    public function setAttribute($property, $value)
    {
        $this->e->setAttribute($property, $value);

        return $this;
    } 



    public function getElement()
    {
        return $this->e->getElement();
    } 



}

