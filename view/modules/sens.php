<?php
    require_once("controller/sensor.controller.php");
    if(isset($_GET["temp"])){
        $valueTemp = $_GET["temp"];
        $insert = SensorController::ctrInsert($valueTemp);
        echo $insert;
    }else{
        //Variable no existe
        echo "ERROR";
    }
?>