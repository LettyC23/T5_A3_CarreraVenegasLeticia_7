<?php

    class ConexionBD {
        private $conexion;

        private $host='localhost:3308';
        private $usuario='Lety';
        private $contraseña='lacc1';
        private $bd = 'DB_Escuela';

        public function __construct() {
            $this->conexion = mysqli_connect($this->host, $this->usuario, $this->contraseña, $this->bd);
            //var_dump($conexion);
        }

        public function getConexion() {
            return  $this->conexion;
        }
    }

?>