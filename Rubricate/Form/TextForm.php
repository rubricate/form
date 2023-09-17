<?php

declare(strict_types=1);

namespace Rubricate\Form;

class TextForm implements IElementForm
{
    private $e;

    public function __construct($name, $value = null)
    {
        $this->e = new InputForm('text', $name, $value);
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

}

