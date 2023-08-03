<?php
include 'includes/includes.php';
require_once 'class/mailer.class.php';

use Dotenv\Dotenv;

// in caso l'env non sia nella stessa dir di questo file
$dotenv_path = __DIR__ . '/.env';
if (!file_exists($dotenv_path)) {
    echo "Error: .env file not found at path: $dotenv_path";
    exit;
}

$dotenv = Dotenv::createImmutable(__DIR__); // ricordiamoci di nominare il file solo .env
$dotenv->load(); // questo popola la superglobal $_ENV

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo "Error: All fields are required.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Error: Invalid email format.";
        exit;
    }

    if (preg_match("/[\r\n]/", $name) || preg_match("/[\r\n]/", $email)) {
        echo "Error: Invalid header values.";
        exit;
    }

    $mailer = new Mailer($name, $email, $phone, $message);
    $mailer->sendMail();
} else {
    echo "Error: Invalid request.";
}
