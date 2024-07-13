<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
	$lname = $_POST["lname"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // You can add more validation and sanitization here
    
    // Send email
    $to = "melili.ismail94@gmail.com";
    $subject = "Contact Form Submission from $fname $lname";
    $headers = "From: $email";
    $body = "First Name: $fname Last name: $lname \nEmail: $email\nMessage:\n$message";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Thank you for your message! ,I'll contact you very soon');</script>";
        $_POST = array();
    } else {
        echo "Message delivery failed.";
    }
}
?>