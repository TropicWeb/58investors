<?php  
  /**
   *  Script what calculate the difference between actual date and 22 of february
   */

  //TEST
  //To test the counter equals $actualDate to a date in AAAA-MM-DD in the line 8 and uncomment it. Comment line 12
  //$actualDate = '2018-02-15';
  //
  date_default_timezone_set('America/Caracas');

  $actualDate = date('Y-m-d',time()); //Get actual date (string in AAAA-MM-DD)
  $actualDate = date_create($actualDate); //Set actual date (type DATE)
  $finalDate = date_create('2018-02-22'); //Set last day (type DATE)
  $days; //Days left
  
  $interval = date_diff($actualDate, $finalDate); //Difference between dates  
  
  $days = $interval->d;

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="Landing Page de la productora +58Films">
  <meta name="author" content="Miguel Fraga ,Diego Di Salvatore and Gabriel Taccone">

  <title>+58INVESTORS</title>

  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/EstilosC30days.css">
  <link rel="stylesheet" href="CSS/animate.css">
</head>

<body>

<!-- (Sección 1) Contenedor con el contador e imágen de fondo -->
<section class="container-fluid cuadroTotal">
	<div class="row sectionCont">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div id="p1" class="contador animated">
    			<p id="p2" class="text-center animated postext"><?php echo $days; ?></p>
    			<p class="text-center dayC"> DAYS </p>
    		</div>
  		</div>		
  		<div class="col-md-2"></div>
	</div> 
</section>

  <script src="JS/jquery.js"></script>
  <script src="JS/bootstrap.min.js"></script>
  <script src="JS/jquery.easing.min.js"></script>
  <script src="JS/efectEntry.js"></script>
</body>
</html>