<?php 

    include_once("../Config/Conexion.php");

    $id = $_POST['ID'];
    $descripcion = $_POST['DesProd'];
    $proveedor = $_POST['Prov'];
    $precio = $_POST['Precio'];
    $stock = $_POST['Stock'];
    $imagen = $_POST['Img'];


    $sql = "UPDATE producto SET Descripcion='$descripcion', Proveedor='$proveedor', Precio='$precio', Stock='$stock', Imagen='$imagen' WHERE idprod='$id'";


    $query = mysqli_query($link, $sql);

    if ($query == TRUE) {
        header('Location: ../Index.php');
    }

?>