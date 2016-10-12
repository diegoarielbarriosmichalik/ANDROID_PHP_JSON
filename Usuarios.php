<?php

require 'Database.php';

class Usuarios {

    function __construct() {
        
    }

    public static function getById($idUsuario) {
        $consulta = "SELECT id_usuario, nombre, contrasenha FROM usuario WHERE id_usuario = ?";
        try {
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            $comando->execute(array($idUsuario));
            $row = $comando->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
            return -1;
        }
    }

    public static function getByNamePass($nombre, $pass) {
        $consulta = "SELECT * FROM usuario WHERE nombre = '$nombre' and contrasenha = '$pass' ";
        try {
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            $comando->execute(array($idUsuario));
            $row = $comando->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
            return -1;
        }
    }

}

?>