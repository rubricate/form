<?php 

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;
use Rubricate\Element\StrElement;

class FieldsetForm implements IGetElement
{
    private $e;
    
    public function __construct($titleLegend)
    {
        $fieldset = new CreateElement('fieldset');
        $legend   = new CreateElement('legend');

        $legend   ->addChild(new StrElement($titleLegend));
        $fieldset ->addChild($legend);

        $this->e = $fieldset;
    }

    public function setAttribute($property, $value): self
    {
        $this->e->setAttribute($property, $value);

        return $this;
    } 

    public function addChild(IGetElement $inner): self
    {
        $this->e->addChild($inner);

        return $this;
    } 

    public function getElement(): string
    {
        return $this->e->getElement();
    } 
    
}

