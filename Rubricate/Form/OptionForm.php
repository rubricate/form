<?php 

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;;

class OptionForm implements IGetElement
{
    private $optArr = array();



    public function __construct(array $optionArr, $selected = NULL)
    {
        foreach ($optionArr as $value => $description)
        {
            $opt = new CreateElement('option');
            $opt->setAttribute('value', $value);
            $opt->addInnerText($description);

            if(!is_null($selected) && $selected == $value) 
            {
                $opt->setAttribute('selected', 'selected');
            }

            $this->optArr[] = $opt->getElement();
        }
    }



    public function getElement()
    {
        return implode('', $this->optArr);
    } 



}

