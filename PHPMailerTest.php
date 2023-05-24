<?php

require "./vendor/phpmailer/phpmailer/src/Exception.php";
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();

foreach($_POST as $key => $value){
    ${$key} = $value;
}

echo $email;
echo $message;