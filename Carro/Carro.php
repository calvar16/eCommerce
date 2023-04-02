<?php
    include('../config/config.php');
    include('../config/Database.php');
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Enlazamos a nuestra hoja de estilos personalizada -->
  <link rel="stylesheet" href="./cssCarro/carro.css">
  <title>Productos e-Commerce</title>
</head>
<body>
    <!-- Barra de Navegación con logotipo incluido -->

<?php include('../Productos/menuProducto.php'); ?>
    <div class="container-principal">
        <div class="container-title">
            <div>
                <div class="title-carro">
                    <p>Tu Canasta</p>
                </div>
                <div class="container-carro">
                    <div class="image-carro">
                        <img src="./imagenesCarro/cart4.svg" alt="carro compras">
                    </div>
                    <div>
                        <p>Aún no tienes productos en tu canasta</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-button">
            <button type="button" class="button btn btn-primary btn-lg btn-block">
              <a href="./index.html">Comenzar a comprar</a>
            </button>
        </div>
    </div>
    <!-- Footer -->
    <?php include('../Productos/footer.php'); ?>
<!-- Se enlaza con javascript de bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>