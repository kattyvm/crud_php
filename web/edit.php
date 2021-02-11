<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>Edición</title>
</head>
<body class="container">
	<h2>Editar Persona</h2>

<div class="row">
	<div class="col-md-6">

		<?php
			if(isset($_GET['id'])) {
				$id = $_GET['id'];
				$query = "SELECT id, nombre, apellido, correo, numero FROM test.Personas WHERE id = $id";

				if ($stmt = $con->prepare($query)) {
				    $stmt->execute();
	   				$stmt->bind_result($id, $nombre, $apellido, $correo, $numero);
		?>

		<form action="edit.php?id=<?php echo $_GET['id']; ?>" method='POST'>
			<div class="form-group">
				<?php					
					    while ($stmt->fetch()) {
						echo "<p>Nombre: <input type='text' class='form-control' name='nombre' value='$nombre'/></p>
						<p>Apellido: <input type='text' class='form-control' name='apellido' value='$apellido'/></p>
						<p>Correo: <input type='text' class='form-control' name='correo' value='$correo'/></p>
						<p>Teléfono: <input type='text' class='form-control' name='numero' value='$numero'/></p>";
						}
						$stmt->close();
						}
					}
				?>
				<a href="index.php" class="btn btn-danger">Cancelar</a>
				<button type='submit' class="btn btn-primary" name="update">Actualizar</button>
				
			</div>	
		</form>

		<?php
			if(isset($_POST['update'])) {
				$id = $_GET['id'];
				$nombre = $_POST['nombre'];
				$apellido = $_POST['apellido'];
				$correo = $_POST['correo'];
				$numero = $_POST['numero'];
				$query = "UPDATE test.Personas SET nombre = '$nombre', apellido = '$apellido', correo = '$correo', numero = '$numero' WHERE id = $id";

				if ($stmt = $con->prepare($query)) {
				    $stmt->execute();
	   				$stmt->close();

	   				$_SESSION['message'] = 'Persona actualizada exitosamente';
					$_SESSION['message_type'] = 'success';
	   				header("Location: index.php");
				}
			}
		?>

	</div>
</div>
</body>
</html>