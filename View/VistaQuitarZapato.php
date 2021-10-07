<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/estilo.css">
    <title>Quitar Zapato</title>
</head>

<body>
    <form action="../Controller/ZapatosController.php" method="POST">
    <div>
            <label for="id_zapato">Id_Zapato</label>
            <input id="user" type="text" name="id" placeholder="Escriba Id Zapato">
        </div>

        <input type="submit" value="Quitar Zapato" name="quitarZapato">
        <input type="button" class="enlace" role="link" onclick="window.location='../index.php'" value="Volver al inicio">

    </form>
</body>