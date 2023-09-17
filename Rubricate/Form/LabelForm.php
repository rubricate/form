<?php 

declare(strict_types=1);

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;
use Rubricate\Element\StrElement;

class LabelForm implements IGetElement
{
    private $e;

    public function __construct($labelName)
    {
        $this->e = new CreateElement('label');
        $this->e->addChild(new StrElement($labelName));
    }

    public function setAttribute($property, $value): object
    {
        $this->e->setAttribute($property, $value);

        return $this;
    } 

    public function addChild(IGetElement $inner): object
    {
        $this->e->addChild($inner);

        return $this;
    } 

    public function getElement(): string
    {
        return $this->e->getElement();
    } 
    
}

