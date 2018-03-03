<?php 

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;

class TextareaForm implements IElementForm
{
    private $e, $a;
    private $property = array('name');



    public function __construct($name, $value = null)
    {
        $this->e = new CreateElement('textarea');
        $this->a = new NameValueAttrForm($name, $value);

        $this->e->setAttribute('name', self::getName());
        $this->e->addInnerText(self::getValue());
    }



    public function setAttribute($property, $value)
    {
        if (in_array($property, $this->property)) {
            throw new \Exception(
                ''
                . "the '{$property}' attribute is already set."
                ."\n"
            );
        }

        $this->e->setAttribute($property, $value);

        return $this;
    } 



    public function getName()
    {
        return $this->a->getName();
    } 



    public function getValue()
    {
        return $this->a->getValue();
    } 



    public function getElement()
    {
        return $this->e->getElement();
    } 



}

