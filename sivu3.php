<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
	<!--.kikka {
	 text-shadow: 2px 2px 5px red;
	}
	.esimerkki{
     background-color: RGB(248, 244, 253);
     width: 50%;
     border: 1px solid RGB(41, 20, 82);
     padding: 20px;
     margin: 20px;
     box-shadow: 7px 7px 5px grey;
	}-->
  </style>
 </head>
 <body>

   <div class="header">
     <h3> PHP 19 - 24 </h3>
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
	  <!-- TEHTÄVÄ 19 NÄKYVILLE -->
      <h3> Tehtävä 19 </h3>
      <p> (& LT ) pienempi kuin ja (& GT ) suurempi kuin. </p>

	  <!-- TEHTÄVÄ 19 KOODAUS ESILLE -->	  
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
echo "TEHTÄVÄ 19<br>";
$LUKU_1 = 12;
$LUKU_2 = 14;
$LUKU_3 = 16;
$tulos1 = $LUKU_1 + $LUKU_2;
$tulos2 = $LUKU_2 + $LUKU_3;
$tulos3 = $LUKU_1 + $LUKU_3;

if($LUKU_2 >= 14){
    echo "LUKU_1 + LUKU_2 = tulos1<br>";
    echo "$LUKU_1 + $LUKU_2 = $tulos1<br>";
    echo "LUKU_2 + LUKU_3 = tulos2<br>";
    echo "$LUKU_2 + $LUKU_3 = $tulos2<br>";
    echo "LUKU_1 + LUKU_3 = tulos3<br>";
    echo "$LUKU_1 + $LUKU_3 = $tulos3<br>";
}
?>
&LT/div>

	  </pre></div>

<!-- TEHTÄVÄ 19 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 19<br>";
	$LUKU_1 = 12;
	$LUKU_2 = 14;
	$LUKU_3 = 16;
	$tulos1 = $LUKU_1 + $LUKU_2;
	$tulos2 = $LUKU_2 + $LUKU_3;
	$tulos3 = $LUKU_1 + $LUKU_3;
	
	if($LUKU_2 >= 14){
		echo "LUKU_1 + LUKU_2 = tulos1<br>";
		echo "$LUKU_1 + $LUKU_2 = $tulos1<br>";
		echo "LUKU_2 + LUKU_3 = tulos2<br>";
		echo "$LUKU_2 + $LUKU_3 = $tulos2<br>";
		echo "LUKU_1 + LUKU_3 = tulos3<br>";
		echo "$LUKU_1 + $LUKU_3 = $tulos3<br>";
	}
	?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 20 NÄKYVILLE -->
	  <h3> Tehtävä 20 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 20 KOODAUS ESILLE -->	  
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
    echo "TEHTÄVÄ 20<br>";
    $luku = 123;

    switch($luku){
        case "123":
            echo "Tulos on 123";
            break;
        case "234":
            echo "Tulos on 234";
            break;
        case "456":
            echo "Tulos on 456";
            break;
        case "567":
            echo "Tulos on 567";
            break;
    }
    ?> 
    &LT/div>
	  </pre></div>
<!-- TEHTÄVÄ 20 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 20<br>";
    $luku = 123;

    switch($luku){
		case "123":
			echo "Tulos on 123";
			break;
        case "234":
			echo "Tulos on 234";
			break;
        case "456":
			echo "Tulos on 456";
			break;
        case "567":
			echo "Tulos on 567";
			break;
    }
	?> 
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 21 NÄKYVILLE -->
	  <h3> Tehtävä 21 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 21 KOODAUS ESILLE -->
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
echo "TEHTÄVÄ 21<br>";
for($luku = 10; $luku > 0; $luku--){
    echo "$luku<br>";
}
?> 
&LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 21 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 21<br>";
	for($luku = 10; $luku > 0; $luku--){
		echo "$luku<br>";
	}
	?> 
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 22 NÄKYVILLE -->
	  <h3> Tehtävä 22 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 22 KOODAUS ESILLE -->
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
echo "TEHTÄVÄ 22<br>";
for($luku = 0; $luku <= 500; $luku+=50){
    echo "$luku<br>";
}
?> 
&LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 22 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 22<br>";
	for($luku = 0; $luku <= 500; $luku+=50){
		echo "$luku<br>";
	}
	?> 
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 23 NÄKYVILLE -->
	  <h3> Tehtävä 23 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 23 KOODAUS ESILLE -->
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
$taulu = array(
    array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","Y","Z"),
    array("Å","Ä","Ö")
);
			
for ($rivi = 0; $rivi <= count($taulu); $rivi++) {
    for ($sarake = 0; $sarake <= 25; $sarake++){
        echo " ". $taulu[$rivi][$sarake] ." ";
}
echo "<br>";
}
?>
&LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 23 ESIIN WWW SIVULLA-->
	<div class="esimerkki"> 
    <?php
    $taulu = array(
		array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","Y","Z"),
		array("Å","Ä","Ö")
    );
			
    for ($rivi = 0; $rivi <= count($taulu); $rivi++) {
        for ($sarake = 0; $sarake <= 25; $sarake++){
			echo " ". $taulu[$rivi][$sarake] ." ";
    }
    echo "<br>";
    }
    ?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>	  

	  <!-- TEHTÄVÄ 24 NÄKYVILLE -->
	  <h3> Tehtävä 24 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 24 KOODAUS ESILLE -->	  
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
$taulu = array(
    array("A","B","C","D","E"),
    array("F","G","H","I","J"),
    array("K","L","M","N","O"),
    array("P","Q","R","S","T"),
    array("U","V","W","Y","Z"),
    array("Å","Ä","Ö")
);
		
for ($rivi = 0; $rivi <= count($taulu); $rivi++){
    for ($sarake = 0; $sarake <= 6; $sarake++){
        echo " ". $taulu[$rivi][$sarake] ." ";
    }
    echo "<br>";
}
?>
&LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 24 ESIIN WWW SIVULLA-->
	<div class="esimerkki"> 
    <?php
    $taulu = array(
		array("A","B","C","D","E"),
        array("F","G","H","I","J"),
        array("K","L","M","N","O"),
        array("P","Q","R","S","T"),
        array("U","V","W","Y","Z"),
		array("Å","Ä","Ö")
    );
			
    for ($rivi = 0; $rivi <= count($taulu); $rivi++){
        for ($sarake = 0; $sarake <= 6; $sarake++){
			echo " ". $taulu[$rivi][$sarake] ." ";
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