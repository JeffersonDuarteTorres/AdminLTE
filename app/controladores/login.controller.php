<?php

require_once "app/modelos/login.model.php";
class LoginController {

    static public function ctrVerifyUser() {
        if (isset($_POST["Email"])) {
            $table = "users";
            $email = "user_email";
            $value = $_POST["email"];

            $response = LoginModel::mdlVerifyUser($table, $email, $value);
            
        }
    }
}