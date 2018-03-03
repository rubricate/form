<?php 

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;

class SelectForm implements IElementForm
{
    private $e, $a;
    private $property = array('name');



    public function __construct($name)
    {
        $this->e = new CreateElement('select');
        $this->a = new NameValueAttrForm($name, null);

        $this->e->setAttribute('name', self::getName());
        $this->e->addInnerText('');
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



    public function setAttribute($property, $value = null)
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



    public function addOptions($optArr, $selected = null)
    {
        $opt = new OptionForm($optArr, $selected);
        $this->e->addInnerJoin($opt);

        return $this;
    } 



    public function addOptionsGroup($label, $optArr, $selected = null)
    {
        $group = new OptionGroupForm($label, $optArr, $selected);
        $this->e->addInnerJoin($group);

        return $this;
    } 



}

