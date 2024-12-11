
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/css.css">
</head>
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <img src="../img/logo_transparent.png" alt="" id="logo">
                <label for="nombre">Nombre <span>*</span></label>
                <input type="text" placeholder="Nombre" name="nombre" id="nombre">
                <label for="apellidos">Apellidos <span>*</span></label>
                <input type="text" placeholder="Apellidos" name="apellidos" id="apellidos">
                <label for="fechaNacimiento">Fecha de Nacimiento <span>*</span></label>
                <input type="date" id="fechaNacimiento" name="fechaNacimiento">
                <label for="email">Correo Electronico</label>
                <input type="email" placeholder="Correo Electronico" name="email" id="email">
                <label for="contraseña">Contraseña <span>*</span></label>
                <input type="password" placeholder="Contraseña" name="contraseña" id="contraseña">
                <label for="rcontraseña"> Repetir Contraseña <span>*</span></label>
                <input type="password" placeholder="Repetir Contraseña" name="rcontraseña" id="rcontraseña">
                <button type="submit" name="registro">Registrarse</button>
        </form>
        
        <?php
        require "conexion.php";

        try{
            $baseDatos = new PDO($cadena_conexion,$usuario,$clave,$errmode);
            echo "conectado a la base de datos.";
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
                        echo "<div class='mensaje'>
                                <h2>¡¡¡REGISTRO INVALIDO!!!</h2>
                            </div>";
                        if(!isset($contraseña)) echo "<div><h2>Las contraseñas no coinciden.</h2></div>";
                        if(!$estadoFecha) echo "<div><h2>El usuario a registrar es menor de edad.</h2></div>";
                        $baseDatos->rollBack();
                    }else{
                        $baseDatos->commit();
                        echo "<h2>Registrado Correctamente</h2>";
                    }
                }
            }
        }catch(PDOException $e){
            echo  "error con la base de datos: ".$e->getMessage();
        }
    ?>
    </div>
    
</body>
</html>
