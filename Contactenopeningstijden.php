<?php
session_start();
?>
<!DOCTYPE html>

<html lang="nl">

	<head>
    
		<meta charset="UTF-8">
  
		<meta name="auteurs" content="Tolunay Oruc en Mees Kerssens">  
		<title>Mesunay Contact & Openingstijden</title>
    
    
    
    
        
		<link rel="stylesheet" href="css/styleco.css">


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

			<img src="http://www.gstdubai.com/images/contact-Banner.png" alt="banner" id="banner">
			<br><br><br>
			<h2> Contact</h2>
		<dl class="dl">
			<dt> Telefoonnummer: </dt>
			<dd> 075573974 </dd>
			
			<dt> E-mail: </dt>
			<dd> Mesunay@hotmail.com </dd>
			
			<dt> Winkel: </dt>
			<dd> U kunt ook in een van onze filialen u vragen stellen als de winkels open zijn! <br>(Hier onderaan op de pagina bevinden zich de openingstijden.) </dd>
			
		</dl>
		<p> Voor spoedgevallen kunt u bellen of e-mailen naar:</p>
		<ol class="dl"> 
			<li> 0684736529 </li>
			<li> Mesunayspoed@hotmail.com </li>
		</ol>
		
		<h2> Openingstijden</h2>
		<table class="table">
			<tr>
				<td></td>
				<td> Maandag</td>
				<td> Dinsdag</td>
				<td> Woensdag</td>
				<td> Donderdag</td>
				<td> Vrijdag</td>
				<td> Zaterdag</td>
				<td> Zondag</td>
			</tr>
			<tr>
				<td> Vanaf</td> 
				<td> 9AM</td>
				<td> 9AM</td>
				<td> 11AM</td>
				<td> 9AM</td>
				<td> 9AM</td>
				<td> 11AM</td>
				<td> Gesloten</td>	
			</tr>
			<tr>
				<td> Tot en met</td> 
				<td> 6PM</td>
				<td> 6PM</td>
				<td> 6PM</td>
				<td> 6PM</td>
				<td> 8PM</td>
				<td> 5PM</td>
				<td> Gesloten</td>
			</tr>
		</table>

	</body>


</html>
