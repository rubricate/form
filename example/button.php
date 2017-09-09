<?php 

require '../vendor/autoload.php';

use Rubricate\Form;

$b = new Form\ButtonForm('ok');
$b->setAttribute('class', 'btn');



echo $b->getElement();






