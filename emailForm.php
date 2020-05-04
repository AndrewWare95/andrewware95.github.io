<?php


if(!isset($_POST['submit']))
{
    echo "error; you need to submit the form";
}

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//validate

if(empty($name) || empty($visitor_email))
{
    echo "Name and email are mandatory"
}


$email_form = 'caerapps@gmail.com';
$email_subject = "New form submission";
$email_body  = "You have received an email from $name. \n".
                "email address: $visitor_email\n".
                "Message : \n $message";

$to = "caerapps@gmail.com";
$headers = "From: $email_form \r\n";

//Send email!

mail($to, $email_subject, $email_body, $headers);