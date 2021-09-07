<?php 

require '../vendor/autoload.php';

use Rubricate\Form\FileForm;
use Rubricate\Form\LabelForm;
use Rubricate\Element\CreateElement;



$grp = new CreateElement('div');
$lab = new LabelForm('image:');
$usr = new FileForm('image');

$grp->setAttribute('class', 'form-group');
$lab->setAttribute('for', 'image');
$usr->setAttribute('id',  'image');

$grp->addChild($lab);
$grp->addChild($usr);

echo $grp->getElement();

/*
<div class="form-group">
    <label for="image">image:</label>
    <input type="file" name="image" value id="image" />
</div>
*/

