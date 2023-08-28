<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ventas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/CRUD_MYSQLI-categoria/estilos/estilos.css">
</head>

<body style=" 
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #68bb7e;" >

    <!--Círculo-->
    <div class="circulo"></div>
    <!--Fin de Círculo-->

    <!--Header-->
    <header>
    <a href="/l_page/inicio.php" class="logo">CAN</a>
    </header>
    <!--Fin Header-->

    <!--CRUD-->
<div class="container bg-dark p-3 border border-dark rounded position-absolute">

    <h1 class="bg-secondary p-2 text-white text-center rounded">SISTEMA CAN - orden de Pedidos</h1>
    <br>
    <div class="container">
        <a href="Forms/AgregarCategoria.php" class="btn bg-light border border-dark">Agregar Ventas</a>

    </div>
    <br>
    <div class="container bg-light p-3 border border-dark rounded">
        <h1>Ventas</h1>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">FECHA </th>
                    <th scope="col">PRODUCTO</th>
                    <th scope="col">CANTIDAD</th>
                    <th scope="col">ESTADO</th>


                    <th scope="col"></th>






                </tr>
            </thead>
            <tbody>

            <?php
            include ("Config/Conexion.php");
            $sql = 'SELECT * FROM pedidos';
            $query = mysqli_query($link, $sql);
            
            while ($fila = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <th scope="row"><?php echo $fila['idpedidos']?></th>
                    <th scope="row"><?php echo $fila['fecha']?></th>
                    <th scope="row"><?php echo $fila['producto']?></th>
                    <th scope="row"><?php echo $fila['cantidad']?></th>
                    <th scope="row"><?php echo $fila['estado']?></th>



                    <th scope="row">
                        <!--php?ID se conecta con editardatophp en $_REQUEST['ID']; $fila['id'] se conecta con la columna id de la db sys_can-->
                        <a href="Forms/EditarDato.php?ID=<?php echo $fila['id']?>" class="btn text-white text-center bg-secondary">ver detalle</a>
                        <a href="CRUD/EliminarDato.php?ID=<?php echo $fila['id']?>" class="btn btn-danger">rechazar</a>
                    </th>
                </tr>
                <?php
            }
                ?>
            </tbody>
        </table>
    </div>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </div>
        <!--Fin de CRUD-->

    <!--Footer-->
    <footer>
        <div class="copyright">
            <p>&copy; Sady Méndez - 2023</p>
        </div>
    </footer>
    <!--Fin Footer-->
</body>

</html>