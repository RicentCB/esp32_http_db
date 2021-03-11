<?php
    /*================================================
        ARCHIVO CONEXION A LA DB
    ================================================*/
    class Conexion{
        static public function connect(){

            //Servidor db
            $serv = "localhost";        
            //Nombre DB
            $db = "esp32";              
            //Usuario en DB
            $user = "root";
            //Contraseña de la DB
            $pass = "";
    
            $link = new PDO("mysql:host=".$serv.";dbname=".$db."",
                        $user,
                        $pass);
    
            $link->exec("set names utf8");
    
            return $link;
    
        }
    
    }