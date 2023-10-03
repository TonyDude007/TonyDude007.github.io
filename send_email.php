<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = $_POST['recipient'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Send email
    $headers = "From: webmaster@example.com";  // Replace with your desired 'From' address
    $success = mail($recipient, $subject, $message, $headers);

    if ($success) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
}
