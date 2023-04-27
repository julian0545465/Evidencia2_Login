<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesión</title>
	<script src="js/passwordful.js" type="text/javascript"></script>
	<link href="css/style_1.css" rel="stylesheet" type="text/css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<center> <body align="center">
		<center><h1>Iniciar sesión</h1>
		<br>

			<form method="post" action="">
				
				<input type="text" name="username" id="username" placeholder="Ingrese un usuario">

				<br>
				
				<br>
				
				<input type="password" name="password" id="password" placeholder="Ingrese una contraseña">
				<br>
				<br>
				<div class="button1" > 
                <input type="button" value="MostrarContraseña" onclick="mostrarContrasena()" class="btn btn-outline-dark">
                       </div>
				
				<div class="button" align="center"> 
				<input type="submit" value="Iniciar sesión">
				<div>
			</form></center>

			<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST["username"];
		$password = $_POST["password"];

		$username_pre = "julian";
		$password_pre = "241710";

		$errores = array();

		if (empty($username)) {
			$errores[] = "Por favor ingrese un nombre de usuario";
		}

		if (empty($password)) {
			$errores[] = "Por favor ingrese una contraseña";
		}

		if ($username != $username_pre || $password != $password_pre) {
			$errores[] = "Usuario y/o contraseña incorrectos";
		}

		if (count($errores) == 0) {
			header("Location: welcome.php");
	
		} else {
			echo "<ul>";
			foreach ($errores as $error) {
				echo "<li>$error</li>";
			}
			echo "</ul>";
		}
	}
	?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body> </center>
</html>