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

	
	<br><br><br><br>
		<table cellpadding= 25>
		<tr>
		    <td/>
		    <td> <img src="Kasey.jpg" width= "400"> </img></td>
		    <td> <b><font size= "7"> Kasey </font></b><br>&euro; 145,85<br> 
			<i><br> Kasey is onze grote trots.<br>
			Deze schoen is ontworpen door onze makers in samenwerking met Kasier en bestemd voor de zakenvrouw.<br>
			Grijs suede straalt kracht uit en is dus voor de echte powervrouw.  </i>
			<br> <br> 
			Zool: Rubber 100% <br>
			Voering en binnenzool: Leer 100% <br>
			Bovenkant: Suede 100% <br>
			<b><font size= "-2"> Art. nr. ID: 0462112001 </font></b>
		    </td>
		</tr>
		</table>

<br> <br> <br>
							<?php
$id = $_SESSION['id'];
if (empty($id)){} else
    echo
    '<form action="FavorietenMand/FavorietenVrouwen4.php">
    <button> favorieten </button>
	</form>
	<br><br>
	<form action="FavorietenMand/MandVrouwen4.php">
    <button> in het mandje </button>
	</form>';
?>

	</body>


</html>
