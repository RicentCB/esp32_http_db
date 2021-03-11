<?php
    require_once("controller/sensor.controller.php");
    $valueTemp = $_GET["temp"];
    $insert = SensorController::ctrInsert($valueTemp);
    echo $insert;
?>