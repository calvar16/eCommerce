<?php
    include('../config/config.php');
    include('Producto.php');
    $p = new Producto();

    $allProductos = $p->getAll();

    if (isset($_GET['codigo']) && !empty($_GET['codigo'])) {
        $remove = $p->remove($_GET['codigo']);
        if ($remove) {
            header('Location: ' . ROOT . 'Productos/index.php');
        } else {
            $msj = " <div class='alert alert-danger' rol='alert' > Error al mostar Productos. </div> ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Permite hacer la página responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlazamos a la hoja de estilos de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Enlazamos a nuestra hoja de estilos personalizada -->
    <link rel="stylesheet" href="../css/productos.css">
    <title>Lista de Productos e-Commerce</title>
</head>
<body>
    <?php include('../Productos/menuProducto.php'); ?>
     <div class="container">
        <br>
        <h2 class="text-center mb-5">Lista de Productos</h2>
            
        <div class="row">
            <?php
                while ($p = mysqli_fetch_object($allProductos)){
                    echo "<div class='col col-md-4 col-sm-12'>";
                    echo "   <div class='card'>";
                    echo "        <img src='../imagenesProductos/" . $p->path_foto . "' class='card-img-top' alt='...'>";
                    echo "        <div class='card-body'>";
                    echo "         <h5 class='card-title'>" . $p->nombre .  "</h5>";
                    echo "         <p class='card-text'>"  . $p->descripcion .  "</p>";
                    echo "         <p class='card-text'>Precio: "  . number_format($p->precio,2) .  "</p>";
                    echo "         <p class='card-text'>Stock: "  . number_format($p->stock,2) .  "</p>";
                    echo " <div class='text-center'style='margin-top: 5%;' ><a class='btn btn-success ' href='" . "editProducto.php?codigo=$p->codigo' > Modificar </a>
                         - <a class='btn btn-danger ' href='" . "deleteProducto.php?codigo=$p->codigo' > Eliminar </a> </div>";
                    echo " </div> ";  
                    echo "</div>";
                    echo "     </div>";
                }
            ?>
        </div>            
    </div>
    <br>
<!-- Footer -->
<?php include('../Productos/footer.php'); ?>
</body>
</html>