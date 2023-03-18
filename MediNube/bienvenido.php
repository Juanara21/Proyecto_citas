<?php  
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
        <script>
            alert("Por favor debes iniciar sesión.");
            window.location = " index.php";
        </script>';
        
        session_destroy();
        die();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú lateral responsive</title>

    <link rel="stylesheet" href="css/estilobarras.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">

    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>
    
    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-solid fa-briefcase-medical"></i>
            <h4>MediNube</h4>
        </div>

        <div class="options__menu">	

            <a href="bienvenido.php" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="Profesionales.php">
                <div class="option">
                    <i class="fa-sharp fa-solid fa-user-tie" title="Profesionales"></i>
                    <h4>Profesionales</h4>
                </div>
            </a>

            <a href="RegistrarPaciente.php">
                <div class="option">
                <i class="fa-solid fa-users" title="Pacientes"></i>
                    <h4>Pacientes</h4>
                </div>
            </a>

            <a href="Agenda.php">
                <div class="option">
                <i class="fa-solid fa-calendar-days" title="Agenda"></i>
                    <h4>Agenda</h4>
                </div>
            </a>

            <a href="Cita.php">
                <div class="option">
                    <i class="fa-sharp fa-solid fa-rectangle-list" title="Citas"></i>
                    <h4>Citas</h4>
                </div>
            </a>

            <a href="Nosotros.php">
                <div class="option">
                    <i class="far fa-address-card" title="Nosotros"></i>
                    <h4>Nosotros</h4>
                </div>
            </a>
            <a href="php/cerrar_sesion_be.php">
                <div class="option">
                    <i class="fa-sharp fa-solid fa-arrow-right-from-bracket" title="Salir"></i>
                    <h4>Salir</h4>
                </div>
            </a>

        </div>

    </div>

    <main>
        
        <center><div class="barra"><H4>PROFESIONALES ACTIVOS</H4></div>
        <div>
                        <table>
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Primer Nombre</td>
                                <td>Segundo Nombre</td>
                                <td>Primer Apellido</td>
                                <td>Segundo Apellido</td>
                                <td>Tipo de Documento</td>
                                <td>Numero de Documento</td>
                                <td>Sexo</td>
                                <td>Celular</td>
                                <td>Especialidad</td>
                                <td>Tarjeta Profesional</td>
                                <td>Correo Electronico</td>                             
                                
                             
                            </tr>
                     </thead>
                        <?php 


                        include 'php/conexion_be.php';

                        $suma1=0;
                        $sql="SELECT * from tb_profesionales";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                        ?>

                        <tr>
                            <td><?php echo $mostrar['id'] ?></td>
                            <td><?php echo $mostrar['primer_nombre'] ?></td>
                            <td><?php echo $mostrar['segundo_nombre'] ?></td>
                            <td><?php echo $mostrar['primer_apellido'] ?></td>
                            <td><?php echo $mostrar['segundo_apellido'] ?></td>
                            <td><?php echo $mostrar['tipo_documento'] ?></td>
                            <td><?php echo $mostrar['numero_documento'] ?></td>
                            <td><?php echo $mostrar['sexo'] ?></td>
                            <td><?php echo $mostrar['celular'] ?></td>
                            <td><?php echo $mostrar['especialidad'] ?></td>
                            <td><?php echo $mostrar['tarjeta_profesional'] ?></td>
                            <td><?php echo $mostrar['correo_electronico'] ?></td>
                            
                    
                        </tr>
                    <?php 
                    }
                    ?>
            
                    </table>

        </div>
        <div class="barra" align="left"><H4>PACIENTES REGISTRADOS</H4></div>  
        <div>
                        <table     >
                        <thead>
                        
                            
                        
                    
                            <tr>
                                <td>ID</td>
                                <td>Primer Nombre</td>
                                <td>Segundo Nombre</td>
                                <td>Primer Apellido</td>
                                <td>Segundo Apellido</td>
                                <td>Fecha de Nacimiento</td>
                                <td>Tipo de Documento</td>
                                <td>Numero de Documento</td>
                                <td>Sexo</td>
                                <td>Celular</td>
                                <td>Dirección</td>
                                <td>Correo Electronico</td>                             
                                
                             
                            </tr>
                     </thead>
                        <?php 


                        include 'php/conexion_be.php';

                        $suma1=0;
                        $sql="SELECT * from tb_pacientes";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                        ?>

                        <tr>
                            <td><?php echo $mostrar['id'] ?></td>
                            <td><?php echo $mostrar['primer_nombre'] ?></td>
                            <td><?php echo $mostrar['segundo_nombre'] ?></td>
                            <td><?php echo $mostrar['primer_apellido'] ?></td>
                            <td><?php echo $mostrar['segundo_apellido'] ?></td>
                            <td><?php echo $mostrar['fecha_nacimiento'] ?></td>
                            <td><?php echo $mostrar['tipo_documento'] ?></td>
                            <td><?php echo $mostrar['numero_documento'] ?></td>
                            <td><?php echo $mostrar['sexo'] ?></td>
                            <td><?php echo $mostrar['celular'] ?></td>
                            <td><?php echo $mostrar['direccion'] ?></td>
                            <td><?php echo $mostrar['correo_electronico'] ?></td>
                            
                    
                        </tr>
                    <?php 
                    }
                    ?>
            
                    </table>

        </div></center> 
    </main>
    

    <script src="js/scriptbarra.js"></script>
</body>
</html>