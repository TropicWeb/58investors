<?php  
	/**
	 *  Script what calculate the difference between actual date and 22 of february
	 */

	$fechaActual = date('Y-m-d',time()); //Get fecha actual en formato AAAA-MM-DD
	$fechaActual = date_create($fechaActual); //Set fecha actual tipo DATE
	$fechaFin = date_create('2018-02-22'); //Set fecha fin tipo DATE
 	$dias; //Dias restantes
	
	$interval = date_diff($fechaActual, $fechaFin); //RESTAR DIAS
	
 	
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
