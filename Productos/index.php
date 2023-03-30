<?php
    include('../config/config.php');
    include('Producto.php');
    $s = new Producto();

    $allSecciones = $s->getAllSecciones();

    if (isset($_GET['idSeccion']) && !empty($_GET['idSeccion'])) {
        $remove = $s->remove($_GET['idSeccion']);
        if ($remove) {
            header('Location: ' . ROOT . 'Productos/index.php');
        } else {
            $msj = " <div class='alert alert-danger' rol='alert' > Error al mostar Secciones. </div> ";
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
    <title>Lista de Secciones e-Commerce</title>
</head>
<body>
    <?php include('../Productos/menuProducto.php'); ?>
     <!-- Creamos un contenedor que llevará las secciones -->
    <div class="container">
        <br>
        <h2 class="text-center mb-5">Lista de Productos por Sección</h2>

            
                <?php
                while ($s = mysqli_fetch_object($allSecciones)){?>
                    <div class="row">
                    <?php
                    $input = $s->seccionNombre;
                    echo " <div class='boder border-info p-2'> ";
                    echo "<h2 class='text-center'>";
                    echo   $s->seccionNombre;
                    echo "</h2>";
                    echo " </div> ";

                    ?>
                    </div>          
                    
                    





                    <div class="row">
                    <?php
                        $p = new Producto();
                        $productosSeccion = $p->getProductosSeccion($s->idSeccion);

                        while ($p = mysqli_fetch_object($productosSeccion)){

                            echo "<div class='col col-lg-3 col-md-4 col-sm-12'>";
                            echo "   <div class='card'>";
                            echo "        <img src='../imagenesProductos/" . $p->path_foto . "' class='card-img-top' alt='...'>";
                            echo "        <div class='card-body'>";
                            echo "         <h5 class='card-title'>" . $p->nombre .  "</h5>";
                            echo "         <p class='card-text'>"  . $p->descripcion .  "</p>";
                            echo "         <p class='card-text'>Precio: "  . number_format($p->precio,2) .  "</p>";
                            echo "         <p class='card-text'>Stock: "  . number_format($p->stock,2) .  "</p>";
                            echo "         <a href='#' class='btn btn-primary'>Agregar al carro de compras</a>";
                            echo "         </div>";
                            echo "     </div>";
                            echo " </div>";
                        }
                    ?>
                    </div>
                    <?php
                }
                ?>
            <!-- $allSecciones = $s->getAllSecciones(); -->
            <br>

            
    </div>
    <br>
     <!-- Footer -->
   
    <footer class="footer">
        <div class="container">
            <div class="row" data-bs-theme="dark">
                <p>Todos los derechos revervados.</p>
            </div>
        </div>   
    </footer>

    <!-- Se enlaza con javascript de bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>