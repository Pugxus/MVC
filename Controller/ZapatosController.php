<?php
require("../Model/Zapatos.php");

$zapato = new Zapatos();

if (isset($_POST['nuevoZapato'])) {
    $zapato -> newZapatos($_POST['id'],$_POST['modelo'],$_POST['color'],$_POST['talla'],$_POST['precio'],$_POST['descuento'],$_POST['descripcion']);
} else {
    if (isset($_POST['quitarZapato'])) {
        $zapato -> deleteZapato($_POST['id']);
    } else {
        if (isset($_POST['actualizarZapatos'])) {
            $zapato -> updateZapato($_POST['id'],$_POST['modelo'],$_POST['color'],$_POST['talla'],$_POST['precio'],$_POST['descuento'],$_POST['descripcion']);
        } else {
            $inventarioZapatos = $zapato ->getZapatos();
            require("../View/VistaInventarioZapatos.php");
        }
        
    }
    
}

?>