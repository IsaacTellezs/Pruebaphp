<?php
$enlace = mysqli_connect('localhost','root','','prueba-ing');

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;


$resultado = mysqli_query($enlace, "SELECT * FROM registro");

$fila = mysqli_fetch_array($resultado);
echo "<br>" . "-ID: " . $fila[0] . "<br>" .  " -Nombre: " . $fila[1] .  "<br>". "-Email: " . $fila[2] . "<br>";

while($array=mysqli_fetch_array($resultado)){
    echo($array[0] . $array[1] . $array[2]);
    }

mysqli_close($enlace);



?>