<?php
include "conexion.php";

class Products
{
    private $conexion;

    public function __construct()
    {
        $db = new Conexion();
        $this->conexion = $db->conectar();
    }

    public function getProductsByCategory($categoryId)
    {
        $query = "SELECT * FROM products WHERE category_id = {$categoryId}";
        $stmt = $this->conexion->query($query);

        if ($stmt->num_rows > 0) {
            return $stmt;
        } else {
            return false;
        }
    }

    public function getProductById($productId)
    {
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('i', $productId);
        $stmt->execute();
        $result = $stmt->get_result();
        // Obtiene la primera fila de resultados
        $row = $result->fetch_assoc();


        if ($row) {
            return $row;
        } else {
            return false;
        }
    }
}
