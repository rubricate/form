<?php 

declare(strict_types=1);

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;;
use Rubricate\Form\Active\ValueActiveForm;
use Rubricate\Element\StrElement;

class OptionForm implements IGetElement
{
    private $e, $optArr, $value, $result = array();

    public function __construct(array $optArr, $selected = null)
    {
        $this->optArr = $optArr;
        $this->value  = $selected;
    }

    public function getElement(): string
    {
        self::optList();

        return implode('', $this->result);
    } 

    private function optList(): void
    {
        foreach ($this->optArr as $value => $description)
        {
            $this->e = new CreateElement('option');

            $this->e->setAttribute('value', $value);
            $this->e->addChild(new StrElement($description));

            self::setSelected($value);

            $this->result[] = $this->e->getElement();
        } 
    } 

    private function setSelected($value): object
    {
        $a = new ValueActiveForm($this->value, $this->e);
        $a->setActive('selected', $value);

        return $this;
    } 

}

