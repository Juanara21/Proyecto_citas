<?php 
    include 'conexion_be.php';

	$primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $primer_apellido = $_POST['primer_apellido'];
    $segundo_apellido = $_POST['segundo_apellido'];
    $tipo_documento = $_POST['tipo_documento'];
    $numero_documento = $_POST['numero_documento'];
    $sexo = $_POST['sexo'];
    $celular = $_POST['celular'];
    $direccion = $_POST['direccion'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $correo_electronico = $_POST['correo_electronico'];
    
    
    $query = "INSERT INTO tb_pacientes (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, tipo_documento, numero_documento, sexo, celular, direccion, fecha_nacimiento, correo_electronico)
             VALUE ('$primer_nombre','$segundo_nombre','$primer_apellido','$segundo_apellido','$tipo_documento','$numero_documento','$sexo','$celular','$direccion','$fecha_nacimiento','$correo_electronico')";
    
    $verificar_documento = mysqli_query($conexion,"SELECT * FROM tb_pacientes WHERE numero_documento='$numero_documento'" );
    $verificar_correo_electronico = mysqli_query($conexion,"SELECT * FROM tb_pacientes WHERE correo_electronico='$correo_electronico'" );

    if(mysqli_num_rows($verificar_documento)>0){
        echo '<script>
            alert("Este documento ya se encuentra registrado.");
            window.location = "../RegistrarPaciente.php";
            </script>';
        
        exit();
    }
    if(mysqli_num_rows($verificar_correo_electronico)>0){
        echo '<script>
            alert("Este Correo electronico ya se encuentra registrado.");
            window.location = "../RegistrarPaciente.php";
            </script>';
        
        exit();
    }
    
    $ejecutar=mysqli_query($conexion,$query);

    if($ejecutar){
        echo '<script>
        alert("¡¡Usuario registrado correctamente!!.");
        window.location = "../bienvenido.php";
        </script>';  
    }else{
        echo '<script>
        alert("¡¡Usuario no registrado!! por favor intentelo de nuevo.");
        window.location = "../RegistrarPaciente.php";
        </script>'; 
    }

    mysqli_close($conexion);
 ?>
