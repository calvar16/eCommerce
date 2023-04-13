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
<?php include('../Productos/menuProducto.php'); ?>
    <div class="container-principal">
        <div class="container-title">
            <div>
                <div class="title">
                <h2>Carro de Compras</h2>
                </div>
                <div class="container">
                <div class="w-33">
                  <div class="center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>
                    </div>   
                    </div>                  
                    <div>
                    <h3 style="text-align: center;margin-top: 5%;margin-bottom: 3%;">Aún no tienes productos en tu canasta</h3>
                    </div>
                    <div class="cart-container">

  
                </div>
            </div>
        </div>
        <div class="w-33"style="margin-bottom: 3%;">
                  <div class="center">
            <button type="button" class="btn btn-primary">
              <a class="boton" href="../Productos/index.php">Comenzar a comprar</a>
            </button>
        </div>
        </div>

    </div>
    <!-- Footer -->
    <?php include('../Productos/footer.php'); ?>

</body>
</html>