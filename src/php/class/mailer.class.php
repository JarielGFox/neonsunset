<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class Mailer
{
    private $name;
    private $email;
    private $phone;
    private $message;

    public function __construct($name, $email, $phone, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
    }

    public function sendMail()
    {
        $mail = new PHPMailer(true);

        try {

            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = $_ENV['MAIL_USERNAME'];
            $mail->Password = $_ENV['MAIL_PASSWORD'];
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $this->name);
            $mail->addAddress('crudelegio@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = 'Nuova richiesta di contatto';
            $mail->Body = "Phone Number: " . $this->phone . "<br>" . "Message: " . $this->message . "<br>" . "E-mail: " . $this->email;

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
