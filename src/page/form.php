<?php
// Conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base_de_datos = "curso_sena";

$enlace = new mysqli($servidor, $usuario, $clave, $base_de_datos);

if ($enlace->connect_error) {
    die("Error de conexión: " . $enlace->connect_error);
}

$mensaje_exito = false; // Variable para mostrar el modal

// Verifica si el formulario fue enviado
if (isset($_POST['registro'])) {
    $stmt = $enlace->prepare("INSERT INTO datos_inscripcion (nombre, email, telefono, nacimiento, genero, tipo_documento, num_documento, expedicion_documento, curso_inscripcion, comentarios) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param(
        "ssssssssss",
        $_POST['nombre'],
        $_POST['email'],
        $_POST['telefono'],
        $_POST['nacimiento'],
        $_POST['genero'],
        $_POST['tipo_documento'],
        $_POST['num_documento'],
        $_POST['expedicion_documento'],
        $_POST['curso_inscripcion'],
        $_POST['comentarios']
    );

    if ($stmt->execute()) {
        $mensaje_exito = true; // Activar el modal
    }

    $stmt->close();
}

$enlace->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/form_style.css">
    <link rel="stylesheet" href="../style/fonts.css">
    <link rel="icon" type="img/png" href="src/img/sena.png">
    <title>ADSO</title>
</head>
<body>
<header>
    <div class="box_img">
        <img src="../logo/icono.jpg" alt="Sena Plus" class="img_header">
    </div>
    <div class="div_search">
        <label for="search">Buscar</label>
        <input type="text" id="search">
    </div>
    <nav>
        <a class="menu" href="#">Inicio</a>
        <a class="menu" href="#">Buscar Oferta</a>
        <a class="menu" href="#">Certificado</a>
        <a class="menu" href="#">Ayuda y Soporte</a>
    </nav>
</header>

<div class="form-container">
    <h2>Formulario de Inscripción</h2>

    <form id="form_adso" action="" method="POST">
        <div class="form-group">
            <label for="nombres">Nombre Completo:</label>
            <input type="text" id="nombres" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="telefono">Número de Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>
        </div>
        <div class="form-group">
            <label for="nacimiento">Fecha de Nacimiento (opcional):</label>
            <input type="date" id="nacimiento" name="nacimiento">
        </div>
        <div class="form-group">
            <label for="genero">Género:</label>
            <select id="genero" name="genero" required>
                <option value="">-Selecciona una opción-</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tipo_documento">Tipo de Documento:</label>
            <select id="tipo_documento" name="tipo_documento" required>
                <option value="">-Selecciona una opción-</option>
                <option value="cc">Cédula de Ciudadanía</option>
                <option value="ti">Tarjeta de Identidad</option>
                <option value="ce">Cédula de Extranjería</option>
            </select>
        </div>
        <div class="form-group">
            <label for="num_documento">Número de Documento:</label>
            <input type="text" id="num_documento" name="num_documento" required>
        </div>
        <div class="form-group">
            <label for="expedicion_documento">Fecha de Expedición del Documento:</label>
            <input type="date" id="expedicion_documento" name="expedicion_documento" required>
        </div>
        <div class="form-group">
            <label for="curso_inscripcion">Curso a Inscribirse:</label>
            <select id="curso_inscripcion" name="curso_inscripcion" required>
                <option value="">-Selecciona una opción-</option>
                <option value="ads">Análisis y Desarrollo de Software</option>
                <option value="cocina">Cocina</option>
                <option value="contaduria">Contaduría</option>
            </select>
        </div>
        <div class="form-group">
            <label for="comentarios">Comentarios adicionales:</label>
            <textarea id="comentarios" rows="5" cols="87" name="comentarios" placeholder="Deja aquí tu comentario..."></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="ins" name="registro">Inscribirse</button>
        </div>
        <div class="form-group">
            <button type="reset" class="clean">Limpiar</button>
        </div>
    </form>
</div>
<footer>
        <div class="footer_letf">
            <!-- Información de contacto -->
            <p>¿Necesitas más Información?<br>
            Ocaña: <b>5623698</b>
            Resto del país: <b>01 8000 10270</b></p>           
        </div>
        <div class="footer_rigth">
            <!-- Horario y derechos reservados -->
            <p>
                <b>Horario de Atención:</b> Lunes a Viernes 7:00 am a 6:00 pm<br>
            TODOS LOS DERECHOS RESERVADOS - KENNY LONDOÑO
            </p>
        </div>
    </footer>

<!-- Modal de Inscripción Exitosa -->
<div id="modalExito" class="modal">
    <div class="modal-content">
        <p>¡Inscripción Exitosa!</p>
        <button onclick="cerrarModal()">Cerrar</button>
    </div>
</div>

<script>
    function cerrarModal() {
        document.getElementById('modalExito').style.display = 'none';
    }
    
    <?php if ($mensaje_exito) : ?>
        document.getElementById('modalExito').style.display = 'block';
    <?php endif; ?>
</script>

</body>
</html>
