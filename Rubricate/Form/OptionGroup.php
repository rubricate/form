<?php 

namespace Rubricate\Form;


use Rubricate\Element\IGetElement;
use Rubricate\Element\CreateElement;


class OptionGroup implements IGetElement
{
    private $optGroup;
    
    public function __construct(
        $label, array $optionArr, $selected = NULL
    )
    {
       $option = new Option($optionArr, $selected);
       $group  = new CreateElement('optgroup');

       $group->setAttribute('label', $label);
       $group->addInner($option);

       $this->optGroup = $group;

    }




    public function getElement()
    {
        return $this->optGroup->getElement();
    } 
    

    
}

