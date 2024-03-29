<?php 

declare(strict_types=1);

namespace Rubricate\Form;

use Rubricate\Element\IGetElement;
use Rubricate\Element\CreateElement;

class OptionGroupForm implements IGetElement
{
    private $e;

    public function __construct($label, $optionArr, $selected = null)
    {
        $this->e  = new CreateElement('optgroup');

        $this->e->setAttribute('label', $label);
        $this->e->addChild(new OptionForm($optionArr, $selected));
    }

    public function getElement(): string
    {
        return $this->e->getElement();
    } 
    
}

