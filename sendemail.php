<?php
# Include the Autoloader (see "Libraries" for install instructions)
require './vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-77eb89390fa2c682b101cf924de1d568');
$domain = "mmiller314.github.io";

$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 
$to   	 = 'millerchat315@gmail.com'; //replace with your email

echo 'Hello ' . $message;

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
                  array('from'    => $name . '<' . $from . '>',
                        'to'      => 'Michael Miller <millerchat315@gmail.com>',
                        'subject' => $subject,
                        'text'    => $message));

?>
