<?php

/*     session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    require "../dependencias/vendor/autoload.php";


    
    $email = new PHPMailer();
    $email->isSMTP();


    $email->SMTPDebug = 0;
    $email->SMTPAuth=true;
    $email->SMTPSecure="tls";
    $email->Host="smtp.gmail.com";
    $email->Port=587;

    $email->Username = "cesar33jverne@gmail.com"; //Correo desde el que se envia

    //contraseña que nos ha salido en google en mi caso esta en un .txt en el escritorio.
    $email->Password=""; 

    $email->setFrom("cesar33jverne@gmail.com","BARCELONA");
    //El segundo argumento es (opcional) y es el nombre que tendra el que lo envia al que lo recibe.


    $email->Subject="Confirmación Registro"; //Esto es para modificar el asunto;
    $email->msgHTML("Esto es el cuerpo de la imagen, puedes poner codigo html.");//Cuerpo del correo

    $email->addAttachment("2_2_login_comprobado.php");//Archivo adjunto
    
    $email->addAddress("cesar.m004@gmail.com");
    //nombre es el nombre que tendra la cuenta a la persona que se manda para quien lo envia.

    $resultado = $email->send();
    
    if(!$resultado){
        echo "<br> Error: ". $email->ErrorInfo ."<br>";
    }else{
        echo "enviado";
    } */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/confirmacion.css">
    <link rel="stylesheet" href="../css/footerHeader.css">
    <title>Confirmar Correo</title>
</head>
<body>
    <header>

    </header>
    <main>

    </main>

    <footer class="footer">
        <div class="metodos">
            <img src="../imagenes/metodos-de-pago/bitcoin-svgrepo-com.svg" alt="visa">
            <img src="../imagenes/metodos-de-pago/icons8-visa-48.png" alt="paypal">
            <img src="../imagenes/metodos-de-pago/mastercard-svgrepo-com.svg" alt="mastercard">
            <img src="../imagenes/metodos-de-pago/paypal-svgrepo-com.svg" alt="crypto">
        </div>
        <div class="informacion-general">
            <ul class="informacion-footer foot1">
                <h3>Por que comprar</h3>
                <li>Como comprar</li>
                <li>Preguntas frecuentes</li>
                <li>Formas de pago</li>
                <li>Opiniones de clientes</li>
                <li>Colecciones</li>
            </ul>
            <ul class="informacion-footer foot2">
                <h3>Quienes somos</h3>
                <li>Quienes somos</li>
                <li>Aviso legal</li>
                <li>Privacidad</li>
                <li>Nuestar tienda</li>
            </ul>
            <ul class="informacion-footer foot3">
                <h3>Nuestra Comunidad</h3>
                <li>Blog</li>
                <li>Regalos</li>
                <li>Foro</li>
            </ul>
            <ul class="informacion-footer foot4">
                <h3>Siguenos en</h3>
                <div class="redes-footer">
                    <li><a href="https://www.x.com/"><img src="../imagenes/footer/pngwing.com (1).png"></a></li>
                    <li><a href="https://www.facebook.com/"><img src="../imagenes/footer/pngwing.com (2).png"></a></li>
                    <li><a href="https://www.youtube.com/"><img src="../imagenes/footer/pngwing.com (3).png"></a></li>
                    <li><a href="https://www.instagram.com/"><img src="../imagenes/footer/pngwing.com.png"></a></li>
                </li>
                </div> 
            </ul>
            <div class="informacion-footer foot5">
                <h3>Envianos un mensaje</h3>
                <div class="contacto">
                    <form action="" method="post">
                        <input type="text" placeholder="Contacta con nostoros" name="contacta" class="contacta">
                        <input type="button" value="Enviar" name="enviar-gmail">
                    </form>
                </div> 
            </div>
            <div class="copy foot6"><p><p>&copy; 2024 <a href="https://tusitio.com" target="_blank">Tu Empresa o Sitio Web</a>. Todos los derechos reservados. 
            Consulta nuestros <a href="https://tusitio.com/terminos-de-uso" target="_blank">Términos de Uso</a> y 
            <a href="https://tusitio.com/politica-de-privacidad" target="_blank">Política de Privacidad</a>.</p></p>
            </div> 
        </div>
    </footer>
</body>
</html>
