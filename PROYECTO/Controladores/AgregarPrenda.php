<?php
require_once('../Modelos/Prenda.php');

if ($_POST) {
    $modeloPrenda = new Prenda();
    $idPrenda = $_POST['idPrenda'];
    /*$idVenta = $_POST['idVenta'];*/
    $idReferencia = $_POST['idReferencia'];
    $talla = $_POST['talla'];
    $fecha = date('Y-m-d');
    $estado = $_POST['estado'];
    $color = $_POST['color'];
    $precio = $_POST['precio'];
    $modeloPrenda->Agregar($idPrenda, /*idVenta,*/ $idReferencia, $talla, $fecha, $estado, $color, $precio);
} else {
    header('Location: ../Vistas/Prenda.php');
}
?>
