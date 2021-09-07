<?php 

require '../vendor/autoload.php';

use Rubricate\Form\SelectForm;
use Rubricate\Form\OptionForm;


$select = new SelectForm('latim');

$select->setAttribute('class', 'sel_lorem');

$opt[] = 'choose';
$opt[] = 'lorem';
$opt[] = 'ipsum';
$opt[] = 'dolor';

/*
 select option:
new OptionForm($opt, 1) ;
*/

$select->addChild(new OptionForm($opt));
    
echo $select->getElement();


/*
<select name="latim" class="sel_lorem">
    <option value="0">choose</option>
    <option value="1">lorem</option>
    <option value="2">ipsum</option>
    <option value="3">dolor</option>
</select>
*/

