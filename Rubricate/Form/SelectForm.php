<?php

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class SelectForm extends AbstractSelectForm
{

    public function __construct($name)
    {
        parent::__construct($name);

    }




    public function addInnerJoin(IGetElement $inner)
    {
        parent::getSelect()->addInnerJoin($inner);
    } 



    protected function optionList()
    {
        parent::getSelect()->addInnerText('');
    } 



}

