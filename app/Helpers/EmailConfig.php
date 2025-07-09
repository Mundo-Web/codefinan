<?php

namespace App\Helpers;
use App\Models\General;
use PHPMailer\PHPMailer\PHPMailer;

class EmailConfig
{
    static function config($name, $mensaje): PHPMailer
    {
        $datosemail = General::first();
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = $datosemail->smtp;
        $mail->SMTPAuth = true;
        $mail->Username = $datosemail->emailsend;
        $mail->Password = $datosemail->contrasend;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->Subject = '' . $name . ', ' . $mensaje;
        $mail->CharSet = 'UTF-8';
        $mail->setFrom($datosemail->emailsend, 'Codefinan S.A.C.');
        return $mail;
    }
}
