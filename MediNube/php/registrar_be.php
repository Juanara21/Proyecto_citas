<?php 
    include 'conexion_be.php';

	$primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $primer_apellido = $_POST['primer_apellido'];
    $segundo_apellido = $_POST['segundo_apellido'];
    $documento = $_POST['documento'];
    $correo_electronico = $_POST['correo_electronico'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512',$contrasena); 
    
    $query = "INSERT INTO tb_registro (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, documento, correo_electronico, contrasena)
             VALUE ('$primer_nombre','$segundo_nombre','$primer_apellido','$segundo_apellido','$documento','$correo_electronico','$contrasena')";
    
    $verificar_documento = mysqli_query($conexion,"SELECT * FROM tb_registro WHERE documento='$documento'" );
    $verificar_correo_electronico = mysqli_query($conexion,"SELECT * FROM tb_registro WHERE correo_electronico='$correo_electronico'" );

    if(mysqli_num_rows($verificar_documento)>0){
        echo '<script>
            alert("Este documento ya se encuentra registrado.");
            window.location = "../index.php";
            </script>';
        
        exit();
    }
    if(mysqli_num_rows($verificar_correo_electronico)>0){
        echo '<script>
            alert("Este Correo electronico ya se encuentra registrado.");
            window.location = "../index.php";
            </script>';
        
        exit();
    }
    
    $ejecutar=mysqli_query($conexion,$query);

    if($ejecutar){
        echo '<script>
        alert("¡¡Usuario registrado correctamente!!.");
        window.location = "../index.php";
        </script>';  
    }else{
        echo '<script>
        alert("¡¡Usuario no registrado!! por favor intentelo de nuevo.");
        window.location = "../index.php";
        </script>'; 
    }

    mysqli_close($conexion);
 ?>
