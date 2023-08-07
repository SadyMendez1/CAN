<?php 

    include_once("../Config/Conexion.php");

    $id = $_POST['ID'];
    $nombre = $_POST['NoCat'];
    $imagen = $_POST['Img'];

    $sql = "UPDATE categoria SET Nombre='$nombre', Imagen='$imagen' WHERE id='$id'";


    $query = mysqli_query($link, $sql);

    if ($query == TRUE) {
        header('Location: ../Index.php');
    }

?>