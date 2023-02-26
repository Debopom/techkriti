<?php

require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('includes\php-test-b3ac9-firebase-adminsdk-mvc4z-46a6ac2b07.json')
    ->withDatabaseUri('https://php-test-b3ac9-default-rtdb.firebaseio.com/');
$database = $factory->createDatabase();

?>