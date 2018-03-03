<?php 

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;;
use Rubricate\Form\Active\ValueActiveForm;

class OptionForm implements IGetElement
{
    private $optArr, $e;
    private $value;
    private $result = array();



    public function __construct(array $optArr, $selected = null)
    {
        $this->optArr = $optArr;
        $this->value  = $selected;
    }



    public function getElement()
    {
        self::optList();

        return implode('', $this->result);
    } 



    private function optList()
    {
        foreach ($this->optArr as $value => $description)
        {
            $this->e = new CreateElement('option');

            $this->e->setAttribute('value', $value);
            $this->e->addInnerText($description);

            self::setSelected($value);

            $this->result[] = $this->e->getElement();
        } 
    } 



    private function setSelected($value)
    {
        $a = new ValueActiveForm($this->value, $this->e);
        $a->setActive('selected', $value);

        return $this;

    } 



}

