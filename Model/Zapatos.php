<?php
require("..//Model//Conexion.php");
?>
<link rel="stylesheet" type="text/css" media="screen" href="../CSS/estilo.css">
<?php
class Zapatos
{
    public $con;

    function __construct()
    {
        $this->con = new Conexion();
    }

    public function getZapatos()
    {
        $query = $this->con->getCon()->query("SELECT * from zapatos");
        $zapatos = [];

        $cont = 0;
        while ($fila = $query->fetch_assoc()) {
            $zapatos[$cont] = $fila;
            $cont++;
        }
        return $zapatos;
    }

    public function newZapatos($id_zapato, $modelo, $color, $talla_cm, $precio_COL, $descuento, $descripcion)
    {
        $sql = "INSERT INTO zapatos(id_zapato, modelo, color, talla_cm, precio_COL, descuento, descripcion)
                VALUES ('$id_zapato', '$modelo', '$color', '$talla_cm', '$precio_COL', '$descuento', '$descripcion')";

        if ($this->con->getCon()->query($sql)) {
            /* Queria que se regresara al inicio automaticamente despues de
                agregar un nuevo elemento, pero entonces ya no mostraba el
                mensaje de que se habia agregado correctamente. 
           $resultMenuUrlName = "../index.php";
            header ("Location: $resultMenuUrlName"); */
            echo '<h3 class="ok">Zapato agregado correctamente.</h3>';
?>
            <input type="button" class="enlace" role="link" onclick="window.location='../index.php'" value="Volver al inicio">
        <?php
        } else {
            echo '<h3 class="bad">Error al agregar zapato.</h3><br>';

            echo " Consulta: " . $sql . "<br>";
        ?>
            <input type="button" class="enlace" role="link" onclick="window.location='../View/VistaAgregarZapato.php'" value="Volver">
        <?php
        }
    }

    public function deleteZapato($id_zapato)
    {
        $sql = "DELETE FROM zapatos WHERE id_zapato = '$id_zapato'";
        if ($this->con->getCon()->query($sql)) {
            echo '<h3 class="ok">Zapato quitado correctamente</h3>';
        ?>
            <input type="button" class="enlace" role="link" onclick="window.location='../index.php'" value="Volver al inicio">
        <?php
        } else {
            echo '<h3 class="bad">Error al quitar zapato.</h3><br>';
            echo " Consulta: " . $sql . "<br>";
        ?>
            <input type="button" class="enlace" role="link" onclick="window.location='../View/VistaQuitarZapato.php'" value="Volver">
        <?php
        }
    }

    public function updateZapato($id_zapato, $modelo, $color, $talla_cm, $precio_COL, $descuento, $descripcion)
    {
        $sql = "UPDATE zapatos SET modelo ='$modelo', color='$color', talla_cm='$talla_cm', precio_COL='$precio_COL', descuento='$descuento', descripcion='$descripcion' WHERE id_zapato = '$id_zapato'";
        if ($this->con->getCon()->query($sql)) {
            echo '<h3 class="ok">Zapato actualizado correctamente.</h3>';
        ?>
            <input type="button" class="enlace" role="link" onclick="window.location='../index.php'" value="Volver al inicio">
        <?php
        } else {
            echo '<h3 class="bad">Error al actualizar zapato.</h3><br>';
            echo " Consulta: " . $sql . "<br>";
        ?>
            <input type="button" class="enlace" role="link" onclick="window.location='../index.php'" value="Volver al inicio">
<?php
        }
    }
}
?>