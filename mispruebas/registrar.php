<?php
$enlace = mysqli_connect('localhost','root','','prueba-ing');

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL.";
    
    exit;
}


$correo_electronico = $_POST['correo_electronico'];
$nombre_completo = $_POST['nombre_completo'];
$contrasena = $_POST['contrasena'];

$sql = "INSERT INTO registro2 (correo_electronico, nombre_completo, contrasena)
        VALUES ('$correo_electronico', '$nombre_completo', '$contrasena')";
        
if ($enlace->query($sql) === TRUE) {
    echo "Registro agregado exitosamente";
} else {
    echo "Error al agregar registro: " . $enlace->error;
}


mysqli_close($enlace);



?>