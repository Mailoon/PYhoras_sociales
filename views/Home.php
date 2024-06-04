<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Navbar.css">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="Footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="../src/Home.js" defer></script>
</head>

<body>
    <!--Navbar-->
    <?php require './Navbar.php'; ?>
    <!--Slider-->
    <section class="slider-container">
        <article>
            <div class="container-img"><img src="../src/Slider1.jpg" alt="Imagen 1"></div>
            <div class="container-img"><img src="../src/Slider2.jpg" alt="Imagen 2"></div>
            <div class="container-img"><img src="../src/Slider3.jpg" alt="Imagen 3"></div>
            <div class="container-img"><img src="../src/Slider4.png" alt="Imagen 4"></div>
        </article>
        <button class="carousel-control prev">&#10094;</button>
        <button class="carousel-control next">&#10095;</button>
    </section>

    <!--Main-->
    <main>
        <h1 id="Historia">Historia</h1>
        <div class="Objetivos">
            <div>
                <h2 id="Mision">Misión</h2>
                <p>En Tiempo Productivo, nos dedicamos a facilitar y optimizar la gestión de las horas sociales de los estudiantes del Colegio Antonio Derka. Proporcionamos una plataforma que organiza, informa y coordina las actividades sociales, asegurando que cada estudiante tenga acceso a sus horas sociales y así pueda saber qué actividad debe realizar cada día y cuántas horas le faltan para completar su requerimiento.</p>
            </div>
            <div>
                <h2 id="Vision">Visión</h2>
                <p>Ser la plataforma líder en la gestión de horas sociales para estudiantes, reconocida por nuestra eficiencia, transparencia y capacidad para conectar a los estudiantes del Colegio Antonio Derka con experiencias enriquecedoras y transformadoras. Aspiramos a empoderar a los jóvenes a través de la organización y participación en actividades sociales que contribuyan al bienestar de la comunidad y al desarrollo de una ciudadanía activa y responsable.</p>
            </div>
        </div>
        <h1 id="Servicios">Servicios</h1>
        <div class="servicios">
            <p>Brindar información sobre profesores y sedes disponibles</p>
            <p>Actividades a realizar, horarios y dias disponibles</p>
            <p>Conteo de horas y hacer más fácil el diligenciamiento del formato de alfabetización.</p>
        </div>
    </main>
    <!--Footer-->
    <?php require './Footer.php'; ?>
</body>

</html>