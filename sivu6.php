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
     <h3> PHP 37 - 42 </h3>
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
	  <!-- TEHTÄVÄ 37 NÄKYVILLE -->
      <h3> Tehtävä 37 </h3>
      <p> (& LT ) pienempi kuin ja (& GT ) suurempi kuin. </p>

	  <!-- TEHTÄVÄ 37 KOODAUS ESILLE -->	  
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
echo "TEHTÄVÄ 37";
//maaritellaan muuttujat tyhjiksi
$R1 = $R2 = $R3 = $Rkok = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $R1 = test_input($_POST["R1"]);
    $R2 = test_input($_POST["R2"]);
    $R3 = test_input($_POST["R3"]);
    $Rkok = 1/((1/$R1)+(1/$R2)+(1/$R3));
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h3>Rkok</h3>
&LTform method="post" action="&LT?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    R1: &LTinput type="text" name="R1">
    <br><br>
    R2: &LTinput type="text" name="R2">
    <br><br>
    R3: &LTinput type="text" name="R3">
    <br><br>
    &LTinput type="submit" name="submit" value="Lähetä">  
&LT/form>

&LT?php
echo "<h3>Annoit seuraavat arvot:</h3>";
echo "R1 = $R1";
echo "<br>";
echo "R2 = $R2";
echo "<br>";
echo "R3 = $R3";
echo "<br>";
echo "Rkok = $Rkok";
echo "<br>";
?>
&LT/div>

	  </pre></div>

<!-- TEHTÄVÄ 37 ESIIN WWW SIVULLA-->
<div class="esimerkki">
<?php
echo "TEHTÄVÄ 37";
//maaritellaan muuttujat tyhjiksi
$R1 = $R2 = $R3 = $Rkok = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$R1 = test_input($_POST["R1"]);
	$R2 = test_input($_POST["R2"]);
	$R3 = test_input($_POST["R3"]);
	$Rkok = 1/((1/$R1)+(1/$R2)+(1/$R3));
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<h3>Rkok</h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	R1: <input type="text" name="R1">
	<br><br>
	R2: <input type="text" name="R2">
	<br><br>
	R3: <input type="text" name="R3">
	<br><br>
	<input type="submit" name="submit" value="Lähetä">  
</form>

<?php
echo "<h3>Annoit seuraavat arvot:</h3>";
echo "R1 = $R1";
echo "<br>";
echo "R2 = $R2";
echo "<br>";
echo "R3 = $R3";
echo "<br>";
echo "Rkok = $Rkok";
echo "<br>";
?>
</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 38 NÄKYVILLE -->
	  <h3> Tehtävä 38 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 38 KOODAUS ESILLE -->	  
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
echo "TEHTÄVÄ 38";
//maaritellaan muuttujat tyhjiksi
$R1A = $R2A = $R3A = $RkokA = $SkokA = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $R1A = testInput($_POST["R1A"]);
    $R2A = testInput($_POST["R2A"]);
    $R3A = testInput($_POST["R3A"]);
    $valinta = testInput($_POST["RkokA"]);
    $RkokA = 1/((1/$R1A)+(1/$R2A)+(1/$R3A));
    $SkokA = $R1A + $R2A + $R3A;
}
function RkokA ($valinta) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $R1A = testInput($_POST["R1A"]);
        $R2A = testInput($_POST["R2A"]);
        $R3A = testInput($_POST["R3A"]);
        $valinta = testInput($_POST["RkokA"]);
        $RkokA = 1/((1/$R1A)+(1/$R2A)+(1/$R3A));
    }
    if ($valinta == "RkokA") {
        echo "RkokA = $RkokA";
    }
}
function SkokA ($valinta) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $R1A = testInput($_POST["R1A"]);
        $R2A = testInput($_POST["R2A"]);
        $R3A = testInput($_POST["R3A"]);
        $valinta = testInput($_POST["RkokA"]);
        $SkokA = $R1A + $R2A + $R3A;
    }
    if ($valinta == "SkokA") {
        echo "SkokA = $SkokA";
    }
}
function testInput($data2) {
    $data2 = trim($data2);
    $data2 = stripslashes($data2);
    $data2 = htmlspecialchars($data2);
    return $data2;
}
?>

