<?php
    require_once("config.php");


    /**
     * ConeccionBD is a singleton implementation.
     * obtenerConeccion() returning an instance of PDO connection.
     *
     * <code>
     * Example usage:
     *
     * $conn =ConeccionBD::obtenerConeccion()
     *
     * $results = $conn->query("SELECT * FROM Table");
     *
     * </code>
     */
    class ConeccionBD
    {
        private static $instancia = NULL;

        public static function obtenerConeccion()
        {
            if (!isset(self::$instancia)) {

                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                //$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_SILENT;
                self::$instancia = new PDO(DB_DSN, DB_USER, DB_PASS, $pdo_options);

            }
            return self::$instancia;
        }

        private function __construct()
        {
        }

        private function __clone()
        {
        }

    }