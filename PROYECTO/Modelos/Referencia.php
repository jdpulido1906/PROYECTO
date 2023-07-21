<?php
require_once('Conexion.php');
class Referencia{
	private $pdo;
	public $idReferencia;
    public $nombre; 
    public $descripcion; 
    public $referencia; 
    public $imagen; 

    public function __CONSTRUCT()
    {
    try
    {
    $this->pdo = Conexion::StartUp();
    }
    catch(Exception $e)
    { echo "HAY PROBLEMAS DE CONEXION";
    die($e->getMessage());
    }
    }
    public function Listar(){
    $rows=null;
    $stm=$this->pdo->prepare("Select * from Referencia");
    $stm->execute();
    while($result=$stm->fetch()){
    	$rows[]=$result;
    }
    return $rows;
}
public function Agregar($idReferencia,$nombre,$descripcion,$referencia,$imagen){
	$stm=$this->pdo->prepare("Insert into Referencia (idReferencia,nombre,descripcion,referencia,imagen) values(:idReferencia,:nombre,:descripcion,:referencia,:imagen)");
	$stm->bindparam(':idReferencia', $idReferencia);
	$stm->bindparam(':nombre', $nombre);
    $stm->bindparam(':descripcion', $descripcion);
    $stm->bindparam(':referencia', $referencia);
    $stm->bindparam(':imagen', $imagen);
	if($stm->execute()){
        echo"Se han insertado los datos";
        echo ' <a href="../Vistas/Referencia.php">Volver</a>';
	}else{
        echo"no se han insertado los datos";
	}
   }

}
    ?>