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
    <h1 style="text-align: center">PUBLICAR INMUEBLE</h1>
    <form method="POST" class="contact" action="/create/create">
        <label for="nom">NOM: <input type="text" name="nom" placeholder="Nom"><br></label>
        <label for="imagen">IMAGEN: <input type="text" name="imagen" placeholder="Imatge"><br></label>
        <label for="precio">PRECIO: <input type="number" name="precio" placeholder="Precio"><br></label>
        <label for="descripcion">DESCRIPCION: <textarea name="descripcion" rows="10" cols="50" placeholder="Descripcion"></textarea></label>
        <input type="submit" name="submit" id="send" value="PUBLICAR">
    </form>

</div>
</body>
</html>