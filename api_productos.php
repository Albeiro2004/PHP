<?php
header('Content-Type: application/json');

include 'conexion/conexion.php'; // Asegúrate de que la ruta sea correcta

$sql = "SELECT * FROM productos";
$resultado = $conexion->query($sql);

$productos = [];

while ($producto = $resultado->fetch_assoc()) {
    $productos[] = $producto;
}

echo json_encode($productos);
?>
