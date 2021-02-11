<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>Registro</title>
</head>
<body class="container p-4">
	<h2>Nueva Persona</h2>

<div class="row">
	<div class="col-md-6">
		<form action='save.php' method='POST'>
			<div class="form-group">
				<p>Nombre: <input type='text' class='form-control' name='nombre'/></p>
				<p>Apellido: <input type='text' class='form-control' name='apellido'/></p>
				<p>Correo: <input type='text' class='form-control' name='correo'/></p>
				<p>Teléfono: <input type='text' class='form-control' name='numero'/></p>

				<a href="index.php" class="btn btn-danger">Cancelar</a>
				<button type='submit' class="btn btn-primary">Guardar</button>
			</div>	
		</form>
	</div>
</div>
</body>
</html>