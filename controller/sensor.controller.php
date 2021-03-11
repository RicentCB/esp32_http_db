<?php
    require_once ("model/sensor.model.php");

    /*================================================
        MODELO DE LA PAGINA SENSOR
    ================================================*/
    class SensorController{

        //Insertar en tabla de Registro
        static public function ctrInsert($value){
            $value = (float) $value;
            $data = array("value"=>$value);
            $ans = SensorModel::mdlInsert($data);
            echo $ans;
        }
    }