<?php

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

abstract class AbstractSelectForm implements IElementForm
{
    protected $select;
    private   $attr;

    public function __construct($name)
    {
        self::init($name);
    }

    private function init($name): void
    {
        $this->select = new CreateElement('select');
        $this->attr   = new AttrForm($this->select, $name, null);

        $this->select->setAttribute('name', self::getName());

        $this->optionList();
    } 

    abstract protected function optionList();

    public function getName(): string
    {
        return $this->attr->getName();
    } 

    public function getValue(): void
    {
        return $this->attr->getValue();
    } 

    public function getElement(): string
    {
        return $this->select->getElement();
    } 

    public function setAttribute($property, $value = null): void
    {
        $this->attr->setAttribute($property, $value);

        return $this;
    } 

}

