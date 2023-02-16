<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Registro</title>
</head>
<body>

	<h1>Registro de Usuario</h1>
	
	<form method="post" action="registrar.php">
		<label for="correo_electronico">Correo electrónico:</label>
		<input type="email" name="correo_electronico" id="correo_electronico" required>
		
		<label for="nombre_completo">Nombre completo:</label>
		<input type="text" name="nombre_completo" id="nombre_completo" required>
		
		<label for="contrasena">Contraseña:</label>
		<input type="password" name="contrasena" id="contrasena" required>
		
		<input type="submit" value="Registrarse">
	</form>

    <form method="post" action="Login.php">
		<label for="correo_electronico">Correo electrónico:</label>
		<input type="email" name="correo_electronico" id="correo_electronico" required>
		
		<label for="contrasena">Contraseña:</label>
		<input type="password" name="contrasena" id="contrasena" required>
		
		<input type="submit" value="Iniciar sesion">
	</form>





</body>
</html>
