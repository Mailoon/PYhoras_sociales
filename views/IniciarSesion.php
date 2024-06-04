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
        <h2>Iniciar Sesión</h2>
        <p>Tiempo Productivo hace que cumplas tus horas sociales sin complicaciones.</p>
        <div class="container">
            <form id="registerForm" class="inciarsesion-Form" action="register.php" method="POST">
                <input type="email" name="email" placeholder="Correo Electrónico">
                <input type="password" name="password" placeholder="Contraseña">
                <label class="olv">
                    <span><input type="checkbox" name="terms" required> Recordarme</span>
                    <span>Olvidaste tu Contraseña ?</span>
                </label>
                <a href="home.php" class="submit">Registrarse</a>
                <p>Ya tienes una cuenta ? <a href="Registro.php">Registrarme</a></p>
            </form>
        </div>
    </main>
</body>

</html>