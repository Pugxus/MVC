<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/estilo.css">
    <title>Inventario Zapatos</title>
</head>
<body>
    <table>
        <thead>
            <td>Id_Zapato</td>
            <td>Modelo</td>
            <td>Color</td>
            <td>Talla (cm)</td>
            <td>Precio (COL)</td>
            <td>Descuento (%)</td>
            <td>Descripcion</td>
        </thead>
        <tbody>
            <?php
            foreach ($inventarioZapatos as $zapato) {
                echo"<tr>";
                echo"<td> <a href='../View/VistaActualizarZapatos.php?zapato=" . $zapato['id_zapato'] . "'>" . $zapato['id_zapato']. "</a>";
                echo"<td>" . $zapato['modelo'] . "</td>";
                echo"<td>" . $zapato['color'] . "</td>";
                echo"<td>" . $zapato['talla_cm'] . "</td>";
                echo"<td>" . $zapato['precio_COL'] . "</td>";
                echo"<td>" . $zapato['descuento'] . "</td>";
                echo"<td>" . $zapato['descripcion'] . "</td>";
                echo"</tr>";
            }
            ?>
        </tbody>
    </table>
    <script src="" async defer></script>
    <input type="button" class="enlace" role="link" onclick="window.location='../index.php'" value="Volver al inicio">
</body>
</html>