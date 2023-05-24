<?php
include "conexion.php";

class Auth
{
    private $conexion;

    public function __construct()
    {
        $db = new Conexion();
        $this->conexion = $db->conectar();
    }

    public function registrar($name,$email,$password,$address)
    {
        $sql = "INSERT INTO users (name,email, password,address) VALUES (?,?,?,?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('ssss',$name,$email, $password,$address);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function validarUsuarioExistente($email)
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function logear($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $passwordExistente = $row['password'];

            if (password_verify($password, $passwordExistente)) {
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['client'] = $row['id'];
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
