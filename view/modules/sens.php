<?php
    require_once("controller/sensor.controller.php");
    // var_dump($_POST);
    if(isset($_POST["temp"])){
        $valueTemp = $_POST["temp"];
        $insert = SensorController::ctrInsert($valueTemp);
        echo $insert;
    }else{
        //Variable no existe
        echo "ERROR";
    }
?>