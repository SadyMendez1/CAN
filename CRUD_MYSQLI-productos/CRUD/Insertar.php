<?php

    include_once('../Config/Conexion.php');

    $descripcion = $_POST['DesProd'];
    $proveedor = $_POST['Prov'];
    $precio = $_POST['Precio'];
    $stock = $_POST['Stock'];
    $imagen = $_POST['Img'];
    
    $sql = "INSERT INTO producto(descripcion,proveedor,precio,stock,imagen)VALUES('$descripcion', '$proveedor', '$precio', '$stock', '$imagen')";

    $query = mysqli_query($link,$sql);

    if ($query === TRUE) {
        header("Location: ../Index.php");
    }
