<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
</head>
<body>
<header>
    <h1>RENTIT</h1>
    <ul>
        <a href="/"><li>Home</li></a>
        <a href="buy"><li>Comprar</li></a>
        <a href="contact"><li>Contacto</li></a>
        <a href="login"><li>Login</li></a>
    </ul>
</header>
<div class="container-main" style="display: flex; flex-direction: column; align-items: center;">
    <h1 style="text-align: center">REGISTER</h1>
    <form method="POST" action="/register/register">
        <input type="text" name="usuari" placeholder="Nom d'usuari"><br>
        <input type="password" name="contrasenya" placeholder="Contrasenya"><br>
        <input type="submit" name="submit" value="REGISTRAR">
    </form>
    <a href="register">No tienes cuenta? Registrate AQUÍ</a>
</div>
</body>
</html>