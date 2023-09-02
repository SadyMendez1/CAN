<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/estilos/estilos.css">
</head>

<body style=" 
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #f0e5ff;" >

    <!--Círculo-->
    <div class="circulo"></div>
    <!--Fin de Círculo-->

    <!--Header-->
    <header>
    <a href="/l_page/inicio.php" class="logo">CAN</a>
    </header>
    <!--Fin Header-->

    <!--CRUD-->

    
<div class="table-responsive container bg-light p-3 border border-ligth rounded position-sticky">

    <h1 class="bg-success p-2 text-white text-center rounded">SISTEMA CAN - consulta de Pedidos</h1>
    <br>
    <div class="container">
    
        <a href="detallepedidos.php" class="btn bg-success text-white border border-light">consulta pedidos</a>
        
    </div>
    <br>

    <div class=" container bg-ligth p-3 border border-success rounded">
        <table class="table">
            <thead class="table-success">
                <tr>
                    
                    <th scope="col">ID</th>
                    <th scope="col">CLIENTE</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">HORA</th>
                    <th scope="col">SUBTOTAL</th>
                    <th scope="col">TOTAL</th>
                    <th scope="col">ESTADODEPAGO</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col"></th>

                    <div class="container">
			
			<div class="row">
				
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nombre: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>
			</div>
			

                    </tr>
            </thead>
            <tbody>

            <?php

            if(!empty($_POST))
               {
              $valor = $_POST['campo'];
               if(!empty($valor)){
                $where = "WHERE nombre LIKE '%$nombre'";
               }
               }


            $sql = 'SELECT * FROM pedidos';
            $query = mysqli_query($link, $sql);
            
            while ($fila = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <th scope="row"><?php echo $fila['idpedido']?></th>
                    <th scope="row"><?php echo $fila['idcliente']?></th>
                    <th scope="row"><?php echo $fila['fecha']?></th>
                    <th scope="row"><?php echo $fila['hora']?></th>
                    <th scope="row"><?php echo $fila['subtotal']?></th>
                    <th scope="row"><?php echo $fila['total']?></th>
                    <th scope="row"><?php echo $fila['estadodepago']?></th>
                    <th scope="row"><?php echo $fila['estado']?></th>


                     
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

    if($lista_carrito== null){
                $total=0;
                foreach($lista_carrito as producto){
               $idproducto=$producto['idproducto'];
               $idproducto=$producto['nombre'];
               $precio=$producto['precio'];
               $subtotal=$cantidad * $precio;
               $total=$subtotal;


                }

            }


</body>

</html>
