<?php

    include_once('../Config/Conexion.php');

    $nombre = $_POST['NombreProv'];
    $correo = $_POST['Correo'];
    $telefono = $_POST['Telefono'];
    $direccion = $_POST['Direccion'];

    $sql = "INSERT INTO proveedor(nombre_prov,correo,telefono,direccion)VALUES('$nombre','$correo','$telefono','$direccion')";

    $query = mysqli_query($link,$sql);

    if ($query === TRUE) {
        header("Location: ../Index.php");
    }
