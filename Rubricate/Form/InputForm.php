<?php 

declare(strict_types=1);

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\ISetAttributeElement;
use Rubricate\Form\IFieldForm;

class InputForm implements IElementForm, ISetAttributeElement
{
    private $e, $a;
    private $property = array('type', 'name', 'value');

    public function __construct($type, $name, $value = null)
    {
        $this->e = new CreateElement('input');
        $this->a = new AttrForm($this->e, $name, $value, $this->property);

        $this->e->setAttribute('type',  $type);
        $this->e->setAttribute('name',  $name);
        $this->e->setAttribute('value', $value);
    }

    public function setAttribute($property, $value = null): object
    {
        $this->a->setAttribute($property, $value);

        return $this;
    } 

    public function getName(): string
    {
        return $this->a->getName();
    } 

    public function getElement(): string
    {
        return  $this->e->getElement();
    } 

}

