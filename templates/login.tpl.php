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
        <h1 style="text-align: center">LOGIN</h1>
        <form method="POST" action="/login/login">
            <input type="text" name="usuari" placeholder="Nom d'usuari"><br>
            <input type="password" name="contrasenya" placeholder="Contrasenya"><br>
            <div class="linea">
                <input type="submit" name="submit" value="INICIAR SESIÓN">
                <input id="check" type="checkbox" name="recordar" value="1">
                <span>RECORDAR-ME?</span>
            </div>
        </form>
        <a href="register">No tienes cuenta? Registrate AQUÍ</a>
</div>
</body>
</html>