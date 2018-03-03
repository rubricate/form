<?php 

require '../vendor/autoload.php';

use Rubricate\Form\LabelForm;
use Rubricate\Form\CheckboxForm;


for ($i = 1; $i <= 3; $i++) {
    
    $radio = new CheckboxForm('checkbox[]', $i);
    $radio->checked(2);

    $label = new LabelForm(
        $radio->getElement() . 'Option ' . $i
    );

    echo $label->getElement();
    echo '<br />';
    echo PHP_EOL;

}    

/*
<label>
    <input type="checkbox" name="checkbox[]" value="1" />
    Option 1
</label>
<br />
<label>
    <input type="checkbox" name="checkbox[]" value="2" checked="checked"/>
    Option 2
</label>
<br />
<label>
    <input type="checkbox" name="checkbox[]" value="3" />
    Option 3
</label>
<br />

*/ 
