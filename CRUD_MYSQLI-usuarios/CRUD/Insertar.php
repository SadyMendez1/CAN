<?php

    include_once('../Config/Conexion.php');

    $nombre = $_POST['NUs'];
    $apellido = $_POST['AUs'];
    $correo = $_POST['Correo'];
    $usuario = $_POST['USUARIO'];
    $contraseña = $_POST['Contraseña'];
    $rol = $_POST['ROL'];

    $sql = "INSERT INTO usuario(nombre,apellido,correo,usuario,pass,rol)VALUES('$nombre','$apellido','$correo','$usuario','$contraseña','$rol')";

    $query = mysqli_query($link,$sql);

    if ($query === TRUE) {
        header("Location: ../Index.php");
    }
