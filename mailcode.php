<?php

ini_set('SMTP', "server.com");
ini_set('smtp_port', "25");
ini_set('sendmail_from', "gameara@gmail.com");

$rand= rand(10, 20);
$to ="strugacevacdavid@gmail.com";
$header ='From:perkovincic@gmail.com';
$subject ='Verification Code';

$message = "Your Random number for change password is";
$message .= $rand;
$message .= "Thank you-Admin";

if(empty($to))
{
    echo "Email is Empty";
}
else
{
    if (mail($to,$subject,$message,$header)){

     echo 'Check Your Email For verfication code';
    }
    else{
        echo 'Failed';
    } 
}
?>
