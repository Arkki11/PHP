	<!DOCTYPE html>
	<html>
	<head>
    <meta charset="UTF-8">
	<style>
    body{
		background-color: #B2D9D9;
    }
    .viesti {
		margin: auto; 
		background-color: white;
		width: 40%;
		border: 1px solid green;
		padding: 50px;
    }
    .teksti{
		text-align: center;	
    }
    .paluu{
		background-color: #4CAF50; /* Green */
		border: none;
		color: white;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
		padding: 7px;  
    }
	.esimerkki{
		background-color: RGB(248, 244, 253);
		width: 50%;
		border: 1px solid RGB(41, 20, 82);
		padding: 20px;
		margin: 20px;
		box-shadow: 7px 7px 5px grey;
	}
    </style> 
	</head>
	<body>
    <div class="viesti teksti">
	<h3> GET-metodi </h3>
	
	<?php 
	$R1 = $_GET["R1"];
	echo "R1 = $R1<br>";
	$R2 = $_GET["R2"];
	echo "R2 = $R2<br>";
	$R3 = $_GET["R3"];
	echo "R3 = $R3<br>";
	$Rkok = 1/((1/$R1) + (1/$R2) + (1/$R3));
	echo "<br>Rkok = $Rkok = 1/((1/$R1) + (1/$R2) + (1/$R3))<br>";
	?>
	
	<a href="http://tietokanta.dy.fi/softa13/nevavesi.tuomo/PHP/sivu5.php#Tehtävä_36"><button class="paluu">Palaa tehtävään 36</button></a>
    </div>
	</body>
	</html>