<h3>Rkok</h3>
&LTform method="post" action="&LT?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    R1A: &LTinput type="text" name="R1A"><br><br>
    R2A: &LTinput type="text" name="R2A"><br><br>
    R3A: &LTinput type="text" name="R3A"><br><br>
    RkokA vai SkokA: &LTinput type="text" name="RkokA"><br><br>
    &LTinput type="submit" name="submit" value="Lähetä">  
&LT/form>

&LT?php
echo "<h3>Annoit seuraavat arvot:</h3>";
echo "R1A = $R1A";
echo "<br>";
echo "R2A = $R2A";
echo "<br>";
echo "R3A = $R3A";
echo "<br>";
RkokA ($valinta);
SkokA ($valinta);
?>
&LT/div>

	  </pre></div>

<!-- TEHTÄVÄ 38 ESIIN WWW SIVULLA-->
<div class="esimerkki">
<?php
echo "TEHTÄVÄ 38";
//maaritellaan muuttujat tyhjiksi
$R1A = $R2A = $R3A = $RkokA = $SkokA = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$R1A = testInput($_POST["R1A"]);
	$R2A = testInput($_POST["R2A"]);
	$R3A = testInput($_POST["R3A"]);
	$valinta = testInput($_POST["RkokA"]);
	$RkokA = 1/((1/$R1A)+(1/$R2A)+(1/$R3A));
	$SkokA = $R1A + $R2A + $R3A;
}
function RkokA ($valinta) {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$R1A = testInput($_POST["R1A"]);
		$R2A = testInput($_POST["R2A"]);
		$R3A = testInput($_POST["R3A"]);
		$valinta = testInput($_POST["RkokA"]);
		$RkokA = 1/((1/$R1A)+(1/$R2A)+(1/$R3A));
		}
	if ($valinta == "RkokA") {
		echo "RkokA = $RkokA";
	}
}
function SkokA ($valinta) {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$R1A = testInput($_POST["R1A"]);
		$R2A = testInput($_POST["R2A"]);
		$R3A = testInput($_POST["R3A"]);
		$valinta = testInput($_POST["RkokA"]);
		$SkokA = $R1A + $R2A + $R3A;
	}
	if ($valinta == "SkokA") {
		echo "SkokA = $SkokA";
	}
}
function testInput($data2) {
	$data2 = trim($data2);
	$data2 = stripslashes($data2);
	$data2 = htmlspecialchars($data2);
	return $data2;
}
?>

<h3>Rkok</h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	R1A: <input type="text" name="R1A"><br><br>
	R2A: <input type="text" name="R2A"><br><br>
	R3A: <input type="text" name="R3A"><br><br>
	RkokA vai SkokA: <input type="text" name="RkokA"><br><br>
	<input type="submit" name="submit" value="Lähetä">  
</form>

<?php
echo "<h3>Annoit seuraavat arvot:</h3>";
echo "R1A = $R1A";
echo "<br>";
echo "R2A = $R2A";
echo "<br>";
echo "R3A = $R3A";
echo "<br>";
RkokA ($valinta);
SkokA ($valinta);
?>
</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 39 NÄKYVILLE -->
	  <h3> Tehtävä 39 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 39 KOODAUS ESILLE -->	  
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


	  </pre></div>

<!-- TEHTÄVÄ 39 ESIIN WWW SIVULLA-->

<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 40 NÄKYVILLE -->
	  <h3> Tehtävä 40 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 40 KOODAUS ESILLE -->	  
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


	  </pre></div>

<!-- TEHTÄVÄ 40 ESIIN WWW SIVULLA-->

<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 41 NÄKYVILLE -->
	  <h3> Tehtävä 41 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 41 KOODAUS ESILLE -->	  
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


	  </pre></div>

<!-- TEHTÄVÄ 41 ESIIN WWW SIVULLA-->

<!------------------------------------------------------------------- ------------------------------------------------------------------------>	  

	  <!-- TEHTÄVÄ 42 NÄKYVILLE -->
	  <h3> Tehtävä 42 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 42 KOODAUS ESILLE -->	  
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


	  </pre></div>

<!-- TEHTÄVÄ 42 ESIIN WWW SIVULLA-->

<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
    </div>
   </div> <!-- ÄLÄ HUKKAA TÄTÄ diviä -->
   <div class="footer">
     <p>Nevavesi Tuomo</p>
   </div>
 </body>
</html>