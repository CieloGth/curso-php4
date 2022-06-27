<?php

    require("vendor/autoload.php");

    use  PHPMailer\PHPMailer\PHPMailer;
    function sendMail($name, $body, $subject, $email, $html=false){

        //configuracion inicial del servidor

        //Mailtrap
        #https://mailtrap.io/inboxes/1798759/messages 
        // $phpmailer = new PHPMailer();
        // $phpmailer->isSMTP();
        // $phpmailer->Host = 'smtp.mailtrap.io';
        // $phpmailer->SMTPAuth = true;
        // $phpmailer->Port = 2525;
        // $phpmailer->Username = '9203484b99f7bb';
        // $phpmailer->Password = 'c7654c2e537d1a';

        //Gmail
        #cielocorcam@gmail.com
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.gmail.com';
        $phpmailer->SMTPAuth = true;
        $phpmailer->SMTPSecure=PHPMailer::ENCRYPTION_SMTPS;
        $phpmailer->Port = 465;
        $phpmailer->Username = 'cielocorcam@gmail.com';
        $phpmailer->Password = 'dtxgaondebqxtbaf';


        //destinatario
        $phpmailer->setFrom('contact@miempresa.com', 'Mi Empresa');
        $phpmailer->addAddress($email, $name);

        //contenido del email
        $phpmailer->isHTML($html);                                  
        $phpmailer->Subject = $subject;
        $phpmailer->Body    = $body;
        $phpmailer->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $phpmailer->send();
    }
?>