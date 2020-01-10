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
    <h1 style="text-align: center"><?php echo $title ?></h1>
    <form method="POST" class="contact" action="#">
        <label for="nom">NOM: <input type="text" name="nom" placeholder="Nom"><br></label>
        <label for="cognoms">COGNOMS: <input type="text" name="cognoms" placeholder="Cognoms"><br></label>
        <label for="data_naixement">DATA NAIXEMENT: <input type="date" name="data_naixement" placeholder="Data de naixement"><br></label>
        <label for="comentari">COMENTARI: <textarea name="comentari" rows="10" cols="50" placeholder="Comentari Adicional..."></textarea></label>
        <input type="submit" name="enviar" id="send" value="ENVIAR">
    </form>

</div>
</body>
</html>