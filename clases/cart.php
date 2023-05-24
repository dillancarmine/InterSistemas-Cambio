<?php
include "conexion.php";

class Cart
{
    private $conexion;

    public function __construct()
    {
        $db = new Conexion();
        $this->conexion = $db->conectar();
    }

    public function getCartItems($userId)
    {
        $sql = "SELECT cart.id, products.name, products.price, cart.quantity FROM cart INNER JOIN products ON cart.product_id = products.id  WHERE cart.user_id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('i', $userId);
        $stmt->execute();

        return $stmt->get_result();
    }

    public function addItemToCart($userId, $item, $quantity)
    {
        $sql = "INSERT INTO cart (user_id,product_id,quantity) VALUES (?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('iii', $userId, $item, $quantity);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
