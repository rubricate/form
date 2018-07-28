<?php 

require '../vendor/autoload.php';

use Rubricate\Form\InputForm;
use Rubricate\Form\LabelForm;
use Rubricate\Element\CreateElement;



$grp = new CreateElement('div');
$lab = new LabelForm('First Name:');
$usr = new InputForm('text', 'firstName', 'john');

$grp->setAttribute('class', 'form-group');
$lab->setAttribute('for', 'usr');
$usr->setAttribute('id', 'usr');

$grp->addChild($lab);
$grp->addChild($usr);

echo $grp->getElement();

/*
<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr">
</div>
*/

