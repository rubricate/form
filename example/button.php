<?php 

require '../vendor/autoload.php';

use Rubricate\Form;

$b = new Form\Button('ok');
$b->setAttribute('class', 'btn');



echo $b->getElement();






