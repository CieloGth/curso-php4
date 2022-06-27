<?php 
require("mail.php");
    function validate($name, $email, $tel, $subject, $message, $form){
        return !empty($name) && !empty($email) && !empty($tel) && !empty($subject) && !empty($message);
    }
    $status="";
    if (isset($_POST["form"])) {
        if (validate(...$_POST)) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $tel = $_POST["tel"];
            $subject = $_POST["subject"];
            $message = $_POST["message"];

            $body = "$name <$email> te envia el siguiente mensaje: <br><br> $message <br><br> Si requieres contactar a $name su numero telefonico es $tel";

            //mandar correo

            sendMail($name, $body,$subject, $email, true);

            $status = "success";
        }
        else{
            $status="danger";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    
    <title>Formulario de Contacto</title>

    <script src="https://kit.fontawesome.com/b57319cb40.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fascinate+Inline&family=Monoton&display=swap');
        </style>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap');
            </style>
    <link rel="stylesheet" href="./style.css"> 
</head>
<body id="body">

    <div class="container mt-5">
        <div class="message">
            <?php if($status=="danger"):?>
                <div class="alert alert-danger">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <span>Surgio un problema</span>
                </div>  
            <?php endif;?>
            <?php if($status=="success"):?>
                <div class="alert alert-success">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Mensaje enviado con exito</span>
                </div>
            <?php endif;?>
        </div>
        <div class="card">
            <div  class="card-header"><h1 class="m-3">¡Contactanos!</h1></div>
            <div class="card-body p-sm-3 p-md-4 p-lg-5">
                <form class="container-fluid" action="./" method="POST">
                    <div class="row r1">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12">
                                    <label for="name">Nombre: </label>
                                </div>
                                <div class="col-12 input-group">
                                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                                    <input class="form-control-lg" placeholder="Nombre" type="text" name="name" id="name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="email">Correo: </label>
                                </div>
                                <div class="col-12 input-group">
                                    <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                                    <input class="form-control-lg"  placeholder="email@ejemplo.com" type="email" name="email" id="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="tel">Telefono: </label>
                                </div>
                                <div class="col-12 input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                    <input class="form-control-lg" placeholder="Telefono" type="number" name="tel" id="tel" min="1111111111" max="9999999999">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12">
                                    <label for="subject">Asunto: </label>
                                </div>
                                <div class="col-12 input-group">
                                    <span class="input-group-text"><i class="fa-regular fa-circle-question"></i></span>
                                    <input class="form-control-lg" placeholder="Asunto" type="text" name="subject" id="subject">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="message">Mensaje: </label>
                                </div>
                                <div class="col-12 input-group">
                                    <span class="input-group-text men"><i class="fa-regular fa-comment-dots"></i></span>
                                    <textarea class="form-control-lg" placeholder="Mensaje" name="message" id="message"></textarea>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row r2 mt-5">
                        <button name="form" type="submit" >Enviar</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="row m-3">
                    <div class="col-md-8 col-lg-6 p-2">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Av. Don Juan de Palafox y. Mendoza, Centro histórico de Puebla, 72000 Puebla, Pue., México</span>
                    </div>
                    <div class="col-md-4 col-lg-6 p-2">
                        <i class="fas fa-phone"></i>
                        <span>+52 222 936 9584</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/bootstrap.js"></script>    
</body>
</html>