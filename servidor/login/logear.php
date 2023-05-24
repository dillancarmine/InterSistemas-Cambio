<?php
session_start();
include "../../clases/auth.php";

$email = $_POST['email'];
$password = $_POST['password'];

$Auth = new Auth();

if ($Auth->logear($email, $password)) {
    header("location:/");
    exit();
} else {
    echo "No se pudo iniciar sesión.";
}
?>
