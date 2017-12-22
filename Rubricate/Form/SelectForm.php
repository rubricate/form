<?php 

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class SelectForm implements IGetElement
{
    private $select;
    private $name;
    private $optArr   = array();
    private $property = array('name');



    public function __construct($name)
    {
        self::init($name);

        $this->select = new CreateElement('select');
        $this->select->setAttribute('name', self::getName());
        $this->select->addInnerText('');
    }

    private function init($name)
    {
        $this->name = $name;
    } 
    

    public function getName()
    {
        return $this->name;
    } 
    


    public function getElement()
    {
        return $this->select->getElement();
    } 



    public function setAttribute($property, $value = NULL)
    {
        if (in_array($property, $this->property)) {
            throw new \Exception("the '{$property}' attribute is already set.\n");
        }

        $this->select->setAttribute($property, $value);

        return $this;
    } 



    public function addOptions($optArr, $selected = NULL)
    {
        $opt = new OptionForm($optArr, $selected);
        $this->select->addInnerJoin($opt);

        return $this;
    } 




    public function addOptionsGroup($label, $optArr, $selected = NULL)
    {
        $group = new CreateElement('optgroup');
        $opt   = new OptionForm($optArr, $selected);

        $group->setAttribute('label', $label);
        $group->addInnerJoin($opt);

        $this->select->addInnerJoin($group);

        return $this;
    } 



}

