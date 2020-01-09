<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
</head>
<body>
    <header>
        <h1>Welcome</h1>
        <ul>
            <a href=""><li>Home</li></a>
            <a href=""><li>Comprar</li></a>
            <a href=""><li>Vender</li></a>
            <a href=""><li>Contacto</li></a>
        </ul>
    </header>
    <div class="container-main">
            <?php foreach ($results as $result)
            {?>
                <div class="card">
                    <h1>Inmueble ID <?php echo $result['id']?></h1>
                    <img src="public/img/<?php echo $result['imagen'] ?>" style="width: 300px; height: 250px;">
                    <h3><?php echo $result['nombre']?></h3>
                    <h3>PRECIO: <?php echo $result['precio']?> €</h3>
                    <p>DESCRIPCIÓN: <?php echo $result['descripcion']?></p>
                    <button>COMPRAR</button>
                </div>
            <?php }?>
    </div>
</body>
</html>