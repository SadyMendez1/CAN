<?php

    include_once('../Config/Conexion.php');

    $nombre = $_POST['NUs'];
    $apellido = $_POST['AUs'];
    $usuario = $_POST['USUARIO'];
    $correo = $_POST['Correo'];
    $contraseña = $_POST['Contraseña'];
    $rol = $_POST['ROL'];

    $sql = "INSERT INTO usuario(nombre,apellido,usuario,correo,pass,rol)VALUES('$nombre','$apellido','$usuario','$correo','$contraseña', '$rol')";

    $query = mysqli_query($link,$sql);

    if ($query === TRUE) {
        header("Location: ../Index.php");
    }
