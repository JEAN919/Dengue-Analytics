<?php
session_start();
include('../Model/Usuario.php');
include('../Model/conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $usuarioModel = new Usuario($conexion); 
    $resultado = $usuarioModel->verificarCredenciales($correo, $pass); 

    if ($resultado) {
        header("Location: ../View/Principal/main.php");
    } else {
        $_SESSION['login_error'] = "Credenciales incorrectas. Inténtalo de nuevo.";
        header("Location: ../View/login/login.php");
        exit;
    }
}
