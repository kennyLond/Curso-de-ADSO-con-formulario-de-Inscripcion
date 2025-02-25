<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Codificación de caracteres para soportar caracteres especiales -->
    <meta charset="UTF-8">
    <!-- Ajuste para que el diseño sea responsive en dispositivos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace al archivo principal de estilos -->
    <link rel="stylesheet" href="src/style/style.css">
    <!-- Enlace al archivo de fuentes -->
    <link rel="stylesheet" href="src/style/fonts.css">
    <!-- Icono para la pestaña del navegador -->
    <link rel="icon" type="img/png" href="src/img/sena.png">
    <!-- Título de la página -->
    <title> ADSO</title>
</head>
<body>
    <header>
            <div class="box_img">
                <!-- Logo principal del encabezado -->
                <img src="src/logo/icono.jpg" alt="Sena Plus" class="img_header">
            </div>
            <div class="div_search">
                <!-- Campo de texto para búsquedas -->
                <!-- Etiqueta para el campo de búsqueda -->
                <label for="search">Buscar</label>        
                <input type="text" id="search">
            </div>
            <!-- Menú de navegación con enlaces -->
            <nav>
                <a class="menu" href="#">Inicio</a>
                <a class="menu" href="#">Buscar Oferta</a>
                <a class="menu" href="#">Certificado</a>
                <a class="menu" href="#">Ayuda y Soporte</a>
            </nav>
    </header>
        <div class="info">
            <div class="colum_1">
                <!-- Título y descripción del curso -->
                <h1>Análisis y Desarrollo de Software
                </h1> 
                <p> Si te apasiona la tecnología y quieres ser parte de la creación de soluciones innovadoras, este campo te ofrece oportunidades emocionantes. Aprenderás a diseñar, construir y optimizar sistemas que impactan a millones de personas. ¡Es el momento perfecto para empezar a construir tu futuro en el mundo de la programación y el desarrollo!</p>
                <div class="cards">
                    <!-- Información detallada sobre el curso -->
                    <h2>Descripción del curso</h2>
                    <h3>
                        <img src="src/icons/mapa.png" class="icons" alt="Ubicación">Ciudad<br>Ocaña
                    </h3>
                    <h3>
                        <img src="src/icons/casa.png" class="icons" alt="Sede de formación">
                        Sede de Formación<br>El Tamaco
                    </h3>
                    <h3>
                        <img src="src/icons/graduacion.png" class="icons" alt="Nivel de formación">Tipo de Curso<br>Tecnólogo
                    </h3>
                    <h3>
                        <img src="src/icons/hombre-feliz.png" class="icons" alt="Modalidad del curso">Modalidad<br>Presencial
                    </h3>
                    <h3>
                        <img src="src/icons/calendario.png" class="icons" alt="Duración del curso">Intensidad Horaria<br>3600 Horas
                    </h3> 
                    
                </div> 
                <div>
                    <!-- Enlace para descargar más información del curso -->
                <a href="src/pdf/analisis_desarrollo_software.pdf" download="temario_adso" class="temario"> 
                    Descargar aquí<br>Más información del Curso
                </a> 
                </div>
                
            </div>
            <div class="colum_2">
                <div>
                    <!-- Enlace para inscribirse -->
                    <a href="src/page/form.php" class="ins">
                        <b>Inscríbete</b>
                    </a>
                </div>
                <div class="curso">
                    <!-- Video del desde YouTube -->
                    <iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/8t3a_aEJM3Y?si=fS0ZrSWbg3RNR1pf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>  
                    <div>
                        <!-- Información sobre los instructores -->
                        <h4>Instructores del curso</h4>
                        <h5>
                            <img src="src/img/instructora.jpg" class="img_inst" alt="Foto de Ana Guerrero"> Ana Guerrero
                        </h5>     
                        <h5 >
                            <img src="src/img/ingeniero.jpg" class="img_inst" alt="Foto de Alberto Peréz">
                            Alberto Peréz
                        </h5> 
                        <h5>
                            <img src="src/img/lider.jpg" class="img_inst" alt="Foto de luisa Duque">
                            Luisa Duque
                        </h5>                           
                    </div> 
                </div>
            </div>
    </div>
    <div class="logo">
                    <!-- Sección de redes sociales -->
                    <p class="redes">Siguenos en nuestras redes:<br>
                        <img src="src/icons/facebook.png" alt="Facebook">
                        <img src="src/icons/gorjeo.png" alt="Twitter">
                        <img src="src/icons/instagram.png" alt="Instagram">
                        <img src="src/icons/youtube.png" alt="YouTube"> 
                    </p>
                </div>
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
</body>
</html>
