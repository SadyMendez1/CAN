<?php 

    include_once("../Config/Conexion.php");

    $id = $_POST['ID'];
    $nombre = $_POST['NUs'];
    $apellido = $_POST['AUs'];
    $usuario = $_POST['USUARIO'];
    $correo = $_POST['Correo'];
    $contraseña = $_POST['Contraseña'];
    $rol = $_POST['ROL'];

    $sql = "UPDATE usuario SET Nombre='$nombre', Apellido='$apellido', Usuario='$usuario',
    Correo ='$correo', pass='$contraseña', Rol='$rol', WHERE idusuario='$id'";


    $query = mysqli_query($link, $sql);

    if ($query == TRUE) {
        header('Location: ../Index.php');
    }

?>