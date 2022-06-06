<?php 
$nombre=$_POST['name'];
$email=$_POST['email'];
$mensaje=$_POST['message'];

mail('alb.saenz@gmail.com','titulo',$mensaje.' de '.$nombre.' desde '.$email);
 echo 'ok';

 // configure
// an email address that will be in the From field of the email.
$from = 'Demo contact form <contacto@albertosaenz.com>';

// an email address that will receive the email with the output of the form
$sendTo = 'Demo contact form <contacto@albertosaenz.com>';

// subject of the email
$subject = 'New message from contact form';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('name' => 'Name', 'email' => 'Email', 'message' => 'Message');
?>