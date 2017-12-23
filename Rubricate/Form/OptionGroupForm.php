<?php 

namespace Rubricate\Form;

use Rubricate\Element\IGetElement;
use Rubricate\Element\CreateElement;

class OptionGroupForm implements IGetElement
{
    private $e;

    

    public function __construct($label, array $optionArr, $selected = NULL)
    {
       $this->e  = new CreateElement('optgroup');

       $this->e->setAttribute('label', $label);
       $this->e->addInnerJoin(new OptionForm($optionArr, $selected));
    }



    public function getElement()
    {
        return $this->e->getElement();
    } 


    
}

