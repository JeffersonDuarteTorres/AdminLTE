<?php
class LoginModel {

    static public function mdlVerifyUser($table, $email, $value) {
        
        $sql = "SELECT * FROM $table WHERE $email = :$value";

        $stmt = conexion::conectar()->prepare($sql);

        $stmt->bindParam(":$value", $value, PDO::PARAM_STR);

        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }
}