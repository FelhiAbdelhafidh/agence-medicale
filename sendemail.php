<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$monmessage = $_POST['message'];

$to = "felhiabdelhafidh@gmail.com";
$subject = "Mon Contact Form";
$message = " Name: " . $name . "\r\n Sujet: " . $subject . "\r\n Email: " . $email . "\r\n Monmessage: " . $monmessage;


$from = "felhii";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

if ($_POST['submit']) {
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Email envoyé  !')</script>";
        // Created by Future Tutorials
    } else {
        echo "Erreur! ";
    }
}
?>