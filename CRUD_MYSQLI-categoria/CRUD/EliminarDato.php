<?php
    include_once('../Config/Conexion.php');

    $id = $_REQUEST['ID'];

    $sql = "DELETE FROM categoria WHERE id = '$id'";
    
    $query = mysqli_query($link, $sql);

    if ($query == TRUE) {
        header('location: ../Index.php');
    }
?>


