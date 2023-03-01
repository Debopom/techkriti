<?php
include('includes\dbconnect.php');
$reference = $database->getReference('light');
$value = $reference->getValue();
echo $value;
?>