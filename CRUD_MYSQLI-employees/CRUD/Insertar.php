<?php

    include_once('../Config/Conexion.php');

    $nombre = $_POST['NEmp'];
    $apellido = $_POST['AEmp'];
    $rol = $_POST['ROL'];
    $correo = $_POST['Correo'];
    $contraseña = $_POST['Contraseña'];

    $sql = "INSERT INTO empleados(nombre,apellido,rol,correo,pass)VALUES('$nombre','$apellido','$rol','$correo','$contraseña')";

    $query = mysqli_query($link,$sql);

    if ($query === TRUE) {
        header("Location: ../Index.php");
    }
