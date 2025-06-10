<?php

class conexion {

    static public function conectar(){
        $link = new PDO("mysql:host=localhost;3307;dhname=nicetarde_db","","root");
        return $link;
    }
}