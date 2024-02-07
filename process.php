<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // You can add your own code here to process the form data
  
  // For example, you can send an email with the form details
  $to = ":@lashukalashu.com";
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email";
  
  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message! We will get back to you soon.";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>
