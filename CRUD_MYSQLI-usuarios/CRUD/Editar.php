<?php 

    include_once("../Config/Conexion.php");

    $id = $_POST['ID'];
    $nombre = $_POST['NUs'];
    $apellido = $_POST['AUs'];
    $correo = $_POST['Correo'];
    $usuario = $_POST['USUARIO'];
    $contraseña = $_POST['Contraseña'];
    $rol = $_POST['ROL'];

    $sql = "UPDATE usuario SET Nombre='$nombre', Apellido='$apellido', Email='$correo', Username='$usuario', Password='$contraseña', Rol='$rol' WHERE iduser='$id'";

    $query = mysqli_query($link, $sql);

    if ($query == TRUE) {
        header('Location: ../Index.php');
    }

?>