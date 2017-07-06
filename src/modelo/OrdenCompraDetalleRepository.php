<?php

    require_once "../bd/ConeccionBD.php";

    class OrdenCompraDetalleRepository
    {
        private $con = null;
        public function __construct()
        {
            $this->con = ConeccionBD::obtenerConeccion();

        }
        public function findById($id)
        {
            $stmt = $this->con->prepare('
                                          SELECT * 
                                          FROM orden_compra_detalle 
                                          WHERE orden_compra_detalle_id = :id ');
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return $stmt->fetch();
        }

        public function findAll()
        {
            $stmt = $this->con->prepare(' SELECT * FROM orden_compra_detalle');
            $stmt->execute();

            return $stmt->fetchAll();
        }
        

    }