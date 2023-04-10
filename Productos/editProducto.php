<?php
    include('../config/config.php');
    include('Producto.php');

    $s = new Producto();
    $allSecciones = $s->getAllSecciones();

    $data = mysqli_fetch_object($s->getOne($_GET['codigo']));

    if (isset($_POST) && !empty($_POST)){
        $producto = new Producto();

        if ($_FILES['image']['name'] !== '' || $_FILES['image']['name'] !== null){
            $_POST['image'] = saveImage($_FILES);
        }

        if (isset($_POST) && !empty($_POST)){
            $update = $s->update($_POST);
            if ($update){
                $error = '<div class="alert alert-success" role="alert">Producto modificado correctamente</div>';
            } else{
                $error = '<div class="alert alert-danger" role="alert"><Error al modificar Producto</div>';
            }
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
    <title>Productos e-Commerce</title>
</head>
<body>
    <?php include('../Productos/menuProducto.php'); ?>
     <!-- Creamos un contenedor que llevará los productos -->
    <div class="container">
        <?php  
            if (isset($error)){
                echo $error;
            }
        ?>
        <h2 class="text-center mb-5">Modificación de Productos</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col">
                <input type="text" name="codigo" id="codigo" placeholder="Código del Producto" require class="form-control" value=<?= $data->codigo ?>>
                </div>
                <div class="col">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre del Producto" require class="form-control" value=<?= $data->nombre ?>>
                </div>
            </div>
            <br>
            <div class="row mb-2">
                <div class="col">
                <textarea class="form-control" name="descripcion" text="text" placeholder="Descripción del Producto" id="descripcion"><?= $data->descripcion ?></textarea>
                </div>
                <div class="col">                
                   <div class="form-group">
                        <label for="seccionesLista">Sección</label>
                        <select class="form-select" name="idSeleccion" id="idSeleccion" onchange="verIndex();">  
                        <?php
                            while ($s = mysqli_fetch_object($allSecciones)){
                                echo "<option value=\"$s->idSeccion\">$s->seccionNombre</option>";
                            }
                        ?>
                        </select>          
                    </div>
                    
                </div>
            </div>
            <br>
            <div class="row mb-2">
              
                <div class="col">
                    <input type="text" name="precio" id="precio" placeholder="Precio del Producto" require class="form-control" value=<?= number_format($data->precio,2) ?>>
                </div>  
                <div class="col">
                    <input type="text" name="stock" id="stock" placeholder="Cantidad de Producto en inventario" require class="form-control" value=<?= number_format($data->stock,2) ?>>
                </div>  
            </div>
            <br>
            <div class="row mb-2">
              
                <div class="col">
                <label for="image">Fotografía del Producto</label>
                    <input type="file" name="image" id="image" class="form-control" placeholder="Seleccione Foto de producto" >
                </div>  
                <div class="col">
                    <br>
                    <input class="form-check-input mt-0" type="checkbox" value="" id="cbDestacado">
                    <label for="floatingInput">Producto Destacado</label>
                </div>    
            </div>
            <br>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <button class="btn btn-success">Modificar</button>
                </div>
                <div class="col-4"></div>
            </div>
            
        </form>
    </div>
    <br>
<!-- Footer -->
<?php include('../Productos/footer.php'); ?>

    <script type="text/javascript">
        function verIndex() {
            var lista = document.getElementById("seccionesLista");
            var opcion = lista.selectedIndex;
            document.getElementById("idSeleccion").value = opcion;
 /*            alert("Elegiste la opción con índice: " + opcion + " la cual contiene el valor: " + lista.options[opcion].firstChild.data); */        
        }
    </script>
    <!-- Se enlaza con javascript de bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>