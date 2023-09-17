<?php 

declare(strict_types=1);

namespace Rubricate\Form\Active;

use Rubricate\Element\ISetAttributeElement;

class  ValueActiveForm
{
    private $value, $elem;

    public function __construct($value, ISetAttributeElement $elem)
    {
        $this->value = $value;
        $this->elem  = $elem;
    }

    public function setActive($nameAttr, $value): object
    {
        $isNull  = ( is_null($this->value) );
        $isEqual = ( $this->value == $value );

        if (!$isNull && $isEqual) {
            $this->elem->setAttribute($nameAttr, $nameAttr);
        }

        return $this;

    } 

}

