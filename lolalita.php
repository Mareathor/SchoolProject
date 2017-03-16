<?php
session_start();
?>
<!DOCTYPE html>

<html lang="nl">

	<head>
    
		<meta charset="UTF-8">
  
		<meta name="auteurs" content="Tolunay Oruc en Mees Kerssens">  
		<title>Mesunay Dames schoenen</title>
    
    
    
    
        
		<link rel="stylesheet" href="css/schoenen.css">

   
		<link rel="icon" href="http://lettergenerator.net/alphabetletters/cursive/printable-letter-greatvibes-m.jpg">
 
    
    
  
	</head>

  
	<body>

    
		
		<?php
$id = $_SESSION['id'];

if (empty($id)){
    echo '<div id="nav">

    <ul>
        <li><a href="loginform.php"> inloggen</a></li>
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




		<br><br><br><br><br>
		<table cellpadding= 25>
		<tr>
		    <td/>
		    <td> <img src="lolalita.jpg" width= "400"> </img></td>
		    <td> <b><font size= "7"> Lolalita </font></b><br>&euro; 189,96<br> 
			<i><br> Een handgemaakte suede schoen met een vleugje western. 
			<br>Het leuke detail van een rijgsluiting aan de zijkant van de schoen geeft een unieke en vooral aparte look. </i>
			<br> <br> 
			Zool: Rubber 100% <br>
			Voering en binnenzool: Leer 100% <br>
			Bovenkant: Suede 100% <br>
			<font size= "4"> Art. nr. ID: 0462112001 </font>
		    </td>
		</tr>
		</table>



		
		<br>
		Samenstelling <br> 
		Zool: Rubber 100% <br>
		Voering en binnenzool: Leer 100% <br>
		Bovenkant: Su�de 100% <br>
		Art. nr. ID: 0462112001 

<br> <br> <br>

<h6>Je kunt een bestelling plaatsen als je minimaal 18 jaar oud bent en in Nederland woont, m.u.v. de BES eilanden. Bestellingen die contant of met iDEAL betaald worden,kunnen vanaf 16 jaar worden geplaatst. VERZENDING: Wij leveren op woonadressen en ophaalpunten. Standaardlevering binnen 2-3 dagen; verzendkosten � 4,99. Levering Volgende Dag voor bestellingen geplaatst voor 19.30 uur; verzendkosten � 6,99. Wij leveren op maandag t/m zaterdag, behalve op feestdagen. Tijdens piekperiodes en de Sale kan het iets langer duren en kan Levering Volgende Dag niet beschikbaar zijn. Kies de leveringsoptie die jou het beste uitkomt als je bij de kassa bent. BETALING: Wij accepteren creditcardbetalingen via MasterCard en Visa. Je kunt ook betalen door middel van iDEAL, Contante Betaling (bij aflevering), Factuur, Betaal Volgende Maand of Giftcard. Kies de betaaloptie die jou het beste uitkomt als je bij de kassa bent. RETOURNEREN/HERROEPEN: Je hebt altijd 30 dagen om te beslissen of je tevreden bent met je items; retourkosten � 0,99. Shoetique garandeert dat je voor alle geretourneerde artikelen je geld terugkrijgt, op voorwaarde dat de artikelen in aanvaardbare conditie worden geretourneerd. Al onze pakketten bevatten een retouradreslabel dat je kunt gebruiken om artikelen terug te sturen. Je kunt artikelen ook retourneren of ruilen in een Shoetique-winkel.  

</h6>		<br>
</p>
<?php
$id = $_SESSION['id'];
if (empty($id)){} else
    echo
    '
	<form action="FavorietenMand/FavorietenVrouwen1.php">
    <button> favorieten </button>
	</form>
	<br><br>
	<form action="FavorietenMand/MandVrouwen1.php">
    <button> in het mandje </button>
	</form>'
?>
	
	
	</body>


</html>
