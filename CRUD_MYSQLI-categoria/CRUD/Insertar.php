<?php

    include_once('../Config/Conexion.php');

    $nombre = $_POST['NoCat'];
    $imagen = $_POST['Img'];
    
    $sql = "INSERT INTO categoria(nombre,imagen)VALUES('$nombre','$imagen')";

    $query = mysqli_query($link,$sql);

    if ($query === TRUE) {
        header("Location: ../Index.php");
    }
