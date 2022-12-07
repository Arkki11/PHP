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
     <h3> PHP 31 - 36 </h3>
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
	  <!-- TEHTÄVÄ 31 NÄKYVILLE -->
      <h3> Tehtävä 31 </h3>
      <p> (& LT ) pienempi kuin ja (& GT ) suurempi kuin. </p>

	  <!-- TEHTÄVÄ 31 KOODAUS ESILLE -->	  
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

 .kikka {
 text-shadow: 2px 2px 5px red;
 }
	
<b> HTML liittäminen: </b>

&LTdiv class="esimerkki">
 &LT?php
    echo "TEHTÄVÄ 31<br>";
    function etuNimi($etunimi, $ika)
    {
        $vuosi = 2022;
        $svuosi = $vuosi - $ika;
        echo "$etunimi Rupunen on $ika vuotias. Hän syntyi vuonna $svuosi<br>";
    }
        etuNimi("Tuomas", "25");
        etuNimi("Henri", "27");
        etuNimi("Petteri", "30"); 
 ?>
&LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 31 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 31<br>";
    function etuNimi($etunimi, $ika)
    {
		$vuosi = 2022;
		$svuosi = $vuosi - $ika;
		echo "$etunimi Rupunen on $ika vuotias. Hän syntyi vuonna $svuosi<br>";
    }
		etuNimi("Tuomas", "25");
		etuNimi("Henri", "27");
		etuNimi("Petteri", "30"); 
	?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 32 NÄKYVILLE -->
	  <h3> Tehtävä 32 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 32 KOODAUS ESILLE -->	  
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

div class="esimerkki">
?php
echo "TEHTÄVÄ 32<br>";
$minimiKorkeus = 50;
$testiKorkeus = 350;
function testiKorkeus($minimiKorkeus, $testiKorkeus) 
{
    echo "minimiKorkeus on: $minimiKorkeus &LTbr>";
    echo "testiKorkeus on: $testiKorkeus &LTbr>";
}
testiKorkeus($minimiKorkeus, $testiKorkeus);
?>
&LT/div>

	  </pre></div>

<!-- TEHTÄVÄ 32 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 32<br>";
	$minimiKorkeus = 50;
	$testiKorkeus = 350;
	function testiKorkeus($minimiKorkeus, $testiKorkeus) 
	{
		echo "minimiKorkeus on: $minimiKorkeus <br>";
		echo "testiKorkeus on: $testiKorkeus <br>";
	}
	testiKorkeus($minimiKorkeus, $testiKorkeus);
    ?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 33 NÄKYVILLE -->
	  <h3> Tehtävä 33 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 33 KOODAUS ESILLE -->	  
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
echo "TEHTÄVÄ 33&LTbr>";
$luku1 = 2.35;
$luku2 = 5.55;
$luku3 = -101.2;
$luku4 = -219.7;
function pyoristys($luku1)
{
    echo "luku($luku1) on pyöristettynä: &LTbr>";
    echo floor($luku1);
    echo "&LTbr>";
}
pyoristys($luku1);
pyoristys($luku2);
pyoristys($luku3);
pyoristys($luku4);
?>
&LT/div>

	  </pre></div>

