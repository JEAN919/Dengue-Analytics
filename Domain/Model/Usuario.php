<?php
class Usuario {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function verificarCredenciales($correo, $pass) {
        $consulta = "SELECT IdUsuario FROM usuarios WHERE correo = :correo AND pass = :pass";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':pass', $pass);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function registrarUsuario($nombres, $correo, $pass) {
        $consulta = "INSERT INTO usuarios (nombres, correo, pass) VALUES (:nombres, :correo, :pass)";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->bindParam(':nombres', $nombres);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':pass', $pass);
        return $stmt->execute();
    }
}
