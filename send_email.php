<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'alekha.rao@tufts.edu'; 
    $subject = 'Message from your website';
    $headers = "From: $name <$email>"; 
    $email_body = "You have received a new message from your website:\n\nName: $name\nMessage:\n$message";
    
    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo '<script>alert("Your message has been sent."); window.location.replace("index.html");</script>';
    } else {
        echo '<script>alert("Sorry, there was an error sending your message. Please try again later."); window.location.replace("index.html");</script>';
    }
}
?>