<!-- TEHTÄVÄ 33 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 33<br>";
	$luku1 = 2.35;
	$luku2 = 5.55;
	$luku3 = -101.2;
	$luku4 = -219.7;
	function pyoristys($luku1)
	{
		echo "luku($luku1) on pyöristettynä: ";
		echo floor($luku1);
		echo "<br>";
		
	}
	pyoristys($luku1);
	pyoristys($luku2);
	pyoristys($luku3);
	pyoristys($luku4);
    ?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 34 NÄKYVILLE -->
	  <h3> Tehtävä 34 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 34 KOODAUS ESILLE -->	  
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
echo "TEHTÄVÄ 34&LTbr>";
$R1 = 100;
$R2 = 100;
$R3 = 100;
function Rkok($R1, $R2, $R3)
{
    $Rkok = 1/((1/$R1)+(1/$R2)+(1/$R3));
    echo "R1 = 100 Ω&LTbr>";
    echo "R2 = 100 Ω&LTbr>";
    echo "R3 = 100 Ω&LTbr>";
    echo "Rkok Ω = 1/((1/R1) Ω + (1/R2) Ω + (1/R3) Ω)&LTbr>";
    echo "1/((1/$R1) Ω + (1/$R2) Ω + (1/$R3) Ω) = $Rkok Ω&LTbr>";
    echo "Rkok Ω = $Rkok Ω&LTbr>";
    return $Rkok;
}
echo "&LTbr>1/((1/$R1)+(1/$R2)+(1/$R3)) = " . Rkok($R1, $R2, $R3) . "&LTbr>";
?>
&LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 34 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 34<br>";
	$R1 = 100;
	$R2 = 100;
	$R3 = 100;
	function Rkok($R1, $R2, $R3)
	{
		$Rkok = 1/((1/$R1)+(1/$R2)+(1/$R3));
		echo "R1 = 100 Ω<br>";
		echo "R2 = 100 Ω<br>";
		echo "R3 = 100 Ω<br>";
		echo "Rkok Ω = 1/((1/R1) Ω + (1/R2) Ω + (1/R3) Ω)<br>";
		echo "1/((1/$R1) Ω + (1/$R2) Ω + (1/$R3) Ω) = $Rkok Ω<br>";
		echo "Rkok Ω = $Rkok Ω<br>";
		return $Rkok;
	}
	echo "<br>1/((1/$R1)+(1/$R2)+(1/$R3)) = " . Rkok($R1, $R2, $R3) . "<br>";
	?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 35 NÄKYVILLE -->
	  <h3> Tehtävä 35 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 35 KOODAUS ESILLE -->	  
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
echo "TEHTÄVÄ 35<br>";
/*$aikaNyt = date_default_timezone_get();
echo "$aikavyohyke<br>";*/
date_default_timezone_set('Europe/Helsinki');
$aikavyohyke = date_default_timezone_get();
echo "$aikavyohyke<br>";

//echo date("H:i:s, D,d,F,Y");//viikonpäivä ajan ja päivämäärän väliin	
$aika = date("H:i:s");
$paivaT = date("D");
$paivaK = date("d");
$kk = date("F");
$vuosi = date("Y");
	
switch($kk){
    case "January":
        $kk = "tammikuuta";
        break;
    case "February":
        $kk = "helmikuuta";
        break;
    case "March":
        $kk = "maaliskuuta";
        break;
    case "April":
        $kk = "huhtikuuta";
        break;
    case "May":
        $kk = "toukokuuta";
        break;
    case "June":
        $kk = "kesäkuuta";
        break;
    case "July":
        $kk = "heinäkuuta";
        break;
    case "August":
        $kk = "elokuuta";
        break;
    case "September":
        $kk = "syyskuuta";
        break;
    case "October":
        $kk = "lokakuuta";
        break;
    case "November":
        $kk = "marraskuuta";
        break;
    case "December":
        $kk = "joulukuuta";
        break;
}
switch($paivaT){
    case "Mon":
        $paivaT = "Maanantai";
        break;
    case "Tue":
        $paivaT = "Tiistai";
        break;
    case "Wen":
        $paivaT = "Keskiviikko";
        break;
    case "Thu":
        $paivaT = "Torstai";
        break;
    case "Fri":
        $paivaT = "Perjantai";
        break;
    case "Sat":
        $paivaT = "Lauantai";
        break;
    case "Sun":
        $paivaT = "Sunnuntai";
        break;
}	
if($aika >= 5 && $aika <= 9.00){
    echo "Hyvää huomenta!<br>";
}
if($aika >= 9.01 && $aika <= 14.00){
    echo "Hyvää päivää!<br>";
}
if($aika >= 14.01 && $aika <= 18.00){
    echo "Hyvää iltapäivää!<br>";
}
if($aika >= 18.01 && $aika <= 22.00){
    echo "Hyvää iltaa!<br>";
}
if($aika >= 22.01 && $aika < 5.00){
    echo "Hyvää yötä!<br>";
}
echo "Kello on : $aika. Tänään on $paivaT $paivaK. $kk $vuosi";
?>
&LT/div>

	  </pre></div>

