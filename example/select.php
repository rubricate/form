<?php 

require '../vendor/autoload.php';

use Rubricate\Form\Select;


$select = new Select('latim');
$select->setAttribute('class', 'selectpicker');

$opt[] = 'choose';
$opt[] = 'lorem';
$opt[] = 'ipsum';
$opt[] = 'dolor';

$select->addOptions($opt);
    
echo $select->getElement();

/*
<select class="selectpicker">
  <option value="0">choose</option>
  <option value="1">lorem</option>
  <option value="2">ipsum</option>
  <option value="3">dolor</option>
</select>

*/

