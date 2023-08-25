<?php 

    include_once("../Config/Conexion.php");

    $id = $_POST['ID'];
    $nombre = $_POST['NombreProv'];
    $correo = $_POST['Correo'];
    $telefono = $_POST['Telefono'];
    $direccion = $_POST['Direccion'];

    $sql = "UPDATE proveedor SET Nombre_Prov='$nombre', Correo ='$correo', Telefono='$telefono', Direccion='$direccion' WHERE idprov='$id'";

    $query = mysqli_query($link, $sql);

    if ($query == TRUE) {
        header('Location: ../Index.php');
    }

?>