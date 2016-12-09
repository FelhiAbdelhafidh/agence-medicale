<?php

include_once 'contact-us.php';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject']
$from = 'From: YourWebsite.com';
$to = 'felhiabdelhafish@gmail.com';


$body = "From: $name\n E-Mail: $email\n Message:\n $message";


if ($_POST['submit']) {
    if (mail($to, $subject, $body, $from)) {
        echo '<p>Thank you for your email!</p>';
    } else {
        echo '<p>Oops! An error occurred. Try sending your message again.</p>';
    }
}
?>