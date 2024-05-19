<?php
// Datos de conexión a la base de datos
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_de_datos = 'uptebapp';

// Conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Sentencia para borrar la base de datos
$sentencia_sql = "DROP DATABASE $base_de_datos";

if ($conexion->query($sentencia_sql) === TRUE) {
    echo "<script>
			alert('Base de datos ' $base_de_datos ' borrada correctamente.');
			window.location = '../admin/database.php';
		</script>";
} else {
     echo  "<script>
			alert('Error al borrar la base de datos:' . $conexion->error);
			window.location = '../admin/database.php';
		</script>";
}

// Cerrar la conexión
$conexion->close();
?>
