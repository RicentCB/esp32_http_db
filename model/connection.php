<?php
    class Conexion{

        static public function connect(){

            $serv = "localhost";
            $db = "esp32";
            $user = "root";
            $pass = "";
    
            $link = new PDO("mysql:host=".$serv.";dbname=".$db."",
                        $user,
                        $pass);
    
            $link->exec("set names utf8");
    
            return $link;
    
        }
    
    }