<?php
session_start();

// Generate captcha code
$random_number = md5(random_bytes(64));
$captcha_code = substr($random_number, 0, 6);

// Assign captcha in session
$_SESSION['CAPTCHA_CODE'] = $captcha_code;

// Create captcha image
$layer = imagecreatetruecolor(168, 37);
$captcha_background = imagecolorallocate($layer, 204, 204, 0);
imagefill($layer, 0, 0, $captcha_background);
$captcha_text_colour = imagecolorallocate($layer, 0, 0, 0);
imagestring($layer, 5, 55, 10, $captcha_code, $captcha_text_colour);
header("Content-type: image/jpeg");
imagejpeg($layer);

?>