<?php
session_start();
?>
<!DOCTYPE html>

<html lang="nl">

	<head> 
    
		<meta charset="UTF-8">
  
		<meta name="auteurs" content="Tolunay Oruc en Mees Kerssens">  
		<title>Mesunay Heren schoenen</title>
    
    
    
    
        
		<link rel="stylesheet" type="text/css" href="css/styleheren.css">


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

		<img src="http://images.hugoboss.com/is/image/boss/S16SR_CTG_SPW_042_sRGB?$marketing_asset$&wid=960&cropN=0.3349609375,0.42987012987012987012987012987013,0.6650390625,0.45324675324675324675324675324675" alt="banner" id="banner">
		<br><br>
		<h1> Heren collectie</h1>
		<br><br>

			<a href="H:\Website\Website\Camdon.html" class="schoen">
				<div class="hover"><p class="p-shoes">Camdon <br> <br> &euro; 255,45</p></div>
			</a>

			<a href= "H:\Website\Website\Florian.html" class="schoen2">
				<div class="hover"><p class="p-shoes">Florian <br> <br> &euro; 169,56</p></div>
			</a>

			<a href= "H:\Website\Website\Kyle.html" class="schoen3">
				<div class="hover"><p class="p-shoes">Kyle<br> <br> &euro; 541,67</p></div>
			</a>

			<a href= "H:\Website\Website\Taylor.html" class="schoen4">
				<div class="hover"><p class="p-shoes">Taylor <br> <br> &euro; 339,23</p></div>
			</a>

			<a href= "H:\Website\Website\reagen.html" class="schoen5">
				<div class="hover"><p class="p-shoes">Reagen <br> <br> &euro; 299,63</p></div>
			</a>

			<a href= "H:\Website\Website\Quint.html" class="schoen6">
				<div class="hover"><p class="p-shoes">Quint <br> <br> &euro; 121,84</p></div>
			</a>
		
			

	</body>


</html>
