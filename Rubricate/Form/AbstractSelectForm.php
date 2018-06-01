<?php 

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

abstract class AbstractSelectForm implements IElementForm
{
    private $select;
    private $a, $property = array('name');



    public function __construct($name)
    {
        self::init($name);
    }



    private function init($name)
    {
        $this->select = new CreateElement('select');
        $this->a = new NameValueAttrForm($name, null);

        $this->select->setAttribute('name', self::getName());

        $this->optionList();
    } 



    abstract protected function optionList();


    protected function getSelect()
    {
       return  $this->select;
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
        return $this->select->getElement();
    } 



    public function setAttribute($property, $value = null)
    {
        if (in_array($property, $this->property)) {
            throw new \Exception(
                ''
                . "the '{$property}' attribute is already set."
                ."\n"
            );
        }

        $this->select->setAttribute($property, $value);

        return $this;
    } 




}

