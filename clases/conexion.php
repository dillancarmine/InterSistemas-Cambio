<?php
class Conexion {
    public $servidor = 'localhost';
    public $usuario = 'root';
    public $password = '';
    public $database = 'intersistemas';
    public $port = 3306;
    public $conexion;

    public function __construct() {
        $this->conexion = new mysqli(
            $this->servidor,
            $this->usuario,
            $this->password,
            $this->database,
            $this->port
        );

        if ($this->conexion->connect_error) {
            die("Conexión fallida: " . $this->conexion->connect_error);
        }
    }

    public function conectar() {
        return $this->conexion;
    }
}
