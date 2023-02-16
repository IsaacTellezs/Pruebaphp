<?php
$enlace = mysqli_connect('localhost','root','','prueba-ing');
$correo_electronico = $_POST['correo_electronico'];
$contrasena = $_POST['contrasena'];


if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL.";
    exit;
}

$comprobacion = "SELECT correo_electronico, contrasena FROM registro2 WHERE correo_electronico = '$correo_electronico'";

$resultado = $enlace->query($comprobacion);


if ($resultado->num_rows > 0) {
    // El usuario fue encontrado en la base de datos
    $dato = $resultado->fetch_assoc();
    $hashed_password = $dato['contrasena'];

    // Comparamos la contraseña ingresada con la contraseña almacenada en la base de datos
    if ($contrasena == $hashed_password) {
        // La contraseña es correcta, iniciamos sesión
        echo "Inicio de sesión exitoso";
    } else {
        // La contraseña es incorrecta, mostramos un mensaje de error
        echo "Contraseña incorrecta";
    }
} else {
    // El usuario no fue encontrado en la base de datos, mostramos un mensaje de error
    echo "El correo electrónico ingresado no está registrado";
}

$enlace->close();



 
?>


