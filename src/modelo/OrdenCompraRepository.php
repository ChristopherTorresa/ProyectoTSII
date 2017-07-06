<?php

    require_once "../bd/ConeccionBD.php";

    class OrdenCompraRepository
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
                                          FROM orden_compra 
                                          WHERE orden_compra_id = :id ');
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return $stmt->fetch();
        }

        public function findAll()
        {
            $stmt = $this->con->prepare(' SELECT * FROM orden_compra');
            $stmt->execute();

            return $stmt->fetchAll();
        }

/*
        public function save($fecha, $total, $nombreEmpleado, $institucionId)
        {
            $stmt = $this->con->prepare('
                    INSERT INTO orden_compra
                        (nombre, es_universidad, acepta_morosos, maximo_diario) 
                    VALUES 
                        (:nombre, :es_universidad , :acepta_morosos, :maximo_diario)
                ');
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':es_universidad', $es_universidad);
            $stmt->bindParam(':acepta_morosos', $acepta_morosos);
            $stmt->bindParam(':maximo_diario', $maximo_diario);
            return $stmt->execute();
        }

        public function update($id,$nombre, $es_universidad, $acepta_morosos, $maximo_diario)
        {
            $stmt = $this->con->prepare('
                    UPDATE institucion
                    SET nombre = :nombre,
                        es_universidad = :es_universidad,
                        acepta_morosos = :acepta_morosos,
                        maximo_diario = :maximo_diario
                    WHERE id = :id
                ');
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':es_universidad', $es_universidad);
            $stmt->bindParam(':acepta_morosos', $acepta_morosos);
            $stmt->bindParam(':maximo_diario', $maximo_diario);
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        }
*/

    }