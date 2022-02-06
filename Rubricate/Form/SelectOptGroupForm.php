<?php

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;

class SelectOptGroupForm extends AbstractSelectForm
{
    private $optArr, $selected;

    public function __construct($name, $optArr, $selected = null)
    {
        self::init($optArr, $selected);
        parent::__construct($name);
    }

    private function init($optArr, $selected): void
    {
        $this->optArr   = $optArr;
        $this->selected = $selected;
    } 

    protected function optionList(): void
    {
        foreach ($this->optArr as $label => $opt) {

            $this->select->addChild(
                new OptionGroupForm(
                    $label, $opt, $this->selected
                ));
        } 
    } 

}

