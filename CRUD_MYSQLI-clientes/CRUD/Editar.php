<?php 

    include_once("../Config/Conexion.php");

    $id = $_POST['ID'];
    $ci = $_POST['CI'];
    $nombre = $_POST['NombreCliente'];
    $apellido = $_POST['ApellidoCliente'];
    $correo = $_POST['Correo'];
    $telefono = $_POST['Telefono'];
    $direccion = $_POST['Direccion'];

    $sql = "UPDATE cliente SET CI='$ci', Nombre='$nombre', Apellido='$apellido', Correo ='$correo', Telefono='$telefono', Direccion='$direccion' WHERE idcliente='$id'";

    $query = mysqli_query($link, $sql);

    if ($query == TRUE) {
        header('Location: ../Index.php');
    }

?>