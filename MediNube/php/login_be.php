<?php  
    session_start();

    include 'conexion_be.php';

    $correo_electronico = $_POST['correo_electronico'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512',$contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM tb_registro WHERE correo_electronico='$correo_electronico' and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login)>0){
        $_SESSION['usuario'] = $correo_electronico;
        header("location: ../bienvenido.php");
        exit();
    }
    else{
        echo '
        <script>
            alert("Contraseña o Usuario no coinciden, intentelo nuevamente.");
            window.location = "../index.php";
        </script>';
        exit();
    }
?>