<?php
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $from= 'From:' . $name .  "\r\n" .'Reply-To:' . $email . "\r\n" .'X-Mailer: PHP/' . phpversion();

 //$headers .= "From:" . $name . "\r\n";
 //$headers .= "Reply-To:" . $email . "\r\n";
 //$headers .= "Return-Path:" . $email . "\r\n";
 //$headers .= "X-Priority: 3\r\n";
 //$headers .= "X-Mailer: PHP". phpversion() ."\r\n"; 


    $to = 'rebekahshaw92@yahoo.co.uk'; 
    $subject = 'Message from rebekahshaw.com';
    $body ="$message";
    // Check if name has been entered
    if (!$_POST['name']) {
      $errorName = 'Please enter your name';
    }
    
    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errorEmail = 'Please enter a valid email address';
    }
    
    //Check if message has been entered
    if (!$_POST['message']) {
      $errorMessage = 'Please enter your message';
    }
    //Check if simple anti-bot test is correct
    
    if(!empty($_POST['website'])) die();


// If there are no errors, send the email
if (!$errorName && !$errorEmail && !$errorMessage) {
  if (mail ($to, $subject, $body, $from)) {
    $result='<div id="success" class="alert alert-success">Thank You! I will be in touch</div>';
  } else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
  }

  $_POST = array();

  }
}
?>