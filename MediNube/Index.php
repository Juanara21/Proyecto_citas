<?php  
    session_start();

    if(isset($_SESSION['usuario'])){
       header("Location: bienvenido.php");
    }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registros de Usuarios</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="CSS/estilos.css">

</head>
<body>
    <main>
        <div class="contenedor_todo">
            
            <div class="caja_trasera">
                <div class="caja_trasera_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la página</p>
                    <button id="btn_iniciar_sesion">Iniciar Sesión</button>
                </div>

                <div class="caja_trasera_Registrar">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para entrar en la página</p>
                    <button id="btn_registrarse">Registrarse</button>
                </div>

            </div>
            <div class="contenedor_login_registrar">
                <form action="php/login_be.php" class="formulario_login" method="POST">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" name="correo_electronico" id="" placeholder="Correo Electronico ">
                    <input type="password" name="contrasena" id="" placeholder="Contraseña ">
                    <button>Entrar</button>
                </form>
                <form action="php/registrar_be.php" method="POST" class="formulario_registrar">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Primer Nombre" name="primer_nombre">
                    <input type="text" placeholder="Segundo Nombre" name="segundo_nombre">
                    <input type="text" placeholder="Primer Apellido" name="primer_apellido">
                    <input type="text" placeholder="Segundo Apellido" name="segundo_apellido">
                    
                    <input type="text" placeholder="Numero de Documento" name="documento">
                    <input type="text" placeholder="Correo Electronico" name="correo_electronico">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrar</button>
                    
            
                </form>
            </div>
            
        </div>
    </main>
    <script src="js/script.js"></script>
</body>
</html>