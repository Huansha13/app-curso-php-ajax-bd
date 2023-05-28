// Función para cargar el contenido de los archivos HTML en el contenedor
function loadContent(file, linkId) {
    $('#content').load(file);

    // Cambiar el estado activo/desactivo del enlace seleccionado
    $('.nav-link').removeClass('active');
    $('#' + linkId).addClass('active');
}

loadContent('view/registrar-curso.html', 'registrarLink');