<!-- TEHTÄVÄ 35 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 35<br>";
	/*$aikavyohyke = date_default_timezone_get();
	echo "$aikavyohyke<br>";*/
	date_default_timezone_set('Europe/Helsinki');
	$aikavyohyke = date_default_timezone_get();
	echo "$aikavyohyke<br>";

	//echo date("H:i:s, D,d,F,Y");//viikonpäivä ajan ja päivämäärän väliin	
	$aika = date("H:i:s");
	$paivaT = date("D");
	$paivaK = date("d");
	$kk = date("F");
	$vuosi = date("Y");
	
	switch($kk){
		case "January":
			$kk = "tammikuuta";
			break;
		case "February":
			$kk = "helmikuuta";
			break;
		case "March":
			$kk = "maaliskuuta";
			break;
		case "April":
			$kk = "huhtikuuta";
			break;
		case "May":
			$kk = "toukokuuta";
			break;
		case "June":
			$kk = "kesäkuuta";
			break;
		case "July":
			$kk = "heinäkuuta";
			break;
		case "August":
			$kk = "elokuuta";
			break;
		case "September":
			$kk = "syyskuuta";
			break;
		case "October":
			$kk = "lokakuuta";
			break;
		case "November":
			$kk = "marraskuuta";
			break;
		case "December":
			$kk = "joulukuuta";
			break;
	}
	switch($paivaT){
		case "Mon":
			$paivaT = "Maanantai";
			break;
		case "Tue":
			$paivaT = "Tiistai";
			break;
		case "Wen":
			$paivaT = "Keskiviikko";
			break;
		case "Thu":
			$paivaT = "Torstai";
			break;
		case "Fri":
			$paivaT = "Perjantai";
			break;
		case "Sat":
			$paivaT = "Lauantai";
			break;
		case "Sun":
			$paivaT = "Sunnuntai";
			break;
	}	
	if($aika >= 5 && $aika <= 9.00){
		echo "Hyvää huomenta!<br>";
	}
	if($aika >= 9.01 && $aika <= 14.00){
		echo "Hyvää päivää!<br>";
	}
	if($aika >= 14.01 && $aika <= 18.00){
		echo "Hyvää iltapäivää!<br>";
	}
	if($aika >= 18.01 && $aika <= 22.00){
		echo "Hyvää iltaa!<br>";
	}
	if($aika >= 22.01 && $aika < 5.00){
		echo "Hyvää yötä!<br>";
	}
	echo "Kello on : $aika. Tänään on $paivaT $paivaK. $kk $vuosi";
	?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>	  

	  <!-- TEHTÄVÄ 36 NÄKYVILLE -->
	  <h3 id="Tehtävä_36"> Tehtävä 36 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 36 KOODAUS ESILLE -->	  
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

<h3>tiedot1.php</h3>
&LTdiv class="esimerkki">
&LTform action="laske1.php" method="GET"> 
    R1: &LTinput type="text" name="R1">&LTbr>
    R2: &LTinput type="text" name="R2">&LTbr>
    R3: &LTinput type="text" name="R3">&LTbr>
    &LTinput type="submit" value="Lähetä">
&LT/form>
&LT/div>

<h3>laske1.php</h3>
&LTdiv class="viesti teksti">
&LTh3> GET-metodi &LT/h3>

&LT?php 
    $R1 = $_GET["R1"];
    echo "R1 = $R1<br>";
    $R2 = $_GET["R2"];
    echo "R2 = $R2<br>";
    $R3 = $_GET["R3"];
    echo "R3 = $R3<br>";
    $Rkok = 1/((1/$R1) + (1/$R2) + (1/$R3));
    echo "<br>Rkok = $Rkok = 1/((1/$R1) + (1/$R2) + (1/$R3))<br>";
?>
	
&LTa href="http://tietokanta.dy.fi/softa13/nevavesi.tuomo/PHP/sivu5.php#Tehtävä_36">&LTbutton class="paluu">Palaa tehtävään 36&LT/button>&LT/a>
&LT/div>
	
	  </pre></div>

<!-- TEHTÄVÄ 36 ESIIN WWW SIVULLA-->
    <div class="esimerkki">
    <form action="laske1.php" method="GET"> 
		R1: <input type="text" name="R1"><br>
		R2: <input type="text" name="R2"><br>
		R3: <input type="text" name="R3"><br>
		<input type="submit" value="Lähetä">
    </form>
    </div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
    </div>
   </div> <!-- ÄLÄ HUKKAA TÄTÄ diviä -->
   <div class="footer">
     <p>Nevavesi Tuomo</p>
   </div>
 </body>
</html>