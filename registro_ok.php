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

			<div class="row">
				<div class="col-md-4 col-md-offset-4">

					<h2>Registro completado</h2>

					<div class="panel panel-success">
						<div class="panel-heading">El registro se guardó correctamente.</div>

						<div class="panel-body">
							<h4>Correo electrónico</h4>
							<p class="lead"><?=$varEmail;?></p>
						</div>

						<div class="panel-footer">
							<small>
								Si desea puede crear <a href="index.php">un nuevo registro</a>.<br>
								También puede revisar <a href="lista.php">todos los registros</a>.
							</small>
						</div>
					</div>

				</div> <!-- /col -->
			</div> <!-- /row -->

		</div> <!-- /container -->
	</body>
</html>
