<?php

declare(strict_types=1);

namespace Rubricate\Form;

use Rubricate\Form\Active\ValueActiveForm;

class FileForm implements IElementForm
{
    private $e;

    public function __construct($name)
    {
        $this->e = new InputForm('file', $name);
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

