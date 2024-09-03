<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars(trim($_POST["name"]));
    $game_id = htmlspecialchars(trim($_POST["game_id"]));
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Perform form validation if needed
    if (empty($name) || empty($game_id) || empty($phone) || empty($message)) {
        echo "All fields are required.";
        exit;
    } 
  

    // You can process the data further, e.g., save to a database, send an email, etc.
    
    // Example: Sending an email (make sure to configure mail server settings)
    $to = "your-email@example.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nGame ID: $game_id\nPhone: $phone\nMessage: $message";
    $headers = "From: no-reply@example.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us. We will get back to you soon.";
    } else {
        echo "There was a problem sending your message. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
