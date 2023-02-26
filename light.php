<?php
include('includes\dbconnect.php');
$reference = $database->getReference('light');
$value = $reference->getValue();
$d=strtotime("10:30pm April 15 2014");
$l= date("Y-m-d h:i:sa");

 if (isset($_POST['submit'])){
    if($value==0){
        $database->getReference('light')->set(1);
        $log ="light on : ".$l ;
        $postRef = $database->getReference('log')->push($log);
    }
    else{
        $database->getReference('light')->set(0);
        $log ="light off : ".$l ;
        $postRef = $database->getReference('log')->push($log);
    }
     
 }

?>