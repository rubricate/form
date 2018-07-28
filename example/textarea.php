<?php 

require '../vendor/autoload.php';

use Rubricate\Form\TextareaForm;
use Rubricate\Form\LabelForm;
use Rubricate\Element\CreateElement;

$div = new CreateElement('div');
$lab = new LabelForm('Message:');
$msg = new TextareaForm('message');

/*
   
 // or 2 arguments (value) 
 $msg = new TextareaForm('message', 'lorem ipsum dolor sit amet');

 */

$div->setAttribute('class', 'message');
$lab->setAttribute('for', 'message');

$msg->setAttribute('class', 'message');
$msg->setAttribute('id', 'message');

$div->addChild($lab);
$div->addChild($msg);

echo $div->getElement();

/*
<div class="message">
    <label for="message">Message:</label>
    <textarea name="message" class="message" id="message"></textarea>
</div>
*/

