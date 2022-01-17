<?php

 // ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
session_start();
  // $captchaUser = filter_var($_POST['captcha-input'], FILTER_SANITIZE_STRING);

  if (isset($_POST["submit"])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $website = $_POST['website'];
    $message = $_POST['message'];

    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LcCP1EaAAAAAEkw8TaOU0dBhoblQr80KXpOxCIV';
    $recaptcha_response = $_POST['recaptcha_response'];

     // Make and decode POST request:
     $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
     $recaptcha = json_decode($recaptcha);



    $from= 'From:' . $name .  "\r\n" .'Reply-To:' . $email . "\r\n" .'X-Mailer: PHP/' . phpversion();

    $to = 'rebekahshaw92@yahoo.co.uk'; 
    $subject = 'Message from rebekahshaw.com';
    $body = " Number: $number\n  Website: $website\n  Messgae:\n $message";
   

    // Check if name has been entered
    if (!$_POST['name']) {
      $errorName = 'Please enter your name';
    }
    
    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errorEmail = 'Please enter a valid email address';
    }

     // Check if phonev number has been entered
     if (!$_POST['number']) {
      $errorName = 'Please enter your phone number';
    }
    
    //Check if message has been entered
    if (!$_POST['message']) {
      $errorMessage = 'Please enter your message';
    }

  if ($recaptcha->score >= 0.5) {
  if (!$errorName && !$errorEmail && !$errorMessage ){
     if (mail ($to, $subject, $body, $from)) {

        $result='<script>alert("Thank You! I will be in touch")</script>';
       } else {
         $result='<script>alert("Sorry there was an error sending your message. Please try again later.")</script>';
       }
       $_POST = array();
     }
    }
  }
 }

?>