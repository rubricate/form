<?php 

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class TextareaForm implements IGetElement
{
    private $e;
    


    public function __construct($name, $value = NULL)
    {
        $this->e = new CreateElement('textarea');
        $this->e->setAttribute('name', $name);
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

