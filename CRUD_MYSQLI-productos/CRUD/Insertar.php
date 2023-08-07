<?php

    include_once('../Config/Conexion.php');

    $nombre = $_POST['NoProd'];
    $precio = $_POST['Precio'];
    
    $sql = "INSERT INTO producto(nombre,precio)VALUES('$nombre','$precio')";

    $query = mysqli_query($link,$sql);

    if ($query === TRUE) {
        header("Location: ../Index.php");
    }
