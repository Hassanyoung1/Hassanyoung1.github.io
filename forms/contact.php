<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Set up email parameters
    $to = "your_email@example.com"; // Your email address
    $subject = "New message from portfolio website: $subject";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "success"; // You can return a success message if needed
    } else {
        echo "error sending email"; // Error sending email
    }
} else {
    echo "error form not submitted"; // If the form was not submitted properly
}
?>
