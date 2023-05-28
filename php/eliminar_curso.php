<?php
require_once('conexion.php');

if (isset($_POST['id'])) {
    $idCurso = $_POST['id'];

    // Realizar la eliminación del curso en la base de datos
    $sql = "DELETE FROM cursos WHERE id = $idCurso";
    $result = $conn->query($sql);

    if ($result) {
        echo "Curso eliminado correctamente";
    } else {
        echo "Error al eliminar el curso";
    }
}

$conn->close();
?>
 