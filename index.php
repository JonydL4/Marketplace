<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "marketplace";

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);

    if($enlace === false){
        die("Error en la conexión" .mysqli_connect_error());
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-registrer">
                    <h3>¿Aùn no tienes una cuenta?</h3>
                    <p>Regìstrate para que puedas iniciar Sesiòn</p>
                    <button id="btn__registrarse">Regìstrate</button>
                </div>
            </div>
            <div class="contenedor__login-register">
                <!--login-->
                <form action="#" name="marketplace" method="post" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>
                <!--Registro-->
                <form action="#" name="marketplace" method="post" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="number" name="num_de_identificacion" placeholder="Número de identificación" id="">
                    <input type="text" name="nombre_comprador" placeholder="Nombre completo" id="">
                    <input type="date" name="fecha_nacimiento" placeholder="fecha de nacimiento" id="">
                    <input type="text" name="pais" placeholder="País" id="">
                    <input type="tel" name="telefono" placeholder="telefono" id="">
                    <input type="email" name="correo" placeholder="Correo" id="">
                    <input type="password" name="contraseña" placeholder="Contraseña" id="">
                    <div class="botones">
                        <button name="Registro" >Registrarse</button>
                        <Button>Restablecer</Button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="script.js"></script>
    
</body>
</html>

<?php
    //Convertir variables 
    if(isset($_POST['registro'])){
        $num_de_identificacion = $_POST ['num_de_identificacion'];
        $nombre_comprador = $_POST ['nombre_comprador'];
        $fecha_nacimiento = $_POST ['fecha_nacimiento'];
        $pais = $_POST ['pais'];
        $telefono = $_POST ['telefono'];
        $correo = $_POST ['correo'];
        $contraseña = $_POST ['contraseña'];

        //Para ingresarlos a la tabla
        $insetarDatos = "INSERT INTO login_comprador VALUES('','$num_de_identificacion','$nombre_comprador','$fecha_nacimiento','$pais','$telefono','$correo','$contraseña')";

        $ejecutarInsertar = mysqli_query ($enlace, $insetarDatos);
    }
?>