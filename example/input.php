<?php 

require '../vendor/autoload.php';

use Rubricate\Form\TextForm;
use Rubricate\Form\LabelForm;
use Rubricate\Element\CreateElement;

$div = new CreateElement('div');
$lab = new LabelForm('First Name:');
$txt = new TextForm('firstName', 'john');

$div->setAttribute('class', 'form-group');
$lab->setAttribute('for', 'firstName');
$txt->setAttribute('id', 'firstName');

$div->addChild($lab);
$div->addChild($txt);

echo $div->getElement();

/*
<div class="form-group">
    <label for="firstName">First Name:</label>
    <input type="text" name="firstName" value="john" id="firstName" />
</div>
*/


