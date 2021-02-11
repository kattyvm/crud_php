<?php

include("db.php");

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "DELETE FROM test.Personas WHERE id = $id";

	if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->close();
	}
}

$_SESSION['message'] = 'Persona eliminada exitosamente';
$_SESSION['message_type'] = 'danger';

header("Location: index.php");
?>