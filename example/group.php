<?php 

require '../vendor/autoload.php';

use Rubricate\Form\SelectOptForm;
use Rubricate\Form\SelectOptGroupForm;


$opt['lorem']   = array(1 => 'ipsum',     2 => 'dolor',  3 => 'amet');
$opt['aliquam'] = array(4 => 'tincidunt', 5 => 'ligula', 6 => 'nulla');

$select = new SelectOptGroupForm('latim', $opt);

/*
 // OR 3 arguments 'selected'
    
    $select = new SelectOptGroupForm('latim', $opt, 2); 

 */


$select->setAttribute('class', 'selectpicker');


echo $select->getElement();

/*
<select name="latim" class="selectpicker">
    <optgroup label="lorem">
        <option value="1">ipsum</option>
        <option value="2">dolor</option>
        <option value="3">amet</option>
    </optgroup>
    <optgroup label="aliquam">
        <option value="4">tincidunt</option>
        <option value="5">ligula</option>
        <option value="6">nulla</option>
    </optgroup>
</select>
*/

