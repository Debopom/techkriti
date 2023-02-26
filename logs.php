<?php
include('includes\dbconnect.php');

$logs = $database->getReference('log')->getValue();

print_r($logs);

?>