<?php

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;

class SelectOptForm extends AbstractSelectForm
{
    private $optArr, $selected;



    public function __construct($name, $optArr, $selected = null)
    {
        self::init($optArr, $selected);
        parent::__construct($name);
    }



    private function init($optArr, $selected)
    {
        $this->optArr   = $optArr;
        $this->selected = $selected;
    } 


    protected function optionList()
    {

        $this->select->addChild(
            new OptionForm(
                $this->optArr, $this->selected
            ));

    } 



}

