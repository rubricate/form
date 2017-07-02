<?php 

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class Input implements IGetElement
{

    private $e;





    public function __construct($type, $name, $value = NULL)
    {
        $this->e = new CreateElement('input');
        $this->e->setAttribute('type',  $type);
        $this->e->setAttribute('name',  $name);
        $this->e->setAttribute('value', $value);
    }





    public function setAttribute($name, $value = NULL)
    {
        $this->e->setAttribute($name, $value);

        return $this;
    } 





    public function getElement()
    {
      return  $this->e->getElement();
    } 





}

