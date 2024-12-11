<?php
// correo valido a1@gmail.com o 1@hotmail.com
$patron = "/^[a-zA-Z0-9._-]+@(gmail\.com|hotmail\.com)$/";

// Iniciar sesión para que puedas verificar la cookie
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cookie_name = "usuarioConsentimiento"; 
    if (isset($_POST["registrarse"])) {
        $email = $_POST["email"];
        $password = $_POST["contraseña"];
        $repetirPassword = $_POST["rcontraseña"];

        if ($password !== $repetirPassword) {
            $errorMessage = "Revisar Email o Contraseña";
        }
    }

    if (isset($_POST["aceptar"])) {
        $cookie_value = "aceptado";
        setcookie($cookie_name, $cookie_value, time() + 3600, "/"); 
    } elseif (isset($_POST["denegar"])) {
        setcookie($cookie_name, "", time() - 3600, "/"); 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Style.css">
</head>
<body>
    <div class="header"></div>
    <div class="maincontent">
        <div class="login-box">
            <div class="revisar">
                <h3>Crear cuenta</h3>
                <p>Tienes ya una cuenta?
                    <a href="Login.php">Login</a>
                </p>   
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="formulario-registro" method="POST">
                <input type="text" name="email" placeholder="Email" required>
                <input type="password" name="contraseña" placeholder="Password" required>
                <input type="password" name="rcontraseña" placeholder="Repetir Password" required>
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="apellidos" placeholder="Apellidos" required>
                <input type="date" name="fechaNacimiento"required>
                <p class="coincidir">
                    <?php
                        if (isset($errorMessage)) {
                            echo $errorMessage;
                        }
                    ?>
                </p>
                <div class="checkbox-container">
                    <input type="checkbox" class="checkbox" name="checkbox">
                    <label for="checkbox">Acepto recibir ofertas y noticias de los últimos juegos</label>
                </div>
                <input type="submit" value="Crear cuenta" class="registrarse" name="registro">
                <div class="division"><hr><p>or</p><hr></div>
            <div class="sesion">
                <a href="https://accounts.google.com/AccountChooser/signinchooser?service=CPanel&continue=https%3A%2F%2Fadmin.google.com%2Fctech.mx%2FDashboard&hl=es&ddm=1&flowName=GlifWebSignIn&flowEntry=AccountChooser"><div class="sesion1"><img src="../imagenes/icons8-logo-de-google-48.png"></div></a>
                <div class="sesion2"><a href="https://www.apple.com/es/mac/"><img src="../imagenes/icons8-mac-os-50.png"></a></div>
                <div class="sesion3"><a href="https://www.facebook.com/login/?locale=es_ES"><img src="../imagenes/facebook.png"></a></div>
            </div>
            </form>
        </div>
    </div>
    <div class="footer">
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
    </div>
        <!--  <div class="cookies">
            <h3>Uso de cookies</h3>
            <div class="cookies-flex">
                <p>Este sitio web utiliza cookies para mejorar la experiencia de navegación, ofrecer funcionalidades personalizadas y analizar el tráfico. Al hacer clic en "Aceptar", consientes el uso de todas las cookies"</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="formulario-cookies" method="post">
                    <input type="submit" value="Aceptar" id="aceptar" name="aceptar">
                    <input type="submit" value="Denegar" id="denegar" name="denegar">
                </form>
            </div>   
        </div> -->
    </div>
    <?php
        require "conexion.php";

        try{
            $baseDatos = new PDO($cadena_conexion,$usuario,$clave,$errmode);
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(isset($_POST["registro"])){
                    $baseDatos->beginTransaction();
                    $contraseña;
                    $fecha = new DateTime();
                    $fechaNacimiento = new DateTime($_POST["fechaNacimiento"]);
                    $diferenciaFechas = $fechaNacimiento->diff($fecha);
                    $estadoFecha;

                    if($_POST["contraseña"]===$_POST["rcontraseña"]){
                        $contraseña = $_POST["contraseña"];
                        $contraseñaCifrada = password_hash($contraseña,PASSWORD_BCRYPT);
                    };

                    if($diferenciaFechas->y >=16){
                        $estadoFecha = true;
                    } else{
                        $estadoFecha = false;
                    }

                    $sql = $baseDatos->prepare("INSERT into usuarios (correo,contraseña,nombre,apellidos,f_nacimiento) values (?,?,?,?,?)");
                    $resultado = $sql->execute(array($_POST["email"],$contraseñaCifrada,$_POST["nombre"],$_POST["apellidos"],$fechaNacimiento->format("Y-m-d")));
                    if(!isset($contraseña)||!$estadoFecha ||!$resultado){
                        $baseDatos->rollBack();
                        echo "esto no funciona";
                    }else{
                        $baseDatos->commit();
                    }
                }
            }
        }catch(PDOException $e){
            echo  "error con la base de datos: ".$e->getMessage();
        } 
    ?>
    <script src="js.js"></script>
</body>
</html>
