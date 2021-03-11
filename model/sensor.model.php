<?php
    require_once ("connection.php");
    date_default_timezone_set('America/Mexico_City');
    /*================================================
        MODELO DE LA PAGINA SENSOR
    ================================================*/
    class SensorModel{
        //Insertar en tabla de Registros
        static public function mdlInsert($data){
            $sql  = "INSERT INTO `register_temp` (`val_valueTemp`, `timeReg_valueTemp`) ";
            $sql .= "VALUES (:val, CURRENT_TIME)";

            $stmt = Conexion::connect()->prepare($sql);

            $stmt -> bindParam(":val", $data["value"]);

            if($stmt->execute())
                return true;
            else   
                return false;
        }
        
        //Leer tabla de Registros
        static public function mdlRead($item, $value){
            $sql  = "SELECT * FROM register_temp reg ";
            
            if($item == null){
                //Devolver todos los datos en la tabla
                $stmt = Conexion::connect() -> prepare($sql);
                $stmt -> execute();
                return $stmt -> fetchALl();
            }else{
                //Devolver fila especifica
                $sql .= "WHERE $item LIKE :item ";
                $stmt = Conexion::connect() -> prepare($sql);
                $stmt -> bindParam(":item", $value);
                $stmt -> execute();
                return $stmt -> fetch();
            }
        }

    }
