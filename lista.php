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
				<div class="col-md-6 col-md-offset-3">

					<h2>Registros</h2>

					<table class="table table-bordered">
						<thead>
							<tr class="warning">
								<th>Correo</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Sexo</th>
								<th>País</th>
								<th>Registrado</th>
							</tr>
						</thead>
						<tbody>
							<tr class="active">
								<td><strong>@mail</strong></td>
								<td>nombre</td>
								<td>apellido</td>
								<td>sexo</td>
								<td>pais</td>
								<td>2015/01/01</td>
							</tr>
							<tr class="active">
								<td><strong>@mail</strong></td>
								<td>nombre</td>
								<td>apellido</td>
								<td>sexo</td>
								<td>pais</td>
								<td>2015/01/01</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="6">
									<a href="index.php" class="btn btn-block btn-sm btn-primary">Vovler al Registro</a>
								</td>
							</tr>
						</tfoot>
					</table>

				</div> <!-- /col -->
			</div> <!-- /row -->

		</div> <!-- /container -->
	</body>
</html>
