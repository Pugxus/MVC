<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/estilo.css">
    <title>Actualizar Zapato</title>
</head>

<body>
    <form action="../Controller/ZapatosController.php" method="POST">
        <div>
            <label for="id_zapato">Id_Zapato</label>
            <input disabled id="id_zapato" value="<?php echo $_GET["zapato"];?>" type="text"
                placeholder="Escriba Id_Zapato">
            <input type="hidden" name="id" value="<?php echo $_GET["zapato"];?>">
        </div>
        <div>
            <label for=" model">Modelo</label>
            <input id="name" type="text" name="modelo" placeholder="Escriba Modelo">
        </div>
        <div>
            <label for="color">Color</label>
            <input id="password" type="text" name="color" placeholder="Escriba Color">
        </div>
        <div>
            <label for="size">Talla (cm)</label>
            <input id="password" type="text" name="talla" placeholder="Escriba Talla">
        </div>
        <div>
            <label for="price">Precio (COL)</label>
            <input id="password" type="text" name="precio" placeholder="Escriba Precio">
        </div>
        <div>
            <label for="discount">Descuento</label>
            <input id="password" type="text" name="descuento" placeholder="Escriba Descuento">
        </div>
        <div>
            <label for="description">Descripcion</label>
            <input id="password" type="text" name="descripcion" placeholder="Escriba Descripcion">
        </div>

        <input type="submit" value="Actualizar Zapato" name="actualizarZapatos">
        <input type="button" class="enlace" role="link" onclick="window.location='../index.php'" value="Volver al inicio">
    </form>
    
</body>
</html>