<?php
require_once('Conexion.php');

class Prenda {
    private $pdo;
    public $idPrenda;
    /*public $idVenta;*/
    public $idReferencia;
    public $talla;
    public $fecha;
    public $estado;
    public $color;
    public $precio;

    public function __CONSTRUCT() {
        try {
            $this->pdo = Conexion::StartUp();
        } catch(Exception $e) {
            echo "HAY PROBLEMAS DE CONEXION";
            die($e->getMessage());
        }
    }

    public function Listar() {
        $rows = null;
        $stm = $this->pdo->prepare("Select * from Prenda");
        $stm->execute();
        while($result = $stm->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }

    public function Agregar($idPrenda, $idReferencia, $talla, $fecha, $estado, $color, $precio) {
        $stm = $this->pdo->prepare("Insert into Prenda (idPrenda, idReferencia ,talla, fecha, estado, color, precio) values (:idPrenda, :idReferencia, :talla, :fecha, :estado, :color, :precio)");
        $stm->bindparam(':idPrenda', $idPrenda);
        /*$stm->bindparam(':idVenta', $idVenta);*/
        $stm->bindparam(':idReferencia', $idReferencia);
        $stm->bindparam(':talla', $talla);
        $stm->bindparam( date('d-m-Y'));
        $stm->bindparam(':estado', $estado);
        $stm->bindparam(':color', $color);
        $stm->bindparam(':precio', $precio);
        if($stm->execute()) {
            echo "Se han insertado los datos";
            echo ' <a href="../Vistas/Prenda.php">Volver</a>';
        } else {
            echo "No se han insertado los datos";
        }
    }
}
?>


