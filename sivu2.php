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
     <h3> PHP 13 - 18 </h3>
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
	  <!-- TEHTÄVÄ 13 NÄKYVILLE -->
      <h3> Tehtävä 13 </h3>
      <p> (& LT ) pienempi kuin ja (& GT ) suurempi kuin. </p>

	  <!-- TEHTÄVÄ 13 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>
 <b> CSS-ohjeet: </b>

 .esimerkki{
  background-color: RGB(248, 244, 253);
  width: 50%;
  border: 1px solid RGB(41, 20, 82);
  padding: 20px;
  margin: 20px;
  box-shadow: 7px 7px 5px grey;
 }
	
 <b> HTML liittäminen: </b>

 &LTdiv class="esimerkki">
 &LT?php
 $teksti_1 = "Ympyrän kehän, pinta-alan ja pallon tilavuuden laskeminen <br>";
 $teksti_2 = "kehä";
 $teksti_3 = "pinta-ala";
 $teksti_4 = "tilavuus";
 $sade = 10;
 $pii = 3.1415926535897932384626433832795;

 print "" . $teksti_1 . "<br>";
 print "Ympyrän " . $teksti_2 . " lasketaan kaavalla:<br>";
 print "Ala = 2 * π * säde<br>";
 print "Jos säde on 10, kehä on ";
 print "" .  2 * $pii * $sade . "<br>";
 print "<br>Ympyrän " . $teksti_3 . " lasketaan kaavalla:<br>";
 print "Ympyrän pinta-ala = π * (säde^2) <br>";
 print "Jos säde on 10, pinta-ala on ";
 print "" .  $pii * ($sade*$sade) . "<br>";
 print "<br>Pallon " . $teksti_4 . " lasketaan kaavalla:<br>";
 print "Pallon tilavuus = (4 * π * (säde^3))/3<br>";
 print "Jos säde on 10, tilavuus on ";
 print "" .  (4 * $pii * ($sade*$sade*$sade))/3 . "";
 ?>
 &LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 13 ESIIN WWW SIVULLA-->
 	<div class="esimerkki">
	<?php
    $teksti_1 = "Ympyrän kehän, pinta-alan ja pallon tilavuuden laskeminen <br>";
    $teksti_2 = "kehä";
	$teksti_3 = "pinta-ala";
	$teksti_4 = "tilavuus";
    $sade = 10;
    $pii = 3.1415926535897932384626433832795;

    print "" . $teksti_1 . "<br>";
    print "Ympyrän " . $teksti_2 . " lasketaan kaavalla:<br>";
    print "Ala = 2 * π * säde<br>";
    print "Jos säde on 10, kehä on ";
    print "" .  2 * $pii * $sade . "<br>";
	print "<br>Ympyrän " . $teksti_3 . " lasketaan kaavalla:<br>";
    print "Ympyrän pinta-ala = π * (säde^2) <br>";
    print "Jos säde on 10, pinta-ala on ";
    print "" .  $pii * ($sade*$sade) . "<br>";
	print "<br>Pallon " . $teksti_4 . " lasketaan kaavalla:<br>";
    print "Pallon tilavuus = (4 * π * (säde^3))/3<br>";
    print "Jos säde on 10, tilavuus on ";
    print "" .  (4 * $pii * ($sade*$sade*$sade))/3 . "";
	?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 14 NÄKYVILLE -->
	  <h3> Tehtävä 14 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 14 KOODAUS ESILLE -->	  
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
	
<b>HTML liittäminen: </b>

&LTdiv class="esimerkki">
&LT?php
$luku1 = 10;
$luku2 = 9;
  
echo "--luku1 = --" . $luku1 . " = ";
echo --$luku1 . "<br>"; 
echo "++luku2 = ++" . $luku2 . " = ";
echo ++$luku2;
?>
&LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 14 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	$luku1 = 10;
	$luku2 = 9;
  
	echo "--luku1 = --" . $luku1 . " = ";
	echo --$luku1 . "<br>"; 
	echo "++luku2 = ++" . $luku2 . " = ";
	echo ++$luku2;
	?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 15 NÄKYVILLE -->
	  <h3> Tehtävä 15 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 15 KOODAUS ESILLE -->	  
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
	
<b>HTML liittäminen: </b>

