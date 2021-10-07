<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/estilo.css">
    <title>Agregar Zapato</title>
</head>

<body class="insertar">
    <form  action="../Controller/ZapatosController.php" method="POST">
        <div>
            <label for="id">Id_Zapato</label>
            <input id="id" type="text"name="id" placeholder="Escriba Id_Zapato">
        </div>
        <div>
            <label for=" model">Modelo</label>
            <input id="model" type="text" name="modelo" placeholder="Escriba Modelo">
        </div>
        <div>
            <label for="color">Color</label>
            <input id="color" type="text" name="color" placeholder="Escriba Color">
        </div>
        <div>
            <label for="size">Talla (cm)</label>
            <input id="size" type="text" name="talla" placeholder="Escriba Talla">
        </div>
        <div>
            <label for="price">Precio (COL)</label>
            <input id="price" type="text" name="precio" placeholder="Escriba Precio">
        </div>
        <div>
            <label for="discount">Descuento</label>
            <input id="discount" type="text" name="descuento" placeholder="Escriba Descuento">
        </div>
        <div>
            <label for="description">Descripcion</label>
            <input id="description" type="text" name="descripcion" placeholder="Escriba Descripcion">
        </div>

        <input type="submit" value="Agregar Zapato" name="nuevoZapato">
        <input type="button" class="enlace" role="link" onclick="window.location='../index.php'" value="Volver al inicio">
    </form>
    
</body>

</html>