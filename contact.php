<?php

session_start();
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $captcha = $_POST['captcha-input'];

    $captchaUser = filter_var($_POST['captcha-input'], FILTER_SANITIZE_STRING);

    $from= 'From:' . $name .  "\r\n" .'Reply-To:' . $email . "\r\n" .'X-Mailer: PHP/' . phpversion();

    $to = 'rebekahshaw92@yahoo.co.uk'; 
    $subject = 'Message from rebekahshaw.com';
    $body = "$message";

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

    if (!$_POST['captcha-input']) {
      $errorCaptcha = 'Please enter the captcha';
     } 
    
    

    if ($_SESSION['CAPTCHA_CODE'] !== $captcha) {
      $result='<div class="alert alert-danger">CAPTCHA has failed</div>';
  } else if (!$errorName && !$errorEmail && !$errorMessage && $_SESSION['CAPTCHA_CODE'] == $captcha) {
     if (mail ($to, $subject, $body, $from)) {
         $result='<div id="success" class="alert alert-success">Thank You! I will be in touch</div>';
       } else {
         $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
       }
       $_POST = array();
   }
  }
  
?>