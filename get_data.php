<?php
include('includes\dbconnect.php');
$temp_reference = $database->getReference('temperature');
$hum_reference = $database->getReference('humidity');
$temp= $temp_reference->getValue();
$humidity = $hum_reference->getValue();
echo "Temperature : ".$temp."°C\n";
echo "Humidity : ".$humidity."% ";
?>