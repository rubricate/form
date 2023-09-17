<?php 

declare(strict_types=1);

namespace Rubricate\Form;

class NameValueAttrForm implements INameValueAttrForm
{
    private $name, $value;
    
    public function __construct($name, $value)
    {
        $this->name  = $name;
        $this->value = $value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}

