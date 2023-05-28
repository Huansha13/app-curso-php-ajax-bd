<?php
// Establecer la conexión a la base de datos
require_once('conexion.php');

// Realizar la consulta para obtener los cursos
$sql = "SELECT * FROM cursos ORDER BY id DESC";
$result = $conn->query($sql);

$cursos = array();

if ($result->num_rows > 0) {
    // Obtener los cursos y almacenarlos en el arreglo

    $cursos = $result->fetch_all(MYSQLI_ASSOC);    

    /*while ($row = $result->fetch_assoc()) {
        $curso = array(
            'id' => $row['id'],
            'nombre' => $row['nombre'],
            'duracion' => $row['duracion'],
            'temas' => explode(", ", $row['temas']),
            'modalidad' => $row['modalidad'],
            'certificado' => $row['certificado']
        );

        $cursos[] = $curso;
    }*/
}

// Cerrar la conexión a la base de datos
$conn->close();

// Retornar los cursos en formato JSON
echo json_encode($cursos);
?>
