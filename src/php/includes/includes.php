<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/vendor/phpmailer/phpmailer/src/Exception.php';
require __DIR__ . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require __DIR__ . '/vendor/phpmailer/phpmailer/src/SMTP.php';
