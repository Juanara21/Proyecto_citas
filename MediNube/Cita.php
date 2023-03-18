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
        <h1>Agendar Cita</h1><br>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam sapiente cumque dicta animi explicabo sequi. Ex amet et, dolor eligendi commodi consectetur quo voluptatibus, cum nemo porro veniam at blanditiis?</p> <br>

        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident adipisci beatae impedit quia, deleniti quasi sequi iusto exercitationem nihil nulla, laboriosam dolore corrupti fuga officiis? Odit a mollitia id magnam amet delectus quia blanditiis reprehenderit explicabo eveniet! Rem voluptatum explicabo ipsum quae, dolorum, laudantium doloribus a, illum saepe sapiente accusantium dicta reiciendis? Amet iure porro voluptatum error fugit odit voluptas?</p>
    </main>
    

    <script src="js/scriptbarra.js"></script>
</body>
</html>