<?php 

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;
use Rubricate\Element\StrElement;



class LabelForm implements IGetElement
{

    private $e;
    


    public function __construct($labelName)
    {
        $this->e = new CreateElement('label');
        $this->e->addChild(new StrElement($labelName));
    }



    public function setAttribute($property, $value)
    {
        $this->e->setAttribute($property, $value);

        return $this;
    } 



    public function addChild(IGetElement $inner)
    {
        $this->e->addChild($inner);

        return $this;
    } 
    


    public function getElement()
    {
        return $this->e->getElement();
    } 
    

    
}

