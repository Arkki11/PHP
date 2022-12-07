<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
   .koodi {
     background-color: #d4ffad;
     width: 100%;
     border: 1px solid black;
     padding: 10px;
     margin: 10px;
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
	}
	.vari1{
	 color: SlateBlue;
	}
	.esimerkki{
     background-color: RGB(248, 244, 253);
     width: 50%;
     border: 1px solid RGB(41, 20, 82);
     padding: 20px;
     margin: 20px;
     box-shadow: 7px 7px 5px grey;
	}
	.koodisini{
     color: darkblue;
	 font-size: 130%;
	}
	.vari2{
	   color: Maroon;
	}
	.fontti1{
	 font-family: 'Didact Gothic';
	}
	.fontti2{
	 font-family: 'Luxurious Roman';
	}
	.fontti3{
	 font-family: 'Syne Mono';
	}
	.kikka {
	 text-shadow: 2px 2px 5px red;
	}
  </style>
 </head>
 <body>

   <div class="header">
     <h3> PHP 7 - 12 </h3>
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
	  <!-- TEHTÄVÄ 7 NÄKYVILLE -->
      <h3> Tehtävä 7 </h3>
      <p> (& LT ) pienempi kuin ja (& GT ) suurempi kuin. </p>

	  <!-- TEHTÄVÄ 7 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>
