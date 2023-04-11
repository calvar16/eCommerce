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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Enlazamos a nuestra hoja de estilos personalizada -->
    <link rel="stylesheet" href="../css/Pagos_estilos.css">
    <title>Pagos e-Commerce</title>
</head>

<body>
    <?php include('../Productos/menuProducto.php'); ?>
    <!-- Barra de Navegación con logotipo incluido -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6"style="margin-top: 3%;">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="nombre">Nombre en la tarjeta</label>
                                <input type="text" class="form-control" id="nombre" required />
                            </div>
                            <div class="form-group">
                                <label for="numero">Número de tarjeta</label>
                                <input type="text" class="form-control" id="numero" required />
                            </div>
                            <div class="form-group">
                                <label for="vencimiento">Fecha de vencimiento</label>
                                <input type="month" name="fecha" id="fecha vencimiento" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="cvv">CVV</label>
                                <input type="number" class="form-control" id="cvv" required />
                            </div>
                            <div class="form-group">
                                <label for="tipo">Tipo de tarjeta</label>
                                <select class="form-control" id="tipo" required>
                                    <option value="" disabled selected>
                                        Seleccione el tipo de tarjeta
                                    </option>
                                    <option value="visa">Visa</option>
                                    <option value="mastercard">Mastercard</option>
                                    <option value="american">Nequi</option>
                                    <option value="american">Daviplata</option>
                                    <option value="american">PayPal</option>
                                </select>
                            </div>
                            <div class="form-group text-sm-center" style="margin-top: 5%;margin-bottom: 5%;">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>    
<?php include('../Productos/footer.php'); ?>
</body>
</html>
