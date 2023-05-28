<?php
// Establecer la conexión a la base de datos
require_once('conexion.php');

// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$duracion = $_POST['duracion'];
$temas = $_POST['temas'];
$modalidad = $_POST['modalidad'];
$certificado = isset($_POST['certificado']) ? $_POST['certificado'] : 0;

// Preparar la consulta SQL para insertar el curso
$sql = "INSERT INTO cursos (nombre, duracion, temas, modalidad, certificado)
        VALUES ('$nombre', '$duracion', '" . implode(", ", $temas) . "', '$modalidad', '$certificado')";

if ($conn->query($sql) === TRUE) {
    // El curso se ha agregado exitosamente
    $response = array('success' => true);
} else {
    // Ocurrió un error al agregar el curso
    $response = array('success' => false, 'error' => $conn->error);
}

// Cerrar la conexión a la base de datos
$conn->close();

// Retornar la respuesta en formato JSON
echo json_encode($response);
?>
