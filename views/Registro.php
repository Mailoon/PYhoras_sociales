<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="Registro_Inicio.css">
</head>

<body>
    <main>
        <h2>Crear Cuenta</h2>
        <p>Tiempo Productivo hace que cumplas tus horas sociales sin complicaciones.</p>
        <div class="container">
            <form id="registerForm" action="register.php" method="POST">
                <input type="text" name="fullname" placeholder="Nombre y Apellido">
                <input type="email" name="email" placeholder="Correo Electrónico">
                <input type="password" name="password" placeholder="Crear Contraseña">
                <label>
                    <input type="checkbox" name="terms" required><span> Estoy de acuerdo con los <a href="#">Términos y Condiciones</a> de Tiempo Productivo</span>
                </label>
                <a href="home.php"  class="submit">Registrarse</a>
                <p>Ya tienes una cuenta ? <a href="IniciarSesion.php">Iniciar Sesión</a></p>
            </form>
        </div>
    </main>
</body>

</html>