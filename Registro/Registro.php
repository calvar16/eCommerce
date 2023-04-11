<?php
    include('../config/config.php');
    include('../config/Database.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Registro</title>
</head>
<body>
<?php include('../Productos/menuProducto.php'); ?>
	<form>
		<h2>Registro Usuarios</h2>
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required>

		<label for="apellido" style="margin-top: 3%;">Apellido:</label>
		<input type="text" id="apellido" name="apellido" required>

		<label for="correo" style="margin-top: 3%;">Correo electrónico:</label>
		<input type="email" id="correo" name="correo" required>

		<label for="contrasena" style="margin-top: 3%;">Contraseña:</label>
		<input type="password" id="contrasena" name="contrasena" required>

		<label for="confirmar-contrasena" style="margin-top: 3%;">Confirmar contraseña:</label>
		<input type="password" id="confirmar-contrasena" name="confirmar-contrasena" required>

		<label for="direccion" style="margin-top: 3%;">Dirección:</label>
		<input type="text" id="direccion" name="direccion" required>

		<label for="ciudad" style="margin-top: 3%;">Ciudad:</label>
		<input type="text" id="ciudad" name="ciudad" required>

		<label for="estado" style="margin-top: 3%;">Estado:</label>
		<select id="estado" name="estado" required>
			<option value="">Seleccione una opción</option>
			<option value="BO">Bogota</option>
			<option value="CL">Cali</option>
			<option value="MD">Medellin</option>
			<option value="CT">Cartagena</option>
		</select>

		<label for="codigo-postal" style="margin-top: 3%;">Código postal:</label>
		<input type="text" id="codigo-postal" name="codigo-postal" required>

		<button type="submit" class="btn btn-primary" style="margin-top: 5%;margin-bottom: 5%;">Registrarse</button>
	</form>
	<!-- Footer -->
<?php include('../Productos/footer.php'); ?>
</body>
</html>
