<?php
    include_once('../Config/Conexion.php');
    $id = $_REQUEST['ID']; // 'ID' se conecta con el ID de la línea 49 de indexphp

    $sql = "SELECT * FROM producto WHERE idprod = '$id'";
    $query = mysqli_query($link, $sql);
    $fila = mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/CRUD_MYSQLI-productos/estilos/estilos.css">

</head>

<body style="
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #68bb7e;">

    <!--Círculo-->
    <div class="circulo"></div>
    <!--Fin de Círculo-->

    <!--Header-->
    <header>
    <a href="/l_page/inicio.php" class="logo">CAN </a>
    </header>
    <!--Fin Header-->

<!--CRUD-->
<div class="container bg-dark p-3 border border-dark rounded position-absolute">
    <h1 class="bg-secondary p-2 text-white text-center rounded">SISTEMA CAN - Editar producto</h1>

    <br>

    <div class="container">
        <form action="../CRUD/Editar.php" method="POST">



        <!-- $fila['*'] se conecta con una columna de la db cliente  -->

            <input type="Hidden" name="ID" value="<?php echo $fila['idprod']?>">

            <div class="mb-3">
                <label class="form-label text-white">Descripción del producto</label>
                <input type="text" class="form-control" placeholder="Descripción del Producto" name="DesProd" value="<?php echo $fila['descripcion']?>">
            </div>

            <div class="mb-3">
                <label class="form-label text-white">Proveedor</label>
                <input type="text" class="form-control" placeholder="Proveedor" name="Prov" value="<?php echo $fila['proveedor']?>">
            </div>

            <div class="mb-3">
                <label class="form-label text-white">Precio del producto</label>
                <input type="text" class="form-control" placeholder="Precio del producto" name="Precio" value="<?php echo $fila['precio']?>">
            </div>

            <div class="mb-3">
                <label class="form-label text-white">Stock</label>
                <input type="text" class="form-control" placeholder="Stock" name="Stock" value="<?php echo $fila['stock']?>">
            </div>

            <div class="input-group">
            <div class="custom-file">      
                <label class="custom-file-label" for="exampleInputFile">Elige Imagen</label>      
                <input type="file" class="custom-file-input" id="Img" value="<?php echo $fila['imagen']?>">
            </div>
            </div>

            
            <div class="container text-center">
                <button type="submit" class="btn bg-light border border-dark">Editar Producto</button>
                <a href="../Index.php" class="btn btn-dark">Regresar</a>
            </div>

        </form>
    </div>




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