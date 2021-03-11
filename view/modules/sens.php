<main>
    <h1>Sensor Temp</h1>
</main>
<?php
    require_once("controller/sensor.controller.php");
    echo '<pre>';
    var_dump($_GET);
    echo '</pre>';
    echo SensorController::ctrInsert("10000");
?>