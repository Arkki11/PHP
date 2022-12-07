<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
	.kikka {
	text-shadow: 2px 2px 5px red;
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

   <div class="header">
     <h3> PHP 25 - 30 </h3>
   </div>

   <div class="row">

    <div class="col-3 col-s-3 menu">
      <ul>
       <a href="index.php"><li> Tehtävä 1 - 6 </li></a>
       <a href="sivu1.php"><li> Tehtävä 7 - 12 </li></a>
       <a href="sivu2.php"><li> Tehtävä 13 - 18 </li></a>
       <a href="sivu3.php"><li> Tehtävä 19 - 24 </li></a>
	   <a href="sivu4.php"><li> Tehtävä 25 - 30 </li></a>
       <a href="sivu5.php"><li> Tehtävä 31 - 36 </li></a>
	   <a href="sivu6.php"><li> Tehtävä 37 - 42 </li></a>
      </ul>
    </div>

    <div class="col-9 col-s-9">
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  <!-- TEHTÄVÄ 25 NÄKYVILLE -->
      <h3> Tehtävä 25 </h3>
      <p> (& LT ) pienempi kuin ja (& GT ) suurempi kuin. </p>

	  <!-- TEHTÄVÄ 25 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>
<b>CSS-ohjeet: </b>

.esimerkki{
 background-color: RGB(248, 244, 253);
 width: 50%;
 border: 1px solid RGB(41, 20, 82);
 padding: 20px;
 margin: 20px;
 box-shadow: 7px 7px 5px grey;
}
	
<b>HTML liittäminen:</b>

&LTdiv class="esimerkki"> 
&LT?php
echo "TEHTÄVÄ 25<br>";
$taulu = array(
    array("Nimi","Koe 1","Koe 2","Koe 3","Koe 4","Yht.","Arvosana"),
    array("Ykkönen Alli","30","40","50","60","0","0"),
    array("Kakkonen Berta","40","50","60","70","0","0"),
    array("Kolmonen Carita","50","60","70","80","0","0")
    );
			
for ($rivi = 0; $rivi <= count($taulu); $rivi++) {
    for ($sarake = 0; $sarake <= 6; $sarake++){
        echo " ". $taulu[$rivi][$sarake] ." ";
    }
    echo "<br>";
}
?>
&LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 25 ESIIN WWW SIVULLA-->
	<div class="esimerkki"> 
	<?php
	echo "TEHTÄVÄ 25<br>";
	$taulu = array(
		array("Nimi","Koe 1","Koe 2","Koe 3","Koe 4","Yht.","Arvosana"),
		array("Ykkönen Alli","30","40","50","60","0","0"),
		array("Kakkonen Berta","40","50","60","70","0","0"),
		array("Kolmonen Carita","50","60","70","80","0","0")
		);
			
	for ($rivi = 0; $rivi <= count($taulu); $rivi++) {
		for ($sarake = 0; $sarake <= 6; $sarake++){
			echo " ". $taulu[$rivi][$sarake] ." ";
		}
		echo "<br>";
	}
	?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 26 NÄKYVILLE -->
	  <h3> Tehtävä 26 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 26 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>
<b>CSS-ohjeet: </b>

.esimerkki{
 background-color: RGB(248, 244, 253);
 width: 50%;
 border: 1px solid RGB(41, 20, 82);
 padding: 20px;
 margin: 20px;
 box-shadow: 7px 7px 5px grey;
}
	
<b>HTML liittäminen:</b>

&LTdiv class="esimerkki"> 
&LT?php
echo "TEHTÄVÄ 26<br>";
$numero = 10;

while($numero >= 1){
    echo "$numero <br>";
    $numero--;
    }
?>
&LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 26 ESIIN WWW SIVULLA-->
	<div class="esimerkki"> 
    <?php
	echo "TEHTÄVÄ 26<br>";
	$numero = 10;

	while($numero >= 1){
		echo "$numero <br>";
		$numero--;
	}
    ?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 27 NÄKYVILLE -->
	  <h3> Tehtävä 27 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 27 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>
<b>CSS-ohjeet: </b>

.esimerkki{
 background-color: RGB(248, 244, 253);
 width: 50%;
 border: 1px solid RGB(41, 20, 82);
 padding: 20px;
 margin: 20px;
 box-shadow: 7px 7px 5px grey;
}
	
<b>HTML liittäminen:</b>
	  
&LTdiv class="esimerkki">
 &LT?php
  echo "TEHTÄVÄ 27<br>";
  $nimi = 'A';
  $nimet = array("A"=>"Anthony", "B"=>"Bertha", "C"=>"Cecilia",
               "D"=>"David", "E"=>"Edward", "F"=>"Felicia");

  do {
      echo $nimet[$nimi] . "<br>";
      $nimi++;
  } while ($nimi <= 'D');
 ?>
&LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 27 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 27<br>";
	$nimi = 'A';
    $nimet = array("A"=>"Anthony", "B"=>"Bertha", "C"=>"Cecilia",
				   "D"=>"David", "E"=>"Edward", "F"=>"Felicia");
  
	do {
		echo $nimet[$nimi] . "<br>";
		$nimi++;
    } while ($nimi <= 'D');
	?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 28 NÄKYVILLE -->
	  <h3> Tehtävä 28 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 28 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>
<b>CSS-ohjeet: </b>

.esimerkki{
 background-color: RGB(248, 244, 253);
 width: 50%;
 border: 1px solid RGB(41, 20, 82);
 padding: 20px;
 margin: 20px;
 box-shadow: 7px 7px 5px grey;
}
	
<b>HTML liittäminen:</b>

&LTdiv class="esimerkki"> 
&LT?php
echo "TEHTÄVÄ 28<br>";
for ($numero = 0; $numero <= 4; $numero++) {
    echo "Näytetään numero $numero. <br>";
    echo "Tämä näkyy<br>";
}	
    for ($numero = 8; $numero <= 10; $numero++) {
        echo "Näytetään numero $numero. <br>";
        echo "Tämä näkyy<br>";
        continue;
        echo "Tätä ei näytetä koskaan. <br>";
    }
?>
&LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 28 ESIIN WWW SIVULLA-->
	<div class="esimerkki"> 
	<?php
	echo "TEHTÄVÄ 28<br>";
    for ($numero = 0; $numero <= 4; $numero++) {
		echo "Näytetään numero $numero. <br>";
		echo "Tämä näkyy<br>";
	}	
		for ($numero = 8; $numero <= 10; $numero++) {
			echo "Näytetään numero $numero. <br>";
			echo "Tämä näkyy<br>";
			continue;
			echo "Tätä ei näytetä koskaan. <br>";
		}
	?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 29 NÄKYVILLE -->
	  <h3> Tehtävä 29 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 29 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>
<b>CSS-ohjeet: </b>

.esimerkki{
 background-color: RGB(248, 244, 253);
 width: 50%;
 border: 1px solid RGB(41, 20, 82);
 padding: 20px;
 margin: 20px;
 box-shadow: 7px 7px 5px grey;
}
	
<b>HTML liittäminen:</b>

&LTdiv class="esimerkki">
&LT?php
echo "TEHTÄVÄ 29<br>";
function FRkok() {
    $R1 = 100;
    $R2 = 100;
    $R3 = 100;
    $Rkok = 1/((1/$R1)+(1/$R2)+(1/$R3));
    echo "R1 = 100 Ω<br>";
    echo "R2 = 100 Ω<br>";
    echo "R3 = 100 Ω<br>";
    echo "Rkok Ω = 1/((1/R1) Ω + (1/R2) Ω + (1/R3) Ω)<br>";
    echo "1/((1/$R1) Ω + (1/$R2) Ω + (1/$R3) Ω) = $Rkok Ω<br>";
    echo "Rkok Ω = $Rkok Ω";
}
    FRkok(); 
    ?>
&LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 29 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 29<br>";
	function FRkok() {
		$R1 = 100;
		$R2 = 100;
		$R3 = 100;
		$Rkok = 1/((1/$R1)+(1/$R2)+(1/$R3));
		echo "R1 = 100 Ω<br>";
		echo "R2 = 100 Ω<br>";
		echo "R3 = 100 Ω<br>";
		echo "Rkok Ω = 1/((1/R1) Ω + (1/R2) Ω + (1/R3) Ω)<br>";
		echo "1/((1/$R1) Ω + (1/$R2) Ω + (1/$R3) Ω) = $Rkok Ω<br>";
		echo "Rkok Ω = $Rkok Ω";
	}
	FRkok(); 
	?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>	  

	  <!-- TEHTÄVÄ 30 NÄKYVILLE -->
	  <h3> Tehtävä 30 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 30 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>

<b>CSS-ohjeet: </b>

.esimerkki{
 background-color: RGB(248, 244, 253);
 width: 50%;
 border: 1px solid RGB(41, 20, 82);
 padding: 20px;
 margin: 20px;
 box-shadow: 7px 7px 5px grey;
}
	
<b>HTML liittäminen:</b>

&LTdiv class="esimerkki">
&LT?php
print "TEHTÄVÄ 30<br>";
function ympyral($sade) {		
    $pii = 3.1415926535897932384626433832795;
    print "Ympyrän kehä lasketaan kaavalla:<br>";
    print "Kehä = 2 * π * säde<br>";
    print "Jos säde on 10, kehä on ";
    print "" .  2 * $pii * $sade . "<br>";
    print "<br>Ympyrän pinta-ala lasketaan kaavalla:<br>";
    print "Ympyrän pinta-ala = π * (säde^2) <br>";
    print "Jos säde on 10, pinta-ala on ";
    print "" .  $pii * ($sade*$sade) . "<br>";
    echo "$sade ";
}
ympyral(10);
?>
&LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 30 ESIIN WWW SIVULLA-->
    <div class="esimerkki">
	<?php
	print "TEHTÄVÄ 30<br>";
    function ympyral($sade) 
    {		
		$pii = 3.1415926535897932384626433832795;
		print "Ympyrän kehä lasketaan kaavalla:<br>";
		print "Kehä = 2 * π * säde<br>";
		print "Jos säde on 10, kehä on ";
		print "" .  2 * $pii * $sade . "<br>";
		print "<br>Ympyrän pinta-ala lasketaan kaavalla:<br>";
		print "Ympyrän pinta-ala = π * (säde^2) <br>";
		print "Jos säde on 10, pinta-ala on ";
		print "" .  $pii * ($sade*$sade) . "<br>";
		echo "$sade ";
    }
    ympyral(10);
    ?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
    </div>
   </div> <!-- ÄLÄ HUKKAA TÄTÄ diviä -->
   <div class="footer">
     <p>Nevavesi Tuomo</p>
   </div>
 </body>
</html>