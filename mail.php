<?php
$to='manavshah9890@gmail.com';
$subject = 'Hello from XAMPP!';
$message = ' <h1>hey kevu chale </h1>';
// $header = '';
$header = "From:  keyurpatel1149@gmail.com\n";
if (mail($to, $subject, $message, $header)){
echo "yes";
}else{
echo 'ERROR';
}

?>