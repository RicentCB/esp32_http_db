<?php
    require_once ("conexion.php");
    /*================================================
        MODELO DE LA PAGINA SENSOR
    ================================================*/
    class ClientsModel{
        /*-----------------------------------------
            C R E A T E   -   C L I E N T
        -----------------------------------------*/
        static public function mdlCreateClient($table, $data){
            $sql = "INSERT INTO $table (`id_sucursal`, `nombre_Cliente`, `telefono_Cliente`, `RFC`, `email_Cliente`, `descuento`, `tieneCredito`, `direccion`, `colonia`, `codigoPostal`, `id_estadoMunicipio`) ";
            $sql .="VALUES (:idPlace, :name, :phone, :RFC, :mail, :util, :credit, :adress, :neig, :ZIP, :local)";

            $stmt = Conexion::connect()->prepare($sql);
            $stmt -> bindParam(":idPlace", $data["idPlace"]);
            $stmt -> bindParam(":name", $data["name"]);
            $stmt -> bindParam(":phone", $data["phone"]);
            $stmt -> bindParam(":RFC", $data["RFC"]);
            $stmt -> bindParam(":mail", $data["mail"]);
            $stmt -> bindParam(":util", $data["util"]);
            $stmt -> bindParam(":credit", $data["credit"]);
            $stmt -> bindParam(":adress", $data["adress"]);
            $stmt -> bindParam(":neig", $data["neig"]);
            $stmt -> bindParam(":ZIP", $data["ZIP"]);
            $stmt -> bindParam(":local", $data["local"]);

            if($stmt->execute())
                return true;
            else   
                return false;
        }
        /*-----------------------------------------
            R E A D  -   C L I E N T
        -----------------------------------------*/
        static public function mdlShowClients($item, $value, $table="clientes"){
            $sql  = "SELECT * FROM clientes clien ";
            $sql .= "INNER JOIN estados_municipios em ON em.id = clien.id_estadoMunicipio ";
            $sql .= "INNER JOIN municipios muni ON muni.id = em.municipios_id ";
            if($item == null){
                $sql .= "ORDER BY clien.nombre_Cliente ";
                $stmt = Conexion::connect() -> prepare($sql);
                $stmt -> execute();
                return $stmt -> fetchALl();
            }else{
                $sql .= "WHERE $item LIKE :item ";
                $stmt = Conexion::connect() -> prepare($sql);
                $stmt -> bindParam(":item", $value);
                $stmt -> execute();
                return $stmt -> fetch();
            }
        }
        /*-----------------------------------------
            U P D A T E   -   C L I E N T
        -----------------------------------------*/
        static public function mdlUpdateClient($table, $data){
            $sql  = "UPDATE $table SET nombre_Cliente = :name, telefono_Cliente = :phone, RFC = :RFC, ";
            $sql .= "email_Cliente = :mail, descuento = :util, tieneCredito = :credit, direccion = :adress, ";
            $sql .= " colonia = :neig, codigoPostal = :ZIP, id_estadoMunicipio = :local ";
            $sql .= "WHERE ID_cliente LIKE :IDClient ";

            $stmt = Conexion::connect()->prepare($sql);
            $stmt -> bindParam(":name", $data["name"]);
            $stmt -> bindParam(":phone", $data["phone"]);
            $stmt -> bindParam(":RFC", $data["RFC"]);
            $stmt -> bindParam(":mail", $data["mail"]);
            $stmt -> bindParam(":util", $data["util"]);
            $stmt -> bindParam(":credit", $data["credit"]);
            $stmt -> bindParam(":adress", $data["adress"]);
            $stmt -> bindParam(":neig", $data["neig"]);
            $stmt -> bindParam(":ZIP", $data["ZIP"]);
            $stmt -> bindParam(":local", $data["local"]);
            //ID
            $stmt -> bindParam(":IDClient", $data["IDClient"]);
            

            if($stmt->execute())
                return true;
            else   
                return false;

        }
    }
