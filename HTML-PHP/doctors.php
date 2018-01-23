<!DOCTYPE html>
<html>
<head>
<title>Doctors </title>
<link rel="stylesheet" type="text/css" href="doc_style.css">
<meta charset="UTF-8">
</head>

<body>
<div id="title">
	<h1> Doctors </h1>
</div>

	<?php

session_start();

?>

	<div id="wrapper">
		<div id="header">
			<h1> Smile </h1>
			<a href="Projecttt.html"><img  src="logo.jpg" alt="logo" /></a>
			 <?php
	  if(!isset($_SESSION['isLogged']))
      	{ ?>
			<section>
				
			<a href="myLogin.php">LOGIN</a>
			
			<input id="register" type="submit" value="REGISTER">

			</section>

		 </div>
		 <hr>
		 <div id ="content">
		 	<div id="leftSide">
		 	<ul>
		 		<li id="first"> <a href="Projecttt.html" >Home</a></li>
		 		<li id="second"> <a href="AboutUs.html" > About us </a></li>
		 		<li id="third"> <a href="Services.html" >Services</a></li>
		 		<li id="fourth"> <a href="doctors.php" > Doctors </a></li>
		 		<li id="fifth"> <a href="contactUs.html" > Contact us</a></li>
		 	</ul>
		 </div>
<div id="rightSide">
	<img class="doc" src="http://www.dentafaginovic.ba/images/alija.jpg">
		 		<p> Dr. Alija Faginović je diplomirao na Stomatološkom fakultetu Univerziteta u Sarajevu 1975 godine., od kada radi u stomatološkoj praksi. Iza njega stoji dugogodišnje iskustvo u stomatološkoj protetici i opštoj stomatologiji. Kroz profesionalno usavršavanje i prisustva stručnim seminarima i konferencijama prati i primjenjuje najsavremenije tehnike u stomatologiji.</p>
	<img class="doc" src="http://www.dentafaginovic.ba/images/dzenita.jpg">
	<p>Dr. Dženita Spahović Muhsinović, specijalista oralne hirurgije, diplomirala je na Stomatološkom fakultetu Univerziteta u Sarajevu 2002 godine.Zaposlena u stomatološkoj ordinaciji Denta F od 2003.</p>
		 	</div>
		 </div>
<hr>

 <div id="footer">
		 	<p> Copyright &copy 2014 </p>
		 	<div id="find">
		 	<p> Find us on </p>
		 	<a href="https://www.facebook.com/StomatoloskaOrdinacijaBicakcic" target="_blank"><img  src="fb.png" alt="Facebook" /></a>
		 	 </div>
		 </div>
</div>
</body>
</html>