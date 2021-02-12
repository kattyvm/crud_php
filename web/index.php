<?php include("db.php") ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/073f28487c.js" crossorigin="anonymous"></script>
	<title>Lista</title>
</head>
<body class="container">

	<h2>Lista de Personas</h2>
	

	<a class="btn btn-primary mt-4 mb-4" href="create.php">Nueva Persona</a>
	<?php if(isset($_SESSION['message'])) { ?>
		<div class="alert alert-<?= $_SESSION['message_type']; ?>" role="alert">
		<?= $_SESSION['message'] ?>		
		</div>
	<?php session_unset(); } ?>

	<?php

		$query = "SELECT id, nombre, apellido, correo, numero FROM test.Personas";

		if ($stmt = $con->prepare($query)) {
    		$stmt->execute();
   			$stmt->bind_result($id, $nombre, $apellido, $correo, $numero);
    		echo "<table class='table table-sm'>
			        <tr>
			            <th></th>
			            <th>Nombre</th>
			            <th>Apellido</th>
			            <th>Correo</th>
			            <th>Teléfono</th>
			            <th></th>
                        <th></th>
			        </tr>";
			$orden=0;
    		while ($stmt->fetch()) {
        		//printf("%s, %s, %s, %s\n", $nombre, $apellido, $correo, $numero);
        		$orden++;        		
			        echo "<tr >
			            <td>$orden</td>
			            <td>$nombre</td>
			            <td>$apellido</td>
			            <td>$correo</td>
			            <td>$numero</td>
			            <td><a href='edit.php?id=$id' class='btn btn-primary'><i
                                class='fa fa-edit'></i></a></td>
                        <td><a href='delete.php?id=$id' class='btn btn-danger'><i
                                class='fa fa-trash-alt'></i></a></td>
			        </tr>";
			    
    		}
    		echo "</table>";
    
    	$stmt->close();
		}

	?>	
</body>
</html>