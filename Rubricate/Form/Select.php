<?php 

namespace Rubricate\Form;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class Select implements IGetElement
{
    private $select;
    private $name;
    private $optArr = array();


    public function __construct($name)
    {
        $this->select = new CreateElement('select');
        $this->select->setAttribute('name', $name);
        $this->select->addInnerText('');
    }






    public function getElement()
    {
        return $this->select->getElement();
    } 







    public function setAttribute($property, $value = NULL)
    {
        $this->select->setAttribute($property, $value);

        return $this;
    } 







    public function addOptions($optArr, $selected = NULL)
    {
        $opt = new Option($optArr, $selected);
        $this->select->addInnerJoin($opt);

        return $this;
    } 



    public function addOptionsGroup($label, $optArr, $selected = NULL)
    {
        $group = new CreateElement('optgroup');
        $opt   = new Option($optArr, $selected);

        $group->setAttribute('label', $label);
        $group->addInnerJoin($opt);

        $this->select->addInnerJoin($group);

        return $this;
    } 




}

