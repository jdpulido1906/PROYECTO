<?php
require_once('../Modelos/Referencia.php');
if($_POST){
    $ModeloReferencia=new Referencia();
    $idReferencia=$_POST['idReferencia'];
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $referencia=$_POST['referencia'];
    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $ModeloReferencia->Agregar($idReferencia,$nombre,$descripcion,$referencia,$imagen);
    }else{
    	header('Location:../Vistas/Referencia.php');
    }
?>     
