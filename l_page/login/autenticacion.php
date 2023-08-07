<?php
session_start();


//credenciales de acceso a la base datos

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'sys_can';

// conexion a la base de datos

$link = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_error()) {

    // si se encuentra error en la conexión

    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}

// Se valida si se ha enviado información, con la función isset()

if (!isset($_POST['username'], $_POST['password'])) {

    // si no hay datos muestra error y re direccionar

    header('Location: /l_page/login/login.html');
}

// evitar inyección sql

if ($stmt = $link->prepare('SELECT id,password FROM accounts WHERE username = ?')) {

    // parámetros de enlace de la cadena s

    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
}


// acá se valida si lo ingresado coincide con la base de datos

$stmt->store_result();
if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $password);
    $stmt->fetch();

    // se confirma que la cuenta existe ahora validamos la contraseña

    if ($_POST['password'] === $password) {


        // la conexion sería exitosa, se crea la sesión



        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['id'] = $id;
        header('Location: /l_page/inicio.php');
    }
} else {

    // usuario incorrecto
    header('Location: /l_page/login/login.html');
}

$stmt->close();
