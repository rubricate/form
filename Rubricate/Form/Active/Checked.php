<?php 

namespace Rubricate\Form\Active;

class  Checked
{
    private $value, $checked;

    public function __construct($value)
    {
        $this->value  = $value;
    }

    public function isValid($checked)
    {
        return (
            $this->value !== NULL && 
            $this->value == $checked
        );

    } 

}

