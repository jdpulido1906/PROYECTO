<?php
require_once('Conexion.php');
class Productos{
	private $pdo;
	public $idproducto;
    public $nombreproducto; 
    public $precioproducto; 
    public $tallaproducto; 
    public $disenoproducto;
    public $imagenproducto; 

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
    $stm=$this->pdo->prepare("Select * from productos");
    $stm->execute();
    while($result=$stm->fetch()){
    	$rows[]=$result;
    }
    return $rows;
}
public function Agregar($idproductoproducto,$nombreproducto,$precioproducto,$tallaproducto,$disenoproducto,$imagenproducto){
	$stm=$this->pdo->prepare("Insert into productos (idproducto,nombreproducto,precioproducto,tallaproducto,disenoproducto,imagenproducto) values(:idproducto,:nombreproducto,:precioproducto,:tallaproducto,:disenoproducto,:imagenproducto)");
	$stm->bindparam(':idproducto', $idproducto);
	$stm->bindparam(':nombreproducto', $nombreproducto);
	$stm->bindparam(':precioproducto', $precioproducto);
	$stm->bindparam(':tallaproducto', $tallaproducto);
	$stm->bindparam(':disenoproducto', $disenoproducto);
    $stm->bindparam(':imagenproducto', $imagenproducto);
	if($stm->execute()){
        echo"Se han insertado los datos";
        echo ' <a href="../Vistas/Producto.php">Volver</a>';
	}else{
        echo"no se han insertado los datos";
	}
   }

}
    ?>