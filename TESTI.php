<!DOCTYPE html>
  <html>
   <head>
    <meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Luxurious+Roman&family=Syne+Mono&display=swap" rel="stylesheet">
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 1 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
   <body>
	<div class="vari1">
    <?php
	echo "TEHTÄVÄ 1<br>";
      echo "Hyvää päivää! <br>Tämä on ensimmäinen PHP-koodi";
	  echo "<br>Tämä on tehtävä 1, br tekee rivinvaihdon";
    ?>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 1 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 2 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	 <div class="vari1">
	  <?php
	  echo "TEHTÄVÄ 2<br>";
	   $teksti1 = "Seitsemän veljestä: Ensimmäinen luku, ensimmäinen kappale <br>";
	   $teksti2 = "Seitsemän veljestä: Toinen luku, ensimmäinen kappale <br>";
	   $teksti3 = "Jukolan talo, eteläisessä Hämeessä, seisoo erään mäen pohjaisella rinteellä, liki Toukolan kylää. Sen läheisin ympäristö on kivinen tanner, mutta alempana alkaa pellot, joissa, ennenkuin talo oli häviöön mennyt, aaltoili teräinen vilja. Peltojen alla on niittu, apilaäyräinen, halkileikkaama monipolvisen ojan; ja runsaasti antoi se heiniä, ennenkuin joutui laitumeksi kylän karjalle. Muutoin on talolla avaria metsiä, soita ja erämaita, jotka, tämän tilustan ensimmäisen perustajan oivallisen toiminnan kautta, olivat langenneet sille osaksi jo ison-jaon käydessä entisinä aikoina. Silloinpa Jukolan isäntä, pitäen enemmän huolta jälkeentulevainsa edusta kuin omasta parhaastansa, otti vastaan osaksensa kulon polttaman metsän ja sai sillä keinolla seitsemän vertaa enemmän kuin toiset naapurinsa. Mutta kaikki kulovalkean jäljet olivat jo kadonneet hänen piiristänsä ja tuuhea metsä kasvanut sijaan. – Ja tämä on niiden seitsemän veljen koto, joiden elämänvaiheita tässä nyt käyn kertoilemaan.<br>";
	   $teksti4 = "On tyyni syyskuun aamu. Kaste kiiltää kedolla, sumu kiiriskelee kellastuneiden lehdistöjen tutkaimilla ja haihtuu lopulta korkeuteen. Tänä aamuna ovat veljet nousneet ylös kovin äkeinä ja äänettöminä, pesneet kasvonsa, harjanneet tukkansa ja pukeutuneet pyhävaatteisinsa. Sillä tänäpänä olivat he päättäneet lähteä lukkarin luoksi kouluun.