<b> CSS-ohjeet: </b>

    .esimerkki {
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
    $R1 = 10;
    $R2 = 10;
    $R3 = 10;
    $R = array("10","10","10","0");
    echo "Taulukon sisältö:&LTbr>";
    echo "$R[0] $R[1] $R[2] $R[3]" . "&LTbr>";
    echo "Kokonaisresistanssi:&LTbr>";
    $Rkok = 1/(1/$R[0] + 1/$R[1] + 1/$R[2]);
    echo $Rkok . "&LTbr>";
    echo "&LTbr> Sarjaan kytkettyjen vastusten kokonaisresistanssi on: Rkok = 1/((1/R1)+(1/R2)+(1/R3)) &LTbr> <br>    R1 = $R1 Ω &LTbr>R2 = $R2 Ω &LTbr>R3 = $R3 Ω &LTbr>Rkok = $Rkok Ω";
    ?>
    &LT/div>

	  </pre></div>

<!-- TEHTÄVÄ 7 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	$R1 = 10;
	$R2 = 10;
	$R3 = 10;
    $R = array("10","10","10","0");
    echo "Taulukon sisältö:<br>";
    echo "$R[0] $R[1] $R[2] $R[3]" . "<br>";
    echo "Kokonaisresistanssi:<br>";
    $Rkok = 1/(1/$R[0] + 1/$R[1] + 1/$R[2]);
    echo $Rkok . "<br>";
	echo "<br> Sarjaan kytkettyjen vastusten kokonaisresistanssi on: Rkok = 1/((1/R1)+(1/R2)+(1/R3))<br>R1 = $R1 Ω <br>R2 = $R2 Ω <br>R3 = $R3 Ω <br>Rkok = $Rkok Ω";
	?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 8 NÄKYVILLE -->
	  <h3> Tehtävä 8 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 8 KOODAUS ESILLE -->
      <div class="koodi varjo"><pre>
    <b> CSS-ohjeet: </b>
	
    <b> HTML liittäminen: </b>
    &LTdiv class="esimerkki">
      $teksti1 = "\"Lähes kaikki suuri on nuorten tekemää.\"";
      $teksti2 = "\"Nuoressa ei huilaaminen mene hukkaan.\"";
      $teksti3 = "\"Nuoret ovat säännöllisesti ajattelemattomia.\"";
      $aforismit = array("\"Lähes kaikki suuri on nuorten tekemää.\"", "\"Nuoressa ei huilaaminen mene hukkaan.\"", "\"Nuoret ovat säännöllisesti ajattelemattomia.\"");
      echo "&LTspan class='fontti1'> $aforismit[0] &LT/span> - Benjamin Franklin<br>     &LTspan class='fontti2'> $aforismit[1]&LT/span> - Suomalainen sananlasku<br>     &LTspan class='fontti3'> $aforismit[2]&LT/span> - Homeros<br>    ";
     ?>
    &LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 8 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	$teksti1 = "\"Lähes kaikki suuri on nuorten tekemää.\"";
	$teksti2 = "\"Nuoressa ei huilaaminen mene hukkaan.\"";
	$teksti3 = "\"Nuoret ovat säännöllisesti ajattelemattomia.\"";
	$aforismit = array("\"Lähes kaikki suuri on nuorten tekemää.\"", "\"Nuoressa ei huilaaminen mene hukkaan.\"", "\"Nuoret ovat säännöllisesti ajattelemattomia.\"");
	echo "<span class='fontti1'> $aforismit[0] </span> - Benjamin Franklin<br> <span class='fontti2'> $aforismit[1]</span> - Suomalainen sananlasku<br> <span class='fontti3'> $aforismit[2]</span> - Homeros<br>";
	?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 9 NÄKYVILLE -->
	  <h3> Tehtävä 9 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 9 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>
    <b> CSS-ohjeet: </b>
    .esimerkki {
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
      $hedelmat = array("Mango", "Kiivi", "Meloni", "Omena");
      echo count($hedelmat);
      sizeof($hedelmat);
     ?>
    &LT/div>
	  </pre></div>
<!-- TEHTÄVÄ 9 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	$hedelmat = array("Mango", "Kiivi", "Meloni", "Omena");
    echo count($hedelmat);
	sizeof($hedelmat);
	?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 10 NÄKYVILLE -->
	  <h3> Tehtävä 10 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 10 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>
    
    <b> CSS-ohjeet: </b>
	
    .esimerkki {
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
        $lukujono = 
        array(
            array(1, 2, 3, 4, 5, 6, 7),
            array(8, 9, 10, 11, 12, 13, 14),
            array(15, 16, 17, 18, 19, 20, 21));
    $lukujono[0][0]." ".$lukujono[0][1]." ".$lukujono[0][2]." ".$lukujono[0][3]." ".$lukujono[0][4]." ".$lukujono[0][5]."<br>  ".$lukujono[0][6]."<br>";
    $lukujono[1][0]." ".$lukujono[1][1]." ".$lukujono[1][2]." ".$lukujono[1][3]." ".$lukujono[1][4]." ".$lukujono[1][5]."<br>  ".$lukujono[1][6]."<br>";
    $lukujono[2][0]." ".$lukujono[2][1]." ".$lukujono[2][2]." ".$lukujono[2][3]." ".$lukujono[2][4]." ".$lukujono[2][5]."<br>  ".$lukujono[2][6]."<br>";
    
    echo "<br>Taulukon tulostus kahdella for silmukalla:<br><br>";
    for($rivi=0;$rivi<3;$rivi++){
        for($sarake=0;$sarake<8;$sarake++){ 
            echo $lukujono[$rivi][$sarake]." ";
        }
        echo "<br>";
    }
     ?>
    &LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 10 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	 <?php
		$lukujono = 
		array(
			array(1, 2, 3, 4, 5, 6, 7),
			array(8, 9, 10, 11, 12, 13, 14),
			array(15, 16, 17, 18, 19, 20, 21));
    $lukujono[0][0]." ".$lukujono[0][1]." ".$lukujono[0][2]." ".$lukujono[0][3]." ".$lukujono[0][4]." ".$lukujono[0][5]." ".$lukujono[0][6]."<br>";
	$lukujono[1][0]." ".$lukujono[1][1]." ".$lukujono[1][2]." ".$lukujono[1][3]." ".$lukujono[1][4]." ".$lukujono[1][5]." ".$lukujono[1][6]."<br>";
    $lukujono[2][0]." ".$lukujono[2][1]." ".$lukujono[2][2]." ".$lukujono[2][3]." ".$lukujono[2][4]." ".$lukujono[2][5]." ".$lukujono[2][6]."<br>";
    
    echo "<br>Taulukon tulostus kahdella for silmukalla:<br><br>";
	for($rivi=0;$rivi<3;$rivi++){
		for($sarake=0;$sarake<8;$sarake++){ 
			echo $lukujono[$rivi][$sarake]." ";
		}
		echo "<br>";
    }
	 ?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 11 NÄKYVILLE -->
	  <h3> Tehtävä 11 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 11 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>
 <b> CSS-ohjeet: </b>
	
.esimerkki {
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
$lukujono = 
    array(
        array("Alokas Nönnönnöö", 10, 20, 30, 40, 50, 0, "(arvosana)"),
        array("John Doe", 5, 10, 15, 20, 25, 0, "(arvosana)"),
        array("Jane Doe", 1, 2, 3, 4, 5, 0, "(arvosana)")
    );
//pisteiden summa
$lukujono[0][6]=$lukujono[0][1]+$lukujono[0][2]+$lukujono[0][3]+$lukujono[0][4]+$lukujono[0][5];
$lukujono[1][6]=$lukujono[1][1]+$lukujono[1][2]+$lukujono[1][3]+$lukujono[1][4]+$lukujono[1][5];
$lukujono[2][6]=$lukujono[2][1]+$lukujono[2][2]+$lukujono[2][3]+$lukujono[2][4]+$lukujono[2][5];
//pisteiden summa
	
$lukujono[0][0]." ".$lukujono[0][1]." ".$lukujono[0][2]." ".$lukujono[0][3]." ".$lukujono[0][4]." ".$lukujono[0][5]." ".$lukujono[0][6]." ".$lukujono[0][7]."<br>";
$lukujono[1][0]." ".$lukujono[1][1]." ".$lukujono[1][2]." ".$lukujono[1][3]." ".$lukujono[1][4]." ".$lukujono[1][5]." ".$lukujono[1][6]." ".$lukujono[1][7]."<br>";
$lukujono[2][0]." ".$lukujono[2][1]." ".$lukujono[2][2]." ".$lukujono[2][3]." ".$lukujono[2][4]." ".$lukujono[2][5]." ".$lukujono[2][6]." ".$lukujono[2][7]."<br>";
    
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

<!-- TEHTÄVÄ 11 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	 <?php
	$lukujono = 
	array(
		array("Alokas Nönnönnöö", 10, 20, 30, 40, 50, 0, "(arvosana)"),
		array("John Doe", 5, 10, 15, 20, 25, 0, "(arvosana)"),
		array("Jane Doe", 1, 2, 3, 4, 5, 0, "(arvosana)")
	);
	//pisteiden summa
	$lukujono[0][6]=$lukujono[0][1]+$lukujono[0][2]+$lukujono[0][3]+$lukujono[0][4]+$lukujono[0][5];
	$lukujono[1][6]=$lukujono[1][1]+$lukujono[1][2]+$lukujono[1][3]+$lukujono[1][4]+$lukujono[1][5];
	$lukujono[2][6]=$lukujono[2][1]+$lukujono[2][2]+$lukujono[2][3]+$lukujono[2][4]+$lukujono[2][5];
	//pisteiden summa
	
    $lukujono[0][0]." ".$lukujono[0][1]." ".$lukujono[0][2]." ".$lukujono[0][3]." ".$lukujono[0][4]." ".$lukujono[0][5]." ".$lukujono[0][6]." ".$lukujono[0][7]."<br>";
	$lukujono[1][0]." ".$lukujono[1][1]." ".$lukujono[1][2]." ".$lukujono[1][3]." ".$lukujono[1][4]." ".$lukujono[1][5]." ".$lukujono[1][6]." ".$lukujono[1][7]."<br>";
    $lukujono[2][0]." ".$lukujono[2][1]." ".$lukujono[2][2]." ".$lukujono[2][3]." ".$lukujono[2][4]." ".$lukujono[2][5]." ".$lukujono[2][6]." ".$lukujono[2][7]."<br>";
    
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

	  <!-- TEHTÄVÄ 12 NÄKYVILLE -->
	  <h3> Tehtävä 12 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 12 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>
 <b> CSS-ohjeet: </b>
	
.esimerkki {
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
 $koep1 = 70;
 $koep2 = 80;
 $koep3 = 90;
 $yhteispisteet=$koep1+$koep2+$koep3;
 $pisteet = array("koe1"=>"koe1 = $koep1", "koe2"=>"koe2 = $koep2",
                  "koe3"=>"koe3 = $koep3", "yhteispisteet"=>"kokeiden yhteispisteet = $yhteispisteet");
  
 echo $pisteet['koe1'] . ", ";
 echo $pisteet['koe2'] . ", ";
 echo $pisteet['koe3'] . ", ";
 echo $pisteet['yhteispisteet'];
?>
&LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 12 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	$koep1 = 70;
	$koep2 = 80;
	$koep3 = 90;
	$yhteispisteet=$koep1+$koep2+$koep3;
    $pisteet = array("koe1"=>"koe1 = $koep1", "koe2"=>"koe2 = $koep2",
					 "koe3"=>"koe3 = $koep3", "yhteispisteet"=>"kokeiden yhteispisteet = $yhteispisteet");
  
    echo $pisteet['koe1'] . ", ";
    echo $pisteet['koe2'] . ", ";
    echo $pisteet['koe3'] . ", ";
    echo $pisteet['yhteispisteet'];
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