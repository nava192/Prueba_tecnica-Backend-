<?php

class Connection{

    static public function infoDatabase(){
        $infoBD = array(
            "database" => "prueba_tecnica",
            "user" => "root",
            "pass" => ""
        );
        return $infoBD;
    }
    /* =============================================
    Conexion a la base de datos
    =============================================*/

    static public function connect(){

        try{
            $link = new PDO(
                "mysql:host=localhost;dbname=".Connection::infoDatabase()["database"],
                Connection::infoDatabase()["user"],
                Connection::infoDatabase()["pass"]
            );
            $link->exec("set names utf8");
        }catch(PDOException $e){
            die("Error: ".$e->getMessage());
        }
        return $link;
    }
}