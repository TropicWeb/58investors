<?php  
	/**
	 *  Script what calculate the difference between actual date and 22 of february
	 */

	$fechaActual = date('Y-m-d',time()); //Get actual date (string in AAAA-MM-DD)
	$fechaActual = date_create($fechaActual); //Set actual date (type DATE)
	$fechaFin = date_create('2018-02-22'); //Set last day (type DATE)
 	$dias; //Days left
	
	$interval = date_diff($fechaActual, $fechaFin); //Difference between dates	
 	
 	$dias = $interval->d;

?>
<!DOCTYPE html>
<html>
<head>
	<title>58investors</title>
</head>
<body>
	<p>
		<?php 
			echo "$dias dias <br>";
		?>
	</p>
</body>
</html>
