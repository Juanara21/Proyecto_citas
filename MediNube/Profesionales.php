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
            <i class="fas fa-bars" id="btn_open">
            
            </i>
        </div>
        <div class="titulo">
            <h3>MODULO PARA AGREGAR PROFESIONALES A LA BASE DE DATOS</h3>
        </div>
    </header>
    
    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-solid fa-briefcase-medical"></i>
            <h4>MediNube</h4>
        </div>

        <div class="options__menu">	

            <a href="bienvenido.php">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="Profesionales.php" class="selected">
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

        <div class="contenedor_login_registrar">
        
        <form action="php/registrar_especialistas.php" method="POST" class="formulario_registrar_profesional">
                    
                    <h1>Agregar Profesionales</h1>                   
                    <input type="text" placeholder="Primer Nombre" name="primer_nombre">
                    <input type="text" placeholder="Segundo Nombre" name="segundo_nombre">
                    <input type="text" placeholder="Primer Apellido" name="primer_apellido">
                    <input type="text" placeholder="Segundo Apellido" name="segundo_apellido">
                    <select id="Tipo_Documento" name="tipo_documento">
                        <option value="">Tipo de Documento</option>
                        <option value="TI">Tarjeta de identidad</option>
                        <option value="CC">Cedula de Ciudadania</option>
                        <option value="RC">Registro Civil</option>
                        <option value="PP">Pasaporte</option>
                        
                    </select>
                    
                    <input type="text" placeholder="Numero de Documento" name="numero_documento">
                    <select id="sexo" name="sexo">
                        <option value="">Seleccione el sexo</option>
                        <option value="m">Masculino</option>
                        <option value="f">Femenino</option>
                        <option value="nn">No especificado</option>
                                               
                    </select>
                    <input type="text" placeholder="Telefono Celular" name="celular">
                    <select id="profesional" name="especialidad">
                        <option value="0">Profesional en</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <input type="text" placeholder="Numero de tarjeta profesional" name="tarjeta_profesional">
                    <input type="text" placeholder="Correo Electronico" name="correo_electronico">
                    
                    <button>Registrar</button>
                    
            
                </form>
        </div>
          
    </main>
    

    <script src="js/scriptbarra.js"></script>
</body>
</html>