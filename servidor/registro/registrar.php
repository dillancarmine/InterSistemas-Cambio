<?php
include "../../clases/auth.php";

$name = $_POST['name'];
$usuario = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$address = $_POST['address'];

$Auth = new Auth();

// Validar si el usuario ya existe
if ($Auth->validarUsuarioExistente($usuario)) {
    echo "El usuario ya existe.";
} else {
    // Realizar el registro
    if ($Auth->registrar($name,$usuario, $password,$address)) {
        echo "Registro exitoso.";
    } else {
        echo "Error al registrar.";
        echo $usuario;
    }
}
