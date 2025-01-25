<?php
session_start();
include('../Model/Usuario.php');
include('../Model/conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = $_POST['nombres'];
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $usuarioModel = new Usuario($conexion); // Crear instancia de la clase Usuario

    if ($usuarioModel->registrarUsuario($nombres, $correo, $pass)) {
        header("Location: ../View/login/login.php");
    } else {
        $_SESSION['registro_error'] = "Error al registrar el usuario. Inténtalo de nuevo.";
        header("Location: ../View/registro/registro.php");
        exit;
    }
}
?>