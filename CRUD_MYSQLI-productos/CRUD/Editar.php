<?php 

    include_once("../Config/Conexion.php");

    $id = $_POST['ID'];
    $nombre = $_POST['NoProd'];
    $precio = $_POST['Precio'];

    $sql = "UPDATE producto SET Nombre='$nombre', Precio='$precio' WHERE id='$id'";


    $query = mysqli_query($link, $sql);

    if ($query == TRUE) {
        header('Location: ../Index.php');
    }

?>