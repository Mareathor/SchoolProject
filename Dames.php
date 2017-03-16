<?php
session_start();
?>
<!DOCTYPE html>

<html lang="nl">

	<head>
    
		<meta charset="UTF-8">
  
		<meta name="auteurs" content="Tolunay Oruc en Mees Kerssens">  
		<title>Mesunay Dames schoenen</title>
    
    
    
    
        
		<link rel="stylesheet" href="css/styledames.css">

   
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
	
		<img src="http://images.hugoboss.com/is/image/boss/S16SR_CTG_BW_062_sRGB-modified?$marketing_asset$&wid=960" alt="banner" id="banner">
		
		<br><br>
		<h1> Dames collectie</h1>
		<br><br>
		
			<a href= "H:\Website\Website\lolalita (2).html" class="schoen">
				<div class="hover"><p class="p-shoes">Lolalita <br> <br> &euro; 189,96</p></div>
			</a>
		
			<a href= "H:\Website\Website\alexis.html" class="schoen2">
				<div class="hover"><p class="p-shoes">Alexis <br> <br> &euro; 367,56</p></div>
			</a>

			<a href= "H:\Website\Website\emerson.html" class="schoen3"> 
				<div class="hover"><p class="p-shoes">Emerson <br> <br> &euro; 367,56</p></div>
			</a>
			
			<a href= "H:\Website\Website\kasey.html" class="schoen4">
				<div class="hover"><p class="p-shoes">Kasey <br> <br> &euro; 145,85</p></div>
			</a>

			<a href= "H:\Website\Website\Nola.html" class="schoen5">
				<div class="hover"><p class="p-shoes">Nola <br> <br> &euro; 256,73</p></div>
			</a>

			<a href= "H:\Website\Website\Valere.html" 
			class="schoen6">
				<div class="hover"><p class="p-shoes">Valere <br> <br> &euro; 195,94</p></div>
			</a>
			

	</body>


</html>
