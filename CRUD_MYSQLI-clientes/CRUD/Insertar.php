<?php

    include_once('../Config/Conexion.php');

    $ci = $_POST['CI'];
    $nombre = $_POST['NombreCliente'];
    $apellido = $_POST['ApellidoCliente'];
    $correo = $_POST['Correo'];
    $telefono = $_POST['Telefono'];

    $sql = "INSERT INTO cliente(ci,nombre,apellido,correo,telefono)VALUES('$ci','$nombre','$apellido','$correo','$telefono')";

    $query = mysqli_query($link,$sql);

    if ($query === TRUE) {
        header("Location: ../Index.php");
    }