Syövät he nyt aamuistansa Jukolan pitkän, honkaisen pöydän ääressä, ja näkyy heille maittavan ruskeat herneet, ehkei ollut heidän muotonsa iloinen, vaan kiusan karmeus väikkyi heidän kulmakarvoillansa; aatos kouluretkestä, johon heidän kohta tulee lähteä, on matkaan-saattanut tämän. Mutta atrioittuansa, eivät he kuitenkaan rientäneet heti matkaan, vaan istuivat vielä hetkeksi levähtämään. Vaiti he istuivat, ja mikä heistä alakuloisesti tuijotteli alas permantoon, mikä taasen katseli punakansista aapiskirjaansa, käännellen sen tukevia lehtiä. Pirtin eteläisen akkunan ääressä istuu Juhani, katsahdellen ylös kiviseen mäkeen ja tuuheaan männistöön, josta haamoitti muorin tönö punapielisellä ovellansa. <br>";
	    
	   echo "<h4>" . $teksti1 . "</h4>";
	   echo "" . $teksti3 . "<br>";
	   echo "<h4>" . $teksti2 . "</h4>";
	   echo "" . $teksti4 . "<br>";
	  ?>
	  
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 2 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 3 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	  <div class="esimerkki koodisini">
  <?php
	echo "TEHTÄVÄ 3<br>";
    $teksti_1 = "<h3>Ympyrän kehän laskeminen</h3>";
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
	print "<br>Pallon " . $teksti_3 . " lasketaan kaavalla:<br>";
    print "Pallon pinta-ala = 4 * π * (säde*2)<br>";
    print "Jos säde on 10, pinta-ala on ";
    print "" .  4 * $pii * ($sade*2) . "<br>";
	print "<br>Pallon " . $teksti_4 . " lasketaan kaavalla:<br>";
    print "Pallon tilavuus = (4 * π * (säde*3))/3<br>";
    print "Jos säde on 10, tilavuus on ";
    print "" .  (4 * $pii * ($sade*3))/3 . "";
  ?>
  </div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 3 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 4 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki vari2">
	 <?php
	echo "TEHTÄVÄ 4<br>";
	$luku1 = 3;
	$luku2 = 7;
	$luku3 = 70;
	$tulos ;
	  
	  echo "luku1 = 3<br>";
	  echo "luku2 = 7<br>";
	  echo "luku3 = 70<br>";
	  print "kolmen luvun summa, luku1 + luku2 + luku3 = " . $tulos = $luku1 + $luku2 + $luku3 . "<br>";
	  echo "tulos =  $tulos";
	 ?>
	</div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 4 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 5 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki koodisini">
	<?php
	echo "TEHTÄVÄ 5<br>";
	$R1 = 10;
	$R2 = 20;
	$R3 = 30;
	$Rkok = 1/((1/$R1)+(1/$R2)+(1/$R3));
	echo "R1 = 1<br>";
	echo "R2 = 2<br>";
	echo "R3 = 3<br>";
	echo "Rkok = 1/((1/R1)+(1/R2)+(1/R3))<br>";
	echo "1/((1/$R1)+(1/$R2)+(1/$R3)) = $Rkok<br>";
	echo "Rkok = $Rkok";
	?>
	</div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 5 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 6 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 6<br>";
	$teksti1 = "\"Lähes kaikki suuri on nuorten tekemää.\"";
	$teksti2 = "\"Nuoressa ei huilaaminen mene hukkaan.\"";
	$teksti3 = "\"Nuoret ovat säännöllisesti ajattelemattomia.\"";
	echo "<span class='fontti1'> $teksti1</span> - Benjamin Franklin<br> <span class='fontti2'> $teksti2</span> - Suomalainen sananlasku<br> <span class='fontti3'> $teksti3</span> - Homeros<br>";
	?>
	</div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 6 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 7 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 7<br>";
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 7 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 8 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 8<br>";
	$teksti1 = "\"Lähes kaikki suuri on nuorten tekemää.\"";
	$teksti2 = "\"Nuoressa ei huilaaminen mene hukkaan.\"";
	$teksti3 = "\"Nuoret ovat säännöllisesti ajattelemattomia.\"";
	$aforismit = array("\"Lähes kaikki suuri on nuorten tekemää.\"", "\"Nuoressa ei huilaaminen mene hukkaan.\"", "\"Nuoret ovat säännöllisesti ajattelemattomia.\"");
	echo "<span class='fontti1'> $aforismit[0] </span> - Benjamin Franklin<br> <span class='fontti2'> $aforismit[1]</span> - Suomalainen sananlasku<br> <span class='fontti3'> $aforismit[2]</span> - Homeros<br>";
	?>
	</div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 8 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 9 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 9<br>";
	$hedelmat = array("Mango", "Kiivi", "Meloni", "Omena");
    echo count($hedelmat);
	sizeof($hedelmat);
	?>
	</div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 9 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 10 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki">
	 <?php
	 echo "TEHTÄVÄ 10<br>";
		$lukujono = 
		array(
			array(1, 2, 3, 4, 5, 6, 7),
			array(8, 9, 10, 11, 12, 13, 14),
			array(15, 16, 17, 18, 19, 20, 21));
    $lukujono[0][0]." ".$lukujono[0][1]." ".$lukujono[0][2]." ".$lukujono[0][3]." ".$lukujono[0][4]." ".$lukujono[0][5]." ".$lukujono[0][6]."<br>";
	$lukujono[1][0]." ".$lukujono[1][1]." ".$lukujono[1][2]." ".$lukujono[1][3]." ".$lukujono[1][4]." ".$lukujono[1][5]." ".$lukujono[1][6]."<br>";
    $lukujono[2][0]." ".$lukujono[2][1]." ".$lukujono[2][2]." ".$lukujono[2][3]." ".$lukujono[2][4]." ".$lukujono[2][5]." ".$lukujono[2][6]."<br>";
    
    echo "<br>Tauluko tulostus kahdella for silmukalla:<br><br>";
	for($rivi=0;$rivi<3;$rivi++){
		for($sarake=0;$sarake<8;$sarake++){ 
			echo $lukujono[$rivi][$sarake]." ";
		}
		echo "<br>";
    }
	 ?>
	</div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 10 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 11 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki">
	 <?php
	 echo "TEHTÄVÄ 11<br>";
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 11 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 12 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 12<br>";
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 12 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 13 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
 	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 13<br>";
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 13 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 14 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 14<br>";
	$luku1 = 10;
	$luku2 = 9;
  
	echo "--luku1 = --" . $luku1 . " = ";
	echo --$luku1 . "<br>"; 
	echo "++luku2 = ++" . $luku2 . " = ";
	echo ++$luku2;
	?>
	</div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 14 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 15 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 15<br>";
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 15 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 16 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 16<br>";
	$otsikko1 = "<h3>Vuoret</h3>";
	$otsikko2 = "<h3>Vuorien merkitys</h3>";
	$teksti1 = "<p>Vuori on ympäröivää aluetta selvästi korkeampi pinnanmuoto. Vuorella on tyypillisesti jyrkät rinteet, suhteellisen helposti rajattavissa oleva huippualue ja huomattavat paikalliset korkeuserot. Vuorta pienempi pinnanmuoto on kukkula.</p>";
	$teksti2 = "<p>Vuorilla on läpi ihmiskunnan historian ollut merkittävä rooli uskonnoissa ja kansanperinteissä. Vuorikiipeily on aina kiehtonut ihmisiä kaikissa maanosissa, mutta maailman korkeimmat huiput ihminen saavutti vasta 1900-luvulla varusteiden kehityttyä riittävälle tasolle.</p>";
	
	echo "$otsikko1 <br> $teksti1 <br> $otsikko2 <br> $teksti2";
	?>
	</div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 16 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 17 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki">
    <?php
	echo "TEHTÄVÄ 17<br>";
	$luku1 = 119.1;
	if ($luku1 > 20 && $luku1 < 118)
		echo "Arvosana on 0";
    if ($luku1 > 119 && $luku1 < 212)
		echo "Arvosana on 1";
	if ($luku1 > 213 && $luku1 < 305)
		echo "Arvosana on 2";
	if ($luku1 > 306 && $luku1 < 400)
		echo "Arvosana on 3";
	?>
    </div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 17 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 18 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 18 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 19 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 19 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 20 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 20 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 21 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 21<br>";
	for($luku = 10; $luku > 0; $luku--){
		echo "$luku<br>";
	}
	?> 
	</div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 21 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 22 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 22<br>";
	for($luku = 0; $luku <= 500; $luku+=50){
		echo "$luku<br>";
	}
	?> 
	</div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 22 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 23 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki"> 
    <?php
	echo "TEHTÄVÄ 23<br>";
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 23 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 24 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki"> 
    <?php
	echo "TEHTÄVÄ 24<br>";
    $taulu = array(
		array("A","B","C","D","E"),
        array("F","G","H","I","J"),
        array("K","L","M","N","O"),
        array("P","Q","R","S","T"),
        array("U","V","W","Y","Z"),
		array("Å","Ä","Ö")
    );
			
    for ($rivi = 0; $rivi <= count($taulu); $rivi++) {
        for ($sarake = 0; $sarake <= 6; $sarake++){
			echo " ". $taulu[$rivi][$sarake] ." ";
    }
    echo "<br>";
    }
    ?>
	</div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 24 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 25 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki"> 
	<?php
	echo "TEHTÄVÄ 25<br>";
	$lukujono = array(
		array("Nimi","Koe 1","Koe 2","Koe 3","Koe 4","Yht.","Arvosana"),
		array("Ykkönen Alli","30","40","50","60","0","0"),
		array("Kakkonen Berta","40","50","60","70","0","0"),
		array("Kolmonen Carita","50","60","70","80","0","0")
		);
	
	//pisteiden summa
	$lukujono[1][6]=$lukujono[1][1]+$lukujono[1][2]+$lukujono[1][3]+$lukujono[1][4]+$lukujono[1][5];
	$lukujono[2][6]=$lukujono[2][1]+$lukujono[2][2]+$lukujono[2][3]+$lukujono[2][4]+$lukujono[2][5];
	$lukujono[3][6]=$lukujono[3][1]+$lukujono[3][2]+$lukujono[3][3]+$lukujono[3][4]+$lukujono[3][5];
	//pisteiden summa
	
    $lukujono[1][0]." ".$lukujono[1][1]." ".$lukujono[1][2]." ".$lukujono[1][3]." ".$lukujono[1][4]." ".$lukujono[1][5]." ".$lukujono[1][6]." ".$lukujono[1][7]."<br>";
	$lukujono[2][0]." ".$lukujono[2][1]." ".$lukujono[2][2]." ".$lukujono[2][3]." ".$lukujono[2][4]." ".$lukujono[2][5]." ".$lukujono[2][6]." ".$lukujono[2][7]."<br>";
    $lukujono[3][0]." ".$lukujono[3][1]." ".$lukujono[3][2]." ".$lukujono[3][3]." ".$lukujono[3][4]." ".$lukujono[3][5]." ".$lukujono[3][6]." ".$lukujono[3][7]."<br>";
    
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
	
	//rivin 3 arvosana
	if ($lukujono[3][6] < 120)
		$lukujono[3][7] = 0;
	if ($lukujono[3][6] >= 120 && $lukujono[3][6] < 175.9)
		$lukujono[3][7] = 1;
	if ($lukujono[3][6] >= 176 && $lukujono[3][6] < 231.9)
		$lukujono[3][7] = 2;
	if ($lukujono[3][6] >= 232 && $lukujono[3][6] < 287.9)
		$lukujono[3][7] = 3;
	if ($lukujono[3][6] >= 288 && $lukujono[3][6] < 343.9)
		$lukujono[3][7] = 4;
	if ($lukujono[3][6] >= 344)
		$lukujono[3][7] = 5;
	
	echo "<br>Tauluko tulostus for silmukalla:<br><br>";
	for($rivi=1; $rivi <= count ($taulu);$rivi++){
		for($sarake=0;$sarake<8;$sarake++){ 
			echo " ". $lukujono[$rivi][$sarake]." ";
		}
		echo "<br>";
    }
	 ?>
	</div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 25 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 26 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 26 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 27 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 27 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 28 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 28 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 29 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 29 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 30 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 30 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 31 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 31 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 32 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 32 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 33 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 33 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 34 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 34 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 35 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	<div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 35<br>";
	/*$aikaNyt = date_default_timezone_get();
	echo "$aikaNyt<br>";*/
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
			$kk = "tammikuu";
			break;
		case "February":
			$kk = "helmikuu";
			break;
		case "March":
			$kk = "maaliskuu";
			break;
		case "April":
			$kk = "huhtikuu";
			break;
		case "May":
			$kk = "toukokuu";
			break;
		case "June":
			$kk = "kesäkuu";
			break;
		case "July":
			$kk = "heinäkuu";
			break;
		case "August":
			$kk = "elokuu";
			break;
		case "September":
			$kk = "syyskuu";
			break;
		case "October":
			$kk = "lokakuu";
			break;
		case "November":
			$kk = "marraskuu";
			break;
		case "December":
			$kk = "joulukuu";
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
	echo "Kello on : $aika, $paivaT $paivaK. $kk $vuosi";
	?>
	</div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 35 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 36 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
    <div class="esimerkki">
	<?php
	echo "TEHTÄVÄ 36";
	?>
	<h3> tiedot1.php </h3>
    <form action="laske1.php" method="GET"> 
		R1: <input type="text" name="R1"><br>
		R2: <input type="text" name="R2"><br>
		R3: <input type="text" name="R3"><br>
		<input type="submit" value="Lähetä">
    </form>
    </div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 36 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 37 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 37 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 38 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
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
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 38 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 39 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<div class="esimerkki">
<?php
echo "TEHTÄVÄ 39";

?>
</div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 39 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 40 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<div class="esimerkki">
<?php
echo "TEHTÄVÄ 40";

?>
</div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 40 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 41 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<div class="esimerkki">
<?php
echo "TEHTÄVÄ 41";

?>
</div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 41 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 42 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
<div class="esimerkki">
<?php
echo "TEHTÄVÄ 42";

?>
</div>
<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- TEHTÄVÄ 42 --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->

<!--- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- LOPPU LOPPU --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --->
	 </div>
	</div>
   </body>
  </html>