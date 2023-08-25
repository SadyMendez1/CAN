
<!-- PANTALLA DE BIENVENIDA CON EL MENÚ DESPLEGABLE-->

<?php


// confirmar sesion

session_start();


if (!isset($_SESSION['loggedin'])) {

    header('Location: /l_page/login/login.html');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Página de Inicio - Sistema CAN</title>

    <!--Estilos CSS-->
    <link rel="stylesheet" href="/l_page/estilos/estilos_.css">

<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
<script type="text/javascript">
		function loadPageCli() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("content").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET", "/CRUD_MYSQLI-clientes/index.php", true);
			xhttp.send();
		}
	</script>

</head>

<body id="body">
    
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
            <!--clase de icono de HOME, o sea lo que vamos a cambiar por CAN, VEASE EL TÍTULO-->
            <i class="fas fa-home" title="Inicio"></i>
            <h3>CAN - Inicio</h3>
        </div>
        </a>


        <div class="options__menu">	



                <!--<div class="option">
                    <i class="far fa-file" title="Portafolio"></i>
                    <button onclick="loadPageCli()"><h4>CRUD CLIENTES</h4></button>
                </div>-->

                <a href="/CRUD_MYSQLI-clientes/index.php">
                <div class="option">
                    <i class="far fa-file" title="Portafolio"></i>
                    <h4>CRUD CLIENTES</h4>
                </div>
            </a>


            
            <a href="/CRUD_MYSQLI-usuarios/index.php">
                <div class="option">
                    <i class="far fa-file" title="Portafolio"></i>
                    <h4>CRUD USUARIOS</h4>
                </div>
            </a>

            <a href="/CRUD_MYSQLI-productos/index.php">
                <div class="option">
                    <i class="far fa-file" title="Portafolio"></i>
                    <h4>CRUD PRODUCTOS</h4>
                </div>
            </a>

            <a href="/CRUD_MYSQLI-proveedores/index.php">
                <div class="option">
                    <i class="far fa-file" title="Portafolio"></i>
                    <h4>CRUD PROVEEDORES</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-sticky-note" title="Blog"></i>
                    <h4>PEDIDOS PENDIENTES</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-sticky-note" title="Blog"></i>
                    <h4>PEDIDOS ASIGNADOS</h4>
                </div>
            </a>


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

    <div id="content" style="width: 100%;
  height: 100%;"></div>

        <h1>Página de inicio del Sistema CAN</h1><br>

        <p>Se bienvenido, <?= $_SESSION['name'] ?>.</p>


      <!--Footer-->
    <footer>
       <!-- <ul class="enlaces">
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Contactos</a></li>
            <li><a href="#">Términos y Condiciones</a></li>
            <li><a href="#">Política de Privacidad</a></li>
        </ul>-->
        <div class="copyright">
            <p>&copy; Sady Méndez - 2023</p>
        </div>
    </footer>

    <!--Fin Footer-->


    <!--Script Librería Ionicons (Íconos)
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>-->
    <script src="/l_page/js/script.js"></script>
</body>
</html>