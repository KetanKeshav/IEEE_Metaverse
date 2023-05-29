<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Please fill all the required fields.";
        exit;
    }

    $to = "ieee.blr.cs@gmail.com"; 
    $headers = "From: $name <$email>" . "\r\n";
    $messageBody = "Name: $name\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Subject: $subject\n";
    $messageBody .= "Message: $message\n";

    // Send the email
    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Oops! An error occurred while sending the message.";
    }
} else {
    echo "The form was not submitted.";
}
?>
