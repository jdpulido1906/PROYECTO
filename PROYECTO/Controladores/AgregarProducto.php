<?php
require_once('../Modelos/Productos.php');
if($_POST){
    $ModeloProducto=new Productos();
    $idproducto=$_POST['idproducto'];
    $nombreproducto=$_POST['nombreproducto'];
    $precioproducto=$_POST['precioproducto'];
    $tallaproducto=$_POST['tallaproducto'];
    $disenoproducto=$_POST['disenoproducto'];
    $imagenproducto=addslashes(file_get_contents($_FILES['imagenproducto']['tmp_name']));
    $ModeloProducto->Agregar($idproducto,$nombreproducto,$precioproducto,$tallaproducto,$disenoproducto,$imagenproducto);
    }else{
    	header('Location:../Vistas/Producto.php');
    }
?>     