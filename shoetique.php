<?php
session_start();
?>
<!DOCTYPE html>

<html lang="nl">

	<head>
        <meta charset="UTF-8">
  		<meta name="auteurs" content="Tolunay Oruc en Mees Kerssens">
		<title>Mesunay store</title>
        <link rel="stylesheet" href="css/style.css">
		<link rel="icon" href="http://lettergenerator.net/alphabetletters/cursive/printable-letter-greatvibes-m.jpg">
	</head>


	<body>
    <?php
$id = $_SESSION['id'];

if (empty($id)){
    echo '<div id="nav">

    <ul>
        <li><a href="index.php"> inloggen</a></li>
        <li><a href="file:///C:/Users/8106785/Desktop/Website/M%C3%A9sunay.html"> Home</a></li>
        <li><a href="file:///C:/Users/8106785/Desktop/Website/Heren.html"> Heren</a></li>
        <li><a href="file:///C:/Users/8106785/Desktop/Website/Dames.html"> Dames</a></li>
        <li><a href="file:///C:/Users/8106785/Desktop/Website/M%C3%A9sunay.html#Wie zijn wij &#63;"> Wie zijn wij &#63;</a></li>
        <li><a href="file:///C:/Users/8106785/Desktop/Website/M%C3%A9sunay.html#Filialen"> Filialen</a></li>
        <li><a href="file:///C:/Users/8106785/Desktop/Website/Contactenopeningstijden.html"> Contact & Openingstijden</a></li>
    </ul>
    </div>';
    }else echo '<div id="nav">

    <ul>
        <li><a href="instellingen.php"> Instellingen</a></li>
        <li><a href="logout.php"> Uitloggen</a></li>
        <li><a href="file:///C:/Users/8106785/Desktop/Website/M%C3%A9sunay.html"> Home</a></li>
        <li><a href="file:///C:/Users/8106785/Desktop/Website/Heren.html"> Heren</a></li>
        <li><a href="file:///C:/Users/8106785/Desktop/Website/Dames.html"> Dames</a></li>
        <li><a href="file:///C:/Users/8106785/Desktop/Website/M%C3%A9sunay.html#Wie zijn wij &#63;"> Wie zijn wij &#63;</a></li>
        <li><a href="file:///C:/Users/8106785/Desktop/Website/M%C3%A9sunay.html#Filialen"> Filialen</a></li>
        <li><a href="file:///C:/Users/8106785/Desktop/Website/Contactenopeningstijden.html"> Contact & Openingstijden</a></li>
    </ul>
    </div>';
?>
			<img src="http://i0.wp.com/thisismdfs.com.webhosting102.transurl.nl/wp-content/uploads/2015/06/Aspact_1.jpg" alt="Header" id="banner">				
			 
				<br><br><br><br>
				<a name="Filialen"><h2>Filialen</h2></a>
				<br><br>
		
		<div class="winkel1"><a href="https://www.google.nl/maps/place/Kalverstraat+155,+1012+XB+Amsterdam/@52.3686572,4.889143,17z/data=!3m1!4b1!4m5!3m4!1s0x47c609c1b3ac8037:0x3c95898cc981ef92!8m2!3d52.3686539!4d4.8913317">  Amsterdam Kalverstraat 155</a></div>

		<div class="winkel2"><a href="https://www.google.nl/maps/place/Rembrandtweg+99,+1181+GE+Amstelveen/@52.3046777,4.8589789,17z/data=!3m1!4b1!4m5!3m4!1s0x47c60a7e2ff25c89:0x919b7e2bd443825!8m2!3d52.3046744!4d4.8611676">  Amstelveen Rembrandtweg 99</a></div>

		<div class="winkel3"><a href="https://www.google.nl/maps/place/Denneweg+Winkelstraat/@52.0854722,4.3099944,17z/data=!3m1!4b1!4m5!3m4!1s0x47c5b73bd24c86a9:0x7d382459dc493935!8m2!3d52.0854689!4d4.3121831">  Den Haag Denneweg 155</a></div>

		<div class="wiezijnwij">
		
			<a name="Wie zijn wij &#63;"><h1> Wie zijn wij &#63; </h1></a>

				<iframe class="video" src="https://www.youtube.com/embed/KE8fhKoRNbU" allowfullscreen></iframe>
				<p>   
					Mesunay staat bekend als een van de meest toonaangevende<br>
					schoenen speciaal zaken van Nederland.<br>
					Bij onze winkels staan klantvriendelijkheid en het bieden<br>
					van een goede service hoog in het vaandel.<br>
					Het assortiment van Mesunay bestaat <br>
					uit een grote diversiteit<br>
					van dames- en heren schoenen, tassen en accessoires <br>
					van internationale designers.<br> 
					Naast deze exclusieve merken heeft Mesunay <br>
					ook private labels.<br>
					Naast het runnen van de drie fysieke winkels in Amsterdam,<br>
					Amstelveen en Den Haag <br> 
					heeft Mesunay binnenkort ook de online winkel geopend.<br>
					Door het openen van de online winkel kunnen wij klanten<br>
					vanuit het hele land en buiten Europa <br>
					ook optimaal in hun behoefte voorzien.<br>
					Wij zijn u graag van dienst in een van onze winkels of<br>
					online!<br>
      					<br>Mesunay<br>
 					FASHION IN SHOES
				
				</p>
 

		</div>

		<h2>Klik hieronder op het hoofd van jouw gewenste collectie</h2>

		<img src="http://demandware.edgesuite.net/sits_pod14-adidas/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-IT-Library/it/dwe7b1593b/brand/images/2016/04/adidas-s-neo-ss16-q2-summer-wallpaper_89091.jpg" alt="Vrouw en een man" usemap="#Vrouwenman" id="vrouwman">

		<map name="Vrouwenman">

 		<area shape="rect" coords="350,0,600,300" href="file:///C:/Users/8106785/Desktop/Website/Dames.html" alt="Vrouw">
  		<area shape="rect" coords="600,0,900,300" href="file:///C:/Users/8106785/Desktop/Website/Heren.html" alt="Man">
		
		</map>

	</body>


</html>
