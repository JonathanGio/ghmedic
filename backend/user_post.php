<?php
$mysqli = new mysqli("localhost", "root", "", "ghmedic");
if ($mysqli->mysqliect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->mysqliect_errno . ") " . $mysqli->connect_error;
}
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$departamento = $_POST['departamento'];

$sql = "INSERT INTO empleado (nombre, edad, departamento) VALUES ('$nombre','$edad','$departamento');";

if ($mysqli->query($sql)) {
    echo json_encode("ok");
} else {
    echo json_encode("error");
}

$mysqli->close();


?>
