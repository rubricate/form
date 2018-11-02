<?php 

require '../vendor/autoload.php';

use Rubricate\Form\LabelForm;
use Rubricate\Form\CheckboxForm;


for ($i = 1; $i <= 3; $i++) {
    
    $checkbox = new CheckboxForm('checkbox[]', $i);
    $checkbox->checked(2);

    $label = new LabelForm(
        $checkbox->getElement() . 'Option ' . $i
    );

    echo $label->getElement();
    echo PHP_EOL;

}    

/*
<label>
    <input type="checkbox" name="checkbox[]" value="1" />
    Option 1
</label>
<label>
    <input type="checkbox" name="checkbox[]" value="2" checked="checked"/>
    Option 2
</label>
<label>
    <input type="checkbox" name="checkbox[]" value="3" />
    Option 3
</label>

*/ 
