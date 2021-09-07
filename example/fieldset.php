<?php 

require '../vendor/autoload.php';

use Rubricate\Form\FieldsetForm;
use Rubricate\Form\LabelForm;
use Rubricate\Element\CreateElement;
use Rubricate\Form\CheckboxForm;



$elem = new FieldsetForm('Category:');

for ($i = 1; $i <= 3; $i++) {
    
    $checkbox = new CheckboxForm('checkbox[]', $i);
    $option   = $checkbox->getElement() . 'Option ' . $i;
    $label    = new LabelForm($option);

    $elem->addChild($label);

}    

echo $elem->getElement();

/*
<fieldset>
    <legend>Category:</legend>
    <label>
        <input type="checkbox" name="checkbox[]" value="1" />Option 1
    </label>
    <label>
        <input type="checkbox" name="checkbox[]" value="2" />Option 2
    </label>
    <label>
        <input type="checkbox" name="checkbox[]" value="3" />Option 3
    </label>
</fieldset>
*/
