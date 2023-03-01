<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

   
</head>
<body>
<?php
    include('includes\dbconnect.php');

    $referenceLight = $database->getReference('light');
    $valueLight = $referenceLight->getValue();

    $referenceFan = $database->getReference('Fan');
    $valueFan = $referenceFan->getValue();

    $referenceLock = $database->getReference('Lock');
    $valueLock= $referenceLock->getValue();

    $d=strtotime("10:30pm April 15 2014");
    $l= date("Y-m-d h:i:sa");

 if (isset($_POST['submit'])){
    if($valueLight==0){
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

 if (isset($_POST['fan'])){
    if($valueFan==0){
        $database->getReference('Fan')->set(1);
        $log ="light on : ".$l ;
        $postRef = $database->getReference('log')->push($log);
    }
    else{
        $database->getReference('Fan')->set(0);
        $log ="light off : ".$l ;
        $postRef = $database->getReference('log')->push($log);
    }
     
 }

 
 if (isset($_POST['lock'])){
    if($valueLock==0){
        $database->getReference('Lock')->set(1);
        $log ="light on : ".$l ;
        $postRef = $database->getReference('log')->push($log);
    }
    else{
        $database->getReference('Lock')->set(0);
        $log ="light off : ".$l ;
        $postRef = $database->getReference('log')->push($log);
    }
     
 }

?>

    <div id="mydiv">
    <form action="index.php" method="post">
    <h2>Smart Home Automation System</h2>
    <table id="mytable">
        <tr>
            <td>Light Control</td>
            
            <td><input type="submit" value="ON/OFF" name = "submit"  ></td>
            <td>
            <?php 
            $referenceLight = $database->getReference('light');
            $valueLight = $referenceLight->getValue();
            if($valueLight==0){
             echo "LIGHT OFF"; }
            else if ($valueLight==1)
            {echo "LIGHT ON"; }
             ?>
            </td>
        </tr>

        <tr>
            <td>Fan Control</td>
            <td><input type="submit" value="FAN " name = "fan"  ></td>
            <td>
            <?php 
            $referenceFan = $database->getReference('Fan');
            $valueFan = $referenceFan->getValue();
            if($valueFan==0){
             echo "FAN OFF"; }
            else if ($valueFan==1)
            {echo "FAN ON"; }
             ?>
            </td>
        </tr>

        <tr>
            <td>Disable auto door lock</td>
            <td><input type="submit" value="LOCK" name = "lock"  ></td>
            <td>
            <?php 
            $referenceLock = $database->getReference('Lock');
            $valueLock = $referenceLock->getValue();
            if($valueLock==0){
             echo "LOCK ENABLED"; }
            else if ($valueLock==1)
            {echo "LOCK DISABLED"; }
             ?>
            </td>
        </tr>

        <tr>
            <td>Fan Speed</td>
                <td>
                    <input type="radio" id="speed1" name="low" value="1">
                    <label for="speed1">LOW</label>
                    <input type="radio" id="speed2" name="medium" value="2">
                    <label for="speed2">MEDIUM</label>
                    <input type="radio" id="speed3" name="high" value="3">
                    <label for="speed3">HIGH</label>
                </td>
        </tr>

        <tr>
            <td align="center"><a href = "logs.php">logs</a></td>
        </tr>
    </table>
    </div>
    
    
    
    


        <script>
        document.getElementById("submit").onclick = function() {myFunction()};

        function myFunction() {
        document.getElementById("submit").innerHTML = "YOU CLICKED ME!";
        }
        </script>
    </form>

    

    
</body>
</html>