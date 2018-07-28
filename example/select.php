<?php 

require '../vendor/autoload.php';

use Rubricate\Form\SelectForm;
use Rubricate\Form\OptionForm;
use Rubricate\Form\OptionGroupForm;


$select1 = new SelectForm('latim');
$select2 = new SelectForm('latim2');

$select1->setAttribute('class', 'selectpicker');
$select2->setAttribute('class', 'selectpicker');

$opt1[] = 'choose';
$opt1[] = 'lorem';
$opt1[] = 'ipsum';
$opt1[] = 'dolor';

$opt2[] = 'liquam';
$opt2[] = 'incidunt';
$opt2[] = 'igula';
$opt2[] = 'ulla';

$select1->addChild(new OptionForm($opt1));
$select2->addChild(new OptionGroupForm('name here', $opt2));
    
echo 'select : <br />';
echo $select1->getElement();

echo '<br />';
echo '<br />';

echo 'select Group: <br />';
echo $select2->getElement();

/*
<select name="latim" class="selectpicker">
  <option value="0">choose</option>
  <option value="1">lorem</option>
  <option value="2">ipsum</option>
  <option value="3">dolor</option>
</select>

<select name="latim2" class="selectpicker">
    <optgroup label="name here">
        <option value="0">liquam</option>
        <option value="1">incidunt</option>
        <option value="2">igula</option>
        <option value="3">ulla</option>
    </optgroup>
</select>

*/