&LTdiv class="esimerkki">
&LT?php
$luku1 = 50; 
$luku2 = 100;

if($luku1 >= 50 AND $luku1 < 100){
    echo "Luku 1 on 50 tai pienempi kuin 100";
}
if($luku2 > 100){
    echo "Luku2 on suurempi kuin 100";
&LT}
&LT?>
&LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 15 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	$luku1 = 50; 
	$luku2 = 100;

	if($luku1 >= 50 AND $luku1 < 100){
		echo "Luku 1 on 50 tai pienempi kuin 100";
	}
	if($luku2 > 100){
		echo "Luku2 on suurempi kuin 100";
	}
	?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 16 NÄKYVILLE -->
	  <h3> Tehtävä 16 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 16 KOODAUS ESILLE -->	  
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
	
<b>HTML liittäminen: </b>

&LTdiv class="esimerkki">
&LT?php
$otsikko1 = "&LTh3>Vuoret&LT/h3>";
$otsikko2 = "&LTh3>Vuorien merkitys&LT/h3>";
$teksti1 = "&LTp>Vuori on ympäröivää aluetta selvästi korkeampi pinnanmuoto. Vuorella on tyypillisesti jyrkät rinteet, suhteellisen<br> helposti rajattavissa oleva huippualue ja huomattavat paikalliset korkeuserot. Vuorta pienempi pinnanmuoto on kukkula.&LT/p>";
$teksti2 = "&LTp>Vuorilla on läpi ihmiskunnan historian ollut merkittävä rooli uskonnoissa ja kansanperinteissä. Vuorikiipeily on<br> aina kiehtonut ihmisiä kaikissa maanosissa, mutta maailman korkeimmat huiput ihminen saavutti vasta 1900-luvulla varusteiden<br> kehityttyä riittävälle tasolle.&LT/p>";

echo "$otsikko1 <br> $teksti1 <br> $otsikko2 <br> $teksti2";
?>
&LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 16 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	$otsikko1 = "<h3>Vuoret</h3>";
	$otsikko2 = "<h3>Vuorien merkitys</h3>";
	$teksti1 = "<p>Vuori on ympäröivää aluetta selvästi korkeampi pinnanmuoto. Vuorella on tyypillisesti jyrkät rinteet, suhteellisen helposti rajattavissa oleva huippualue ja huomattavat paikalliset korkeuserot. Vuorta pienempi pinnanmuoto on kukkula.</p>";
	$teksti2 = "<p>Vuorilla on läpi ihmiskunnan historian ollut merkittävä rooli uskonnoissa ja kansanperinteissä. Vuorikiipeily on aina kiehtonut ihmisiä kaikissa maanosissa, mutta maailman korkeimmat huiput ihminen saavutti vasta 1900-luvulla varusteiden kehityttyä riittävälle tasolle.</p>";
	
	echo "$otsikko1 <br> $teksti1 <br> $otsikko2 <br> $teksti2";
	?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 17 NÄKYVILLE -->
	  <h3> Tehtävä 17 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 17 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>
<b>CSS-ohjeet:</b>

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
$luku1 = 150;
if ($luku1 > "0" && $luku1 < "118")
    echo "Arvosana on 0";
if ($luku1 > "119" && $luku1 < "212")
    echo "Arvosana on 1";
if ($luku1 > "213" && $luku1 < "305")
    echo "Arvosana on 2";
if ($luku1 > "306" && $luku1 < "400")
    echo "Arvosana on 3";
?> 
&LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 17 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
    <?php
	echo "TEHTÄVÄ 17<br>";
	$luku1 = 150;
	if ($luku1 > "0" && $luku1 < "118")
		echo "Arvosana on 0";
    if ($luku1 > "119" && $luku1 < "212")
		echo "Arvosana on 1";
	if ($luku1 > "213" && $luku1 < "305")
		echo "Arvosana on 2";
	if ($luku1 > "306" && $luku1 < "400")
		echo "Arvosana on 3";
	?> 
    </div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>	  

	  <!-- TEHTÄVÄ 18 NÄKYVILLE -->
	  <h3> Tehtävä 18 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 18 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>
