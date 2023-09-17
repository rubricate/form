<?php

declare(strict_types=1);

namespace Rubricate\Form;

use Rubricate\Form\Active\ValueActiveForm;

class RadioForm implements IElementForm
{
    private $e, $value;

    public function __construct($name, $value = null)
    {
        $this->e     = new InputForm('radio', $name, $value);
        $this->value = $value;
    }

    public function setAttribute($property, $value = null): object
    {
        $this->e->setAttribute($property, $value);

        return $this;
    } 

    public function getName(): string
    {
        return $this->e->getName();
    } 

    public function getElement(): string
    {
        return  $this->e->getElement();
    } 

    public function checked($value): object
    {
        $checked = new ValueActiveForm($this->value, $this->e);
        $checked->setActive('checked', $value);

        return $this;
    } 

}

