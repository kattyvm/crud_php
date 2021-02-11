<?php

include("db.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$numero = $_POST['numero'];

$query = "INSERT INTO test.Personas (nombre, apellido, correo, numero) VALUES('$nombre', '$apellido', '$correo', '$numero')";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    //$stmt->bind_result($field1, $field2);
    while ($stmt->fetch()) {
        //printf("%s, %s\n", $field1, $field2);
    }
    $stmt->close();
}

$_SESSION['message'] = 'Persona creada exitosamente';
$_SESSION['message_type'] = 'success';

header("Location: index.php");

?>