<b>CSS-ohjeet:</b>

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
    echo "TEHTÄVÄ 18<br>";
    $lukujono = 
    array(
        array("Alokas Nönnönnöö", 10, 20, 30, 40, 50, 0, 0),
        array("John Doe", 20, 40, 60, 80, 100, 0, 0),
        array("Jane Doe", 40, 80, 120, 160, 200, 0, 0)
    );

    //pisteiden summa
    $lukujono[0][6]=$lukujono[0][1]+$lukujono[0][2]+$lukujono[0][3]+$lukujono[0][4]+$lukujono[0][5];
    $lukujono[1][6]=$lukujono[1][1]+$lukujono[1][2]+$lukujono[1][3]+$lukujono[1][4]+$lukujono[1][5];
    $lukujono[2][6]=$lukujono[2][1]+$lukujono[2][2]+$lukujono[2][3]+$lukujono[2][4]+$lukujono[2][5];
    //pisteiden summa

    $lukujono[0][0]." ".$lukujono[0][1]." ".$lukujono[0][2]." ".$lukujono[0][3]." ".$lukujono[0][4]." ".$lukujono[0][5]."<br> ".$lukujono[0][6]." ".$lukujono[0][7]."<br>";
    $lukujono[1][0]." ".$lukujono[1][1]." ".$lukujono[1][2]." ".$lukujono[1][3]." ".$lukujono[1][4]." ".$lukujono[1][5]."<br> ".$lukujono[1][6]." ".$lukujono[1][7]."<br>";
    $lukujono[2][0]." ".$lukujono[2][1]." ".$lukujono[2][2]." ".$lukujono[2][3]." ".$lukujono[2][4]." ".$lukujono[2][5]."<br> ".$lukujono[2][6]." ".$lukujono[2][7]."<br>";

    //rivin 0 arvosana
    if ($lukujono[0][6] < 120)
        $lukujono[0][7] = 0;
    if ($lukujono[0][6] >= 120 && $lukujono[0][6] < 175.9)
        $lukujono[0][7] = 1;
    if ($lukujono[0][6] >= 176 && $lukujono[0][6] < 231.9)
        $lukujono[0][7] = 2;
    if ($lukujono[0][6] >= 232 && $lukujono[0][6] < 287.9)
        $lukujono[0][7] = 3;
    if ($lukujono[0][6] >= 288 && $lukujono[0][6] < 343.9)
        $lukujono[0][7] = 4;
    if ($lukujono[0][6] >= 344)
        $lukujono[0][7] = 5;

    //rivin 1 arvosana
    if ($lukujono[1][6] < 120)
        $lukujono[1][7] = 0;
    if ($lukujono[1][6] >= 120 && $lukujono[1][6] < 175.9)
        $lukujono[1][7] = 1;
    if ($lukujono[1][6] >= 176 && $lukujono[1][6] < 231.9)
        $lukujono[1][7] = 2;
    if ($lukujono[1][6] >= 232 && $lukujono[1][6] < 287.9)
        $lukujono[1][7] = 3;
    if ($lukujono[1][6] >= 288 && $lukujono[1][6] < 343.9)
        $lukujono[1][7] = 4;
    if ($lukujono[1][6] >= 344)
        $lukujono[1][7] = 5;
	
    //rivin 2 arvosana
    if ($lukujono[2][6] < 120)
        $lukujono[2][7] = 0;
    if ($lukujono[2][6] >= 120 && $lukujono[2][6] < 175.9)
        $lukujono[2][7] = 1;
    if ($lukujono[2][6] >= 176 && $lukujono[2][6] < 231.9)
        $lukujono[2][7] = 2;
    if ($lukujono[2][6] >= 232 && $lukujono[2][6] < 287.9)
        $lukujono[2][7] = 3;
    if ($lukujono[2][6] >= 288 && $lukujono[2][6] < 343.9)
        $lukujono[2][7] = 4;
    if ($lukujono[2][6] >= 344)
        $lukujono[2][7] = 5;
	
    echo "<br>Tauluko tulostus kahdella for silmukalla:<br><br>";
    for($rivi=0;$rivi<3;$rivi++){
        for($sarake=0;$sarake<8;$sarake++){ 
            echo $lukujono[$rivi][$sarake]." ";
        }
        echo "<br>";
    }
     ?>
    &LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 18 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	 <?php
	echo "TEHTÄVÄ 18<br>";
	$lukujono = 
	array(
		array("Alokas Nönnönnöö", 10, 20, 30, 40, 50, 0, 0),
		array("John Doe", 20, 40, 60, 80, 100, 0, 0),
		array("Jane Doe", 40, 80, 120, 160, 200, 0, 0)
	);
	
	//pisteiden summa
	$lukujono[0][6]=$lukujono[0][1]+$lukujono[0][2]+$lukujono[0][3]+$lukujono[0][4]+$lukujono[0][5];
	$lukujono[1][6]=$lukujono[1][1]+$lukujono[1][2]+$lukujono[1][3]+$lukujono[1][4]+$lukujono[1][5];
	$lukujono[2][6]=$lukujono[2][1]+$lukujono[2][2]+$lukujono[2][3]+$lukujono[2][4]+$lukujono[2][5];
	//pisteiden summa
	
    $lukujono[0][0]." ".$lukujono[0][1]." ".$lukujono[0][2]." ".$lukujono[0][3]." ".$lukujono[0][4]." ".$lukujono[0][5]." ".$lukujono[0][6]." ".$lukujono[0][7]."<br>";
	$lukujono[1][0]." ".$lukujono[1][1]." ".$lukujono[1][2]." ".$lukujono[1][3]." ".$lukujono[1][4]." ".$lukujono[1][5]." ".$lukujono[1][6]." ".$lukujono[1][7]."<br>";
    $lukujono[2][0]." ".$lukujono[2][1]." ".$lukujono[2][2]." ".$lukujono[2][3]." ".$lukujono[2][4]." ".$lukujono[2][5]." ".$lukujono[2][6]." ".$lukujono[2][7]."<br>";
    
	//rivin 0 arvosana
	if ($lukujono[0][6] < 120)
		$lukujono[0][7] = 0;
	if ($lukujono[0][6] >= 120 && $lukujono[0][6] < 175.9)
		$lukujono[0][7] = 1;
	if ($lukujono[0][6] >= 176 && $lukujono[0][6] < 231.9)
		$lukujono[0][7] = 2;
	if ($lukujono[0][6] >= 232 && $lukujono[0][6] < 287.9)
		$lukujono[0][7] = 3;
	if ($lukujono[0][6] >= 288 && $lukujono[0][6] < 343.9)
		$lukujono[0][7] = 4;
	if ($lukujono[0][6] >= 344)
		$lukujono[0][7] = 5;

	//rivin 1 arvosana
    if ($lukujono[1][6] < 120)
		$lukujono[1][7] = 0;
	if ($lukujono[1][6] >= 120 && $lukujono[1][6] < 175.9)
		$lukujono[1][7] = 1;
	if ($lukujono[1][6] >= 176 && $lukujono[1][6] < 231.9)
		$lukujono[1][7] = 2;
	if ($lukujono[1][6] >= 232 && $lukujono[1][6] < 287.9)
		$lukujono[1][7] = 3;
	if ($lukujono[1][6] >= 288 && $lukujono[1][6] < 343.9)
		$lukujono[1][7] = 4;
	if ($lukujono[1][6] >= 344)
		$lukujono[1][7] = 5;
	
	//rivin 2 arvosana
	if ($lukujono[2][6] < 120)
		$lukujono[2][7] = 0;
	if ($lukujono[2][6] >= 120 && $lukujono[2][6] < 175.9)
		$lukujono[2][7] = 1;
	if ($lukujono[2][6] >= 176 && $lukujono[2][6] < 231.9)
		$lukujono[2][7] = 2;
	if ($lukujono[2][6] >= 232 && $lukujono[2][6] < 287.9)
		$lukujono[2][7] = 3;
	if ($lukujono[2][6] >= 288 && $lukujono[2][6] < 343.9)
		$lukujono[2][7] = 4;
	if ($lukujono[2][6] >= 344)
		$lukujono[2][7] = 5;
	
	echo "<br>Tauluko tulostus kahdella for silmukalla:<br><br>";
	for($rivi=0;$rivi<3;$rivi++){
		for($sarake=0;$sarake<8;$sarake++){ 
			echo $lukujono[$rivi][$sarake]." ";
		}
		echo "<br>";
    }
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