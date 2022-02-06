<?php

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;
use Rubricate\Element\StrElement;

class SelectForm extends AbstractSelectForm
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function addChild(IGetElement $inner): void
    {
        $this->select->addChild($inner);
    } 

    protected function optionList(): void
    {
        $this->select->addChild(new StrElement(''));
    } 

}

