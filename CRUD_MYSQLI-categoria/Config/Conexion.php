
<?php

    $host = "localhost";
    $user = "root";
    $pass = "123";
    $db = "sys_can";

   // $conexion = mysqli_connect($host, $user, $pass, $db);


    $link = mysqli_connect("localhost", "root", "", "sys_can");

    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


/*function conectar(){
    $server = 'localhost';
    $bd = 'cliente';
    

    
    $conexion=mysqli_connect($server,$user,$pass,$bd) or die ("Error al conectar a la base de datos".mysql_error());
    
    return $conexion;


} */  

?>