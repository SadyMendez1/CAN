
<!-- PANTALLA DE BIENVENIDA CON EL MENÚ DESPLEGABLE -->
<!-- PERO QUE TE LLEVE A INFO DE USER -->

<?php

session_start();


if (!isset($_SESSION['loggedin'])) {

    header('Location: /l_page/login/login.html');
    exit;
}


$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'sistema';

// conexion a la base de datos

$link = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_error()) {

    // si se encuentra error en la conexión

    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}

$stmt = $link->prepare('SELECT password, email FROM usuario WHERE iduser = ?');

$stmt->bind_param('i', $_SESSION['iduser']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Información del Usuario</title>

    <!--Estilos CSS-->
    <link rel="stylesheet" href="/l_page/estilos/estilos_.css">

<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

</head>

<body id="body" class="loggedin">
    
    <!--Header con el icono de menú, tres barritas-->
    <header>
        <div class="icon__menu">
            <!--clase de barritas, o sea el ícono-->
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

 <!--Div con el menú desplegable-->
    <div class="menu__side" id="menu_side">

        <a href="/l_page/inicio.php">
        <div class="name__page">
            <!--clase de icono de HOME, o sea lo que vamos a cambiar por CGB, VEASE EL TÍTULO-->
            <i class="fas fa-home" title="Inicio"></i>
            <h3>CGB - Inicio</h3>
        </div>
    </a>


     <div class="options__menu">	
        <scroll-container>

                <scroll-page id="page-1">
                <a href="/CRUD_MYSQLI-clientes/index.php">
                <div class="option">
                    <i class="far fa-file" title="Portafolio"></i>
                    <h4>CRUD CLIENTES</h4>
                </div>
                </a>
                </scroll-page>

                <scroll-page id="page-2">
                <a href="/CRUD_MYSQLI-usuarios/index.php">
                <div class="option">
                    <i class="far fa-file" title="Portafolio"></i>
                    <h4>CRUD USUARIOS</h4>
                </div>
                </a>
                </scroll-page>

                <scroll-page id="page-3">
                <a href="/CRUD_MYSQLI-productos/index.php">
                <div class="option">
                    <i class="far fa-file" title="Portafolio"></i>
                    <h4>CRUD PRODUCTOS</h4>
                </div>
                </a>
                </scroll-page>

                <scroll-page id="page-4">
                <a href="/CRUD_MYSQLI-proveedores/index.php">
                <div class="option">
                    <i class="far fa-file" title="Portafolio"></i>
                    <h4>CRUD PROVEEDORES</h4>
                </div>
                </a>
                </scroll-page>

                <scroll-page id="page-5">
                <a href="/CRUD_MYSQLI-categoria/index.php">
                <div class="option">
                    <i class="far fa-file" title="Portafolio"></i>
                    <h4>CRUD CATEGORIA</h4>
                </div>
                </a>
                </scroll-page>

                <scroll-page id="page-6">
                <a href="#">
                <div class="option">
                    <i class="far fa-sticky-note" title="Blog"></i>
                    <h4>PEDIDOS PENDIENTES</h4>
                </div>
                </a>
                </scroll-page>

                <scroll-page id="page-7">
                <a href="#">
                <div class="option">
                    <i class="far fa-sticky-note" title="Blog"></i>
                    <h4>PEDIDOS ASIGNADOS</h4>
                </div>
                </a>
                </scroll-page>
        </scroll-container>



            <a href="/l_page/perfil.php">
                <div class="option">
                    <i class="fa fa-user-circle" title="Información de Usuario"></i>
                    <h4>Información de Usuario</h4>
                </div>
            </a>
            <a href="/l_page/login/cerrar_sesion.php">
                <div class="option">
                    <i class="fa fa-sign-out-alt" title="Cerrar Sesión"></i>
                    <h4>Cerrar Sesión</h4>
                </div>
            </a>  
    </div>
</div>
    <main>
<div class="content">
        <h1>Información del Usuario</h1><br>
    <div class="container bg-light p-3 border border-dark rounded">
        <p>La siguiente es la información registrada en tu cuenta.</p>
    <br>
    <table>
        <tr>
            <td>Usuario:        </td>
            <td><?= $_SESSION['name'] ?></td>
        </tr>
        <tr>
            <td>Email:  </td>
            <td><?= $email ?></td>
        </tr>
    </table>
    </div>
</div>



      <!--Footer-->
    <footer>
       <!-- <ul class="enlaces">
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Contactos</a></li>
            <li><a href="#">Términos y Condiciones</a></li>
            <li><a href="#">Política de Privacidad</a></li>
        </ul>-->
        <div class="copyright">
        <p>&copy; Sady Méndez - 2023 <br> Todos los derechos reservados.</p>
        </div>
    </footer>

    <!--Fin Footer-->


    <!--Script Librería Ionicons (Íconos)
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>-->
    <script src="/l_page/js/script.js"></script>
</body>
</html>