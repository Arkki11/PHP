<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Luxurious+Roman&family=Syne+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
	.vari1{
	color: SlateBlue;
	}
	.esimerkki {
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
  </style>
 </head>
 <body>

   <div class="header">
     <h3> PHP 1 - 6 </h3>
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
	  <!-- TEHTÄVÄ 1 NÄKYVILLE -->
      <h3> Tehtävä 1 </h3>
      <p> (& LT ) pienempi kuin ja (& GT ) suurempi kuin. </p>

	  <!-- TEHTÄVÄ 1 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>
  <b> CSS-ohjeet: </b>

   .vari1{
   color: SlateBlue;
   }
	
    <b>HTML- ja PHP-koodaukset:</b>
  
   &LT?php
    echo "Hyvää päivää! <br>    Tämä on ensimmäinen PHP-koodi";
     /* tämä on ohjelmoitsijan muistiinpano */
    echo "<br>    Tämä on tehtävä 1, br tekee rivinvaihdon";
   ?&GT
	  </pre></div>

<!-- TEHTÄVÄ 1 ESIIN WWW SIVULLA-->
	<div class="vari1">
	 <?php
      echo "<br>Hyvää päivää! <br>Tämä on ensimmäinen PHP-koodi";
	  /* tämä on ohjelmoitsijan muistiinpano */
	  echo "<br>Tämä on tehtävä 1, br tekee rivinvaihdon";
     ?>
	</div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 2 NÄKYVILLE -->
	  <h3> Tehtävä 2 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 2 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>
  <b>CSS-ohjeet:</b>

  <b>HTML- ja PHP-koodaukset:</b>
	  &LTdiv class="vari1">
	  &LT?php
	   $teksti1 = "Seitsemän veljestä: Ensimmäinen luku, ensimmäinen kappale";
	   $teksti2 = "Seitsemän veljestä: Toinen luku, ensimmäinen kappale";
	   $teksti3 = "Jukolan talo, eteläisessä Hämeessä, seisoo erään mäen pohjaisella rinteellä, liki Toukolan kylää.<br> Sen läheisin ympäristö on kivinen tanner, mutta alempana alkaa pellot, joissa, ennenkuin talo oli häviöön mennyt,<br> aaltoili teräinen vilja. Peltojen alla on niittu, apilaäyräinen, halkileikkaama monipolvisen ojan; <br>ja runsaasti antoi se heiniä, ennenkuin joutui laitumeksi kylän karjalle. Muutoin on talolla avaria metsiä, soita ja erämaita,<br> jotka, tämän tilustan ensimmäisen perustajan oivallisen toiminnan kautta, olivat langenneet sille osaksi jo ison-jaon käydessä<br> entisinä aikoina. Silloinpa Jukolan isäntä, pitäen enemmän huolta jälkeentulevainsa edusta kuin omasta parhaastansa, otti<br> vastaan osaksensa kulon polttaman metsän ja sai sillä keinolla seitsemän vertaa enemmän kuin toiset naapurinsa. Mutta kaikki<br> kulovalkean jäljet olivat jo kadonneet hänen piiristänsä ja tuuhea metsä kasvanut sijaan.<br> – Ja tämä on niiden seitsemän veljen koto, joiden elämänvaiheita tässä nyt käyn kertoilemaan.";
	   $teksti4 = "On tyyni syyskuun aamu. Kaste kiiltää kedolla, sumu kiiriskelee kellastuneiden lehdistöjen tutkaimilla<br> ja haihtuu lopulta korkeuteen. Tänä aamuna ovat veljet nousneet ylös kovin äkeinä ja äänettöminä, pesneet kasvonsa,<br> harjanneet tukkansa ja pukeutuneet pyhävaatteisinsa. Sillä tänäpänä olivat he päättäneet lähteä lukkarin luoksi kouluun.

Syövät he nyt aamuistansa Jukolan pitkän, honkaisen pöydän ääressä, ja näkyy heille maittavan ruskeat herneet, ehkei ollut<br> heidän muotonsa iloinen, vaan kiusan karmeus väikkyi heidän kulmakarvoillansa; aatos kouluretkestä, johon heidän kohta tulee<br> lähteä, on matkaan-saattanut tämän. Mutta atrioittuansa, eivät he kuitenkaan rientäneet heti matkaan, vaan istuivat vielä<br> hetkeksi levähtämään. Vaiti he istuivat, ja mikä heistä alakuloisesti tuijotteli alas permantoon, mikä taasen<br> katseli punakansista aapiskirjaansa, käännellen sen tukevia lehtiä. Pirtin eteläisen akkunan ääressä istuu Juhani,<br> katsahdellen ylös kiviseen mäkeen ja tuuheaan männistöön, josta haamoitti muorin tönö punapielisellä ovellansa.";
	    
	   echo "&LTh4>" . $teksti1 . "&LT/h4>";
	   echo "" . $teksti3 . "";
	   echo "&LTh4>" . $teksti2 . "&LT/h4>";
	   echo "" . $teksti4 . "";
	  ?>
	 &LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 2 ESIIN WWW SIVULLA-->
	 <div class="vari1">
	  <?php
	   $teksti1 = "<br>Seitsemän veljestä: Ensimmäinen luku, ensimmäinen kappale <br>";
	   $teksti3 = "<br>Jukolan talo, eteläisessä Hämeessä, seisoo erään mäen pohjaisella rinteellä, liki Toukolan kylää. Sen läheisin ympäristö on kivinen tanner, mutta alempana alkaa pellot, joissa, ennenkuin talo oli häviöön mennyt, aaltoili teräinen vilja. Peltojen alla on niittu, apilaäyräinen, halkileikkaama monipolvisen ojan; ja runsaasti antoi se heiniä, ennenkuin joutui laitumeksi kylän karjalle. Muutoin on talolla avaria metsiä, soita ja erämaita, jotka, tämän tilustan ensimmäisen perustajan oivallisen toiminnan kautta, olivat langenneet sille osaksi jo ison-jaon käydessä entisinä aikoina. Silloinpa Jukolan isäntä, pitäen enemmän huolta jälkeentulevainsa edusta kuin omasta parhaastansa, otti vastaan osaksensa kulon polttaman metsän ja sai sillä keinolla seitsemän vertaa enemmän kuin toiset naapurinsa. Mutta kaikki kulovalkean jäljet olivat jo kadonneet hänen piiristänsä ja tuuhea metsä kasvanut sijaan. – Ja tämä on niiden seitsemän veljen koto, joiden elämänvaiheita tässä nyt käyn kertoilemaan.<br>";
	   $teksti2 = "<br>Seitsemän veljestä: Toinen luku, ensimmäinen kappale <br>";
	   $teksti4 = "<br>On tyyni syyskuun aamu. Kaste kiiltää kedolla, sumu kiiriskelee kellastuneiden lehdistöjen tutkaimilla ja haihtuu lopulta korkeuteen. Tänä aamuna ovat veljet nousneet ylös kovin äkeinä ja äänettöminä, pesneet kasvonsa, harjanneet tukkansa ja pukeutuneet pyhävaatteisinsa. Sillä tänäpänä olivat he päättäneet lähteä lukkarin luoksi kouluun.
	   Syövät he nyt aamuistansa Jukolan pitkän, honkaisen pöydän ääressä, ja näkyy heille maittavan ruskeat herneet, ehkei ollut heidän muotonsa iloinen, vaan kiusan karmeus väikkyi heidän kulmakarvoillansa; aatos kouluretkestä, johon heidän kohta tulee lähteä, on matkaan-saattanut tämän. Mutta atrioittuansa, eivät he kuitenkaan rientäneet heti matkaan, vaan istuivat vielä hetkeksi levähtämään. Vaiti he istuivat, ja mikä heistä alakuloisesti tuijotteli alas permantoon, mikä taasen katseli punakansista aapiskirjaansa, käännellen sen tukevia lehtiä. Pirtin eteläisen akkunan ääressä istuu Juhani, katsahdellen ylös kiviseen mäkeen ja tuuheaan männistöön, josta haamoitti muorin tönö punapielisellä ovellansa. <br>";
	    
	   echo "<h4>" . $teksti1 . "</h4>";
	   echo "" . $teksti3 . "<br>";
	   echo "<h4>" . $teksti2 . "</h4>";
	   echo "" . $teksti4 . "<br>";
	  ?>
	 </div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 3 NÄKYVILLE -->
	  <h3> Tehtävä 3 </h3>
      <p> Ympyrän pinta-ala = (2 * pii * säde), pallon pinta-ala = (4 * pii * säde*2), pallon tilavuus = (4 * pii * säde*3)/3 </p>
		  
	  <!-- TEHTÄVÄ 3 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre> 
    <b>CSS-ohjeet:</b>
	  
	.esimerkki {
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
	  
    <b>HTML- ja PHP-koodaukset:</b>
	  
  &LTdiv class="esimerkki koodisini">
  &LT?php
    $teksti_1 = "&LTh3>Ympyrän kehän laskeminen&LT/h3>";
    $teksti_2 = "kehä";
	$teksti_3 = "pinta-ala";
	$teksti_4 = "tilavuus";
    $sade = 10;
    $pii = 3.14;

    print "" . $teksti_1 . "&LTbr>";
    print "Ympyrän " . $teksti_2 . " lasketaan kaavalla:&LTbr>";
    print "Ala = 2 * π * säde&LTbr>";
    print "Jos säde on 10, kehä on ";
    print "" .  2 * $pii * $sade . "&LTbr>";
	print "&LTbr>Pallon " . $teksti_3 . " lasketaan kaavalla:&LTbr>";
    print "Pallon pinta-ala = 4 * π * (säde*2)&LTbr>";
    print "Jos säde on 10, pinta-ala on ";
    print "" .  4 * $pii * ($sade*$sade) . "&LTbr>";
	print "&LTbr>Pallon " . $teksti_4 . " lasketaan kaavalla:&LTbr>";
    print "Pallon tilavuus = (4 * π * (säde*3))/3&LTbr>";
    print "Jos säde on 10, tilavuus on ";
    print "" .  (4 * $pii * ($sade*$sade*$sade))/3 . "";
  ?>
  &LT/div>
	  
	  </pre></div>

<!-- TEHTÄVÄ 3 ESIIN WWW SIVULLA-->
	<div class="esimerkki koodisini">
  <?php
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
    print "Pallon pinta-ala = 4 * π * (säde^2)<br>";
    print "Jos säde on 10, pinta-ala on ";
    print "" .  4 * $pii * ($sade*$sade) . "<br>";
	print "<br>Pallon " . $teksti_4 . " lasketaan kaavalla:<br>";
    print "Pallon tilavuus = (4 * π * (säde^3))/3<br>";
    print "Jos säde on 10, tilavuus on ";
    print "" .  (4 * $pii * ($sade*$sade*$sade))/3 . "";
  ?>
  </div>
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 4 NÄKYVILLE -->
	  <h3> Tehtävä 4 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 4 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>
	  
  <b>CSS-ohjeet:</b>

    .esimerkki {
     background-color: RGB(248, 244, 253);
     width: 50%;
     border: 1px solid RGB(41, 20, 82);
     padding: 20px;
     margin: 20px;
     box-shadow: 7px 7px 5px grey;
	}
    .vari2{
	   color: Maroon;
	}
	
  <b>HTML- ja PHP-koodaukset:</b>

  &LTdiv class="esimerkki vari2">
  &LT?php
      $luku1 = 3;
      $luku2 = 7;
      $luku3 = 70;
      $tulos ;

      echo "luku1 = 3&LTbr>";
      echo "luku2 = 7&LTbr>";
      echo "luku3 = 70&LTbr>";
      print "kolmen luvun summa, luku1 + luku2 + luku3 = " . $tulos = $luku1 + $luku2 + $luku3 . "&LTbr>";
	  echo "tulos =  $tulos";
      ?>
  &LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 4 ESIIN WWW SIVULLA-->
<div class="esimerkki vari2">
	 <?php
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
<!------------------------------------------------------------------- ------------------------------------------------------------------------>
	  
	  <!-- TEHTÄVÄ 5 NÄKYVILLE -->
	  <h3> Tehtävä 5 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 5 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>
  <b>CSS-ohjeet:</b>
    .esimerkki {
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

  <b>HTML- ja PHP-koodaukset:</b>
  &LTdiv class="esimerkki koodisini">
  &LT?php
    $R1 = 10;
    $R2 = 20;
    $R3 = 30;
    $Rkok = 1/((1/$R1)+(1/$R2)+(1/$R3));
    echo "R1 = 1&LTbr>";
    echo "R2 = 2&LTbr>";
    echo "R3 = 3&LTbr>";
    echo "Rkok = 1/((1/R1)+(1/R2)+(1/R3))&LTbr>";
    echo "1/((1/$R1)+(1/$R2)+(1/$R3)) = $Rkok&LTbr>";
    echo "Rkok = $Rkok";
  ?>
  &LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 5 ESIIN WWW SIVULLA-->
	<div class="esimerkki koodisini">
	<?php
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
<!------------------------------------------------------------------- ------------------------------------------------------------------------>	  

	  <!-- TEHTÄVÄ 6 NÄKYVILLE -->
	  <h3> Tehtävä 6 </h3>
      <p> Browse landscape pictures from around the world, including mountains, 
	      seascapes, forests, deserts and a lot more. This collection of beautiful 
		  and breathtaking photos is free for personal and commercial use. </p>
		  
	  <!-- TEHTÄVÄ 6 KOODAUS ESILLE -->	  
      <div class="koodi varjo"><pre>
  <b>CSS-ohjeet:</b>
    .esimerkki {
     background-color: RGB(248, 244, 253);
     width: 50%;
     border: 1px solid RGB(41, 20, 82);
     padding: 20px;
     margin: 20px;
     box-shadow: 7px 7px 5px grey;
	}
	
  <b>HTML- ja PHP-koodaukset:</b>
    &LTdiv class="esimerkki">
    &LT?php
    $teksti1 = "\"Lähes kaikki suuri on nuorten tekemää.\"";
    $teksti2 = "\"Nuoressa ei huilaaminen mene hukkaan.\"";
    $teksti3 = "\"Nuoret ovat säännöllisesti ajattelemattomia.\"";
    echo "&LTspan class='fontti1'> $teksti1&LT/span> - Benjamin Franklin&LTbr><br> &LTspan class='fontti2'> $teksti2&LT/span> - Suomalainen sananlasku&LTbr> &LTspan class='fontti3'> $teksti3&LT/span> - Homeros&LTbr>";
    ?>
    &LT/div>
	  </pre></div>

<!-- TEHTÄVÄ 6 ESIIN WWW SIVULLA-->
	<div class="esimerkki">
	<?php
	$teksti1 = "<span id='fontti1'>\"Lähes kaikki suuri on nuorten tekemää.\"</span>";
	$teksti2 = "\"Nuoressa ei huilaaminen mene hukkaan.\"</span>";
	$teksti3 = "\"Nuoret ovat säännöllisesti ajattelemattomia.\"</span>";
	echo "<span class='fontti1'> $teksti1</span> - Benjamin Franklin<br> <span class='fontti2'> $teksti2</span> - Suomalainen sananlasku<br> <span class='fontti3'> $teksti3</span> - Homeros<br>";
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