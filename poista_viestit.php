<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8"> 
 <title>VIESTIEN POISTAMINEN</title>
 <style>
  body{
    background-color: #505050;
  }
  #list  p {
    font: arial;
    font-size: 18px;
	width: 700px;
	padding: 10 px;
	border: 1px solid darkred;
    background-color: #FFF8DC;
  }
  .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
  }
  .button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
  }

  .button2:hover {
	background-color: RGB(8,90,0);
    color: yellow;	
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  }
  .container {
    position: sisalto;
  }
  .ilmoitus {
	position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    text-align: center;
    font-size: 18px;	
  }
 </style>
</head>
<body>
<!--
<h2 style="color:yellow;">Olet poistamassa viestejä !</h2>
-->
 <?php
  if($_GET['button1']){fun1();}
 
  function fun1()
  {
    $viestit = fopen("viestit.txt","w+")
              or die("Tuntematon tiedosto.");
    
   $uusi = " ";
   fwrite($viestit,$uusi);
   fclose($viestit);
  }
 ?>
  <div class="sisalto">
  <div class="ilmoitus">
   <h2 style="color:yellow;"> Olet poistamassa viestejä !</h2>
   <p style="color:yellow;">(ilmoitus sulkeutuu automaattisesti 4 sekunnin kuluttua)</p><br>
   <button class="button button2" id="btnfun1" name="btnfun1" onClick='location.href="?button1=1"'>Poista viestit</button>
  </div>
 </div> 
 
  <script type="text/javascript">
  (function(){
   setTimeout(function(){
     window.location="http://tietokanta.dy.fi/softa13/nevavesi.tuomo/PHP/xfile.php#paluu";
   },4000); /* 1000 = 1 second*/
  })();
 </script>

<!--<button class="button button3">Tyhjennä viestit</button>-->

</body>
</html>