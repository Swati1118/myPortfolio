<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Create email message
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Replace the following with your own email address
    $to = "swatimane1118@gmail.com";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you for your submission! We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // Handle invalid requests
    echo "Invalid request.";
}
?>
