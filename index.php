<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="PHP 101">
		<meta name="author" content="dsalas">

		<title>Registro</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="css/layout.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="container">

			<form class="form" action="registro.php" method="post">
				<h2 class="form-heading">Regístrese</h2>

				<label for="inputEmail" class="sr-only">Email</label>
				<input type="text" id="inputEmail" name="email" class="form-control" placeholder="example@email" autofocus>

				<label for="inputPassword" class="sr-only">Contraseña</label>
				<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">

				<fieldset>
					<legend>Datos personales</legend>
					<input type="text" id="inputName" name="nombre" class="form-control" placeholder="Nombre">
					<input type="text" id="inputLastName" name="apellido" class="form-control" placeholder="Apellido">

					<div class="radio">
						<label>
							<input type="radio" value="H" name="sexo"> Hombre
						</label>
						<label>
							<input type="radio" value="M" name="sexo"> Mujer
						</label>
					</div>

					<select name="pais" class="form-control">
						<option value="">Seleccionar pais</option>
						<option value="pe">Perú</option>
					</select>
				</fieldset>

				<div class="checkbox">
					<label>
						<input type="checkbox" name="terminos" value="1"> Acepto los <ins>términos</ins>
					</label>
				</div>

				<button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
			</form>

		</div> <!-- /container -->
	</body>
</html>
