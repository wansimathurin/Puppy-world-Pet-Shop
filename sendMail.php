<?php

// echo "hello bro";

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$city = $_POST['city'];
$country = $_POST['country'];
$phone_number = $_POST['phone'];
$zipCode = $_POST['zipCode'];

$email_from = 'teacuppuppy62@gmail.com';
$email_subject = 'New form submision';
$email_body = "User Name: $name, \n".
"ClientEmail: $visitor_email ,\n".
"message:$message,\n"."<h1>city:$city</h1>\n".
"country:$country,\n"."<h1>phone_number:$phone_number</h1>\n".
"zipCode:$zipCode,\n";

$to = "teacuppuppy62@gmail.com";
$headers= "From:$email_from \r\n";
$headers= "Reply-To:$visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:index.html");