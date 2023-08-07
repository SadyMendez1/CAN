<?php 

    include_once("../Config/Conexion.php");

    $id = $_POST['ID'];
    $nombre = $_POST['NEmp'];
    $apellido = $_POST['AEmp'];
    $rol = $_POST['ROL'];
    $correo = $_POST['Correo'];
    $contraseña = $_POST['Contraseña'];

    $sql = "UPDATE empleados SET Nombre='$nombre', Apellido='$apellido', Rol='$rol',
    Correo ='$correo', pass='$contraseña' WHERE id='$id'";


    $query = mysqli_query($link, $sql);

    if ($query == TRUE) {
        header('Location: ../Index.php');
    }

?>