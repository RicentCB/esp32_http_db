<?php
    require_once ("model/sensor.model.php");

    /*================================================
        CONTROLADOR DE LA PAGINA SENSOR
    ================================================*/
    class SensorController{

        //Insertar en tabla de Registro
        static public function ctrInsert(String $value){
            $value = (float) $value;
            $data = array("value"=>$value);
            $ans = SensorModel::mdlInsert($data);
            return $ans;
        }

        //Leer tabla de registros
        static public function ctrRead(String $item=NULL, String $value=NULL){
            $regs = SensorModel::mdlRead($item, $value);
            return $regs;
        }
    }