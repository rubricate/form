<?php 

require '../vendor/autoload.php';

use Rubricate\Form\SelectOptForm;
use Rubricate\Form\SelectOptGroupForm;


$opt[] = 'choose';
$opt[] = 'lorem';
$opt[] = 'ipsum';
$opt[] = 'dolor';


$select = new SelectOptForm('latim', $opt);

/*
// OR 3 arguments 'selected'

$select = new SelectOptForm('latim', $opt, 2);
*/
$select->setAttribute('class', 'selectpicker');


echo 'select : <br />';
echo $select->getElement();

/*
<select name="latim" class="selectpicker">
  <option value="0">choose</option>
  <option value="1">lorem</option>
  <option value="2">ipsum</option>
  <option value="3">dolor</option>
</select>


*/

