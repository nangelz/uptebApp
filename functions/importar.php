<?php

function createOrCheckDatabase() {
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Verificar si la base de datos existe
        $sql = "SHOW DATABASES LIKE 'uptebapp'";
        $result = $conn->query($sql);

        if ($result->rowCount() == 0) {
            // La base de datos no existe, crearla
            $sqlCreateDB = "CREATE DATABASE uptebapp";
            $conn->exec($sqlCreateDB);
            
            echo "<script>
                        alert('Base de datos creada correctamente desde el archivo' $nombre_archivo);
                        window.location = '../admin/database.php';
                    </script>";
        }       
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
   }


// Llama a la función
createOrCheckDatabase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["archivo_sql"]) && $_FILES["archivo_sql"]["error"] == 0) {
        $archivo_temporal = $_FILES["archivo_sql"]["tmp_name"];
        $nombre_archivo = $_FILES["archivo_sql"]["name"];

        // Verifica si el archivo tiene extensión .sql
        if (pathinfo($nombre_archivo, PATHINFO_EXTENSION) == "sql") {
            // Conecta a la base de datos (reemplaza con tus propios datos de conexión)
            $host = "localhost";
            $usuario = "root";
            $contrasena = "";
            $base_de_datos = "uptebapp";

            $conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

            if ($conexion->connect_error) {
                die("Error de conexión: " . $conexion->connect_error);
            }

            // Lee el contenido del archivo SQL
            $contenido_sql = file_get_contents($archivo_temporal);

            // Ejecuta las sentencias SQL
            if ($conexion->multi_query($contenido_sql)) {
                   
            } else {
                echo "<script>
                        alert('Error al ejecutar las sentencias SQL: '. $conexion->error );
                        window.location = '../admin/database.php';
                    </script>";   
            }

            // Cierra la conexión
            $conexion->close();
        } else {
            echo "<script>
                        alert('El archivo debe tener extensión .sql');
                        window.location = '../admin/database.php';
                    </script>";
        }
    } else {
        echo "<script>
                        alert('Error al cargar el archivo');
                        window.location = '../admin/database.php';
                    </script>";
    }

} else {
echo "<script>
            alert('La base de datos 'uptebapp' ya existe.');
            window.location = '../admin/database.php';
        </script>";
}


?>
