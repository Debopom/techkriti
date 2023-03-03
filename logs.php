<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styleLog.css">

	<title></title>
</head>
<body>
	<h1> LOG BOOK OF SYSTEM</h1>
<table id="customers">
	 <th>LOG HISTORY </th>
		<?php
            include('includes\dbconnect.php');

            $logs = $database->getReference('log')->getValue();

            foreach(array_reverse($logs) as $item){
                
                echo " <tr> <td>   $item <br> <br> </td> </tr>"; 

            } 

?>

	

</table>

</body>
</html>