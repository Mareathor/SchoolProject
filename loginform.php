<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/schoenen.css">
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
<form action="login.php" method="POST">
    <input type = "text" name="username" placeholder="gebruikersnaam"><br>
    <input type = "password" name="password" placeholder="wachtwoord"><br>
    <button type="submit">LOGIN</button>
</form>
<?php
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($url, 'error=login') !== false){
echo "wachtwoord of gebruikersnaam klopt niet";
}

if (isset($_SESSION['id'])) {
    echo 'je bent ingelogd';
}

?>

<br><br><br>



<form action="signup.php" method="POST">
    <input type = "text" name="voornaam" placeholder="voornaam"><br>
    <input type = "text" name="tussen" placeholder="tussen voegsel"><br>
    <input type = "text" name="achternaam" placeholder="achternaam"><br>
    <input type = "text" name="username" placeholder="gebruikersnaam"><br>
    <input type = "text" name="email" placeholder="email"><br>
    <input type = "password" name="password" placeholder="wachtwoord"><br>
    <button type="submit">SIGN UP!</button>
</form>
<br>

<?php

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($url, 'error=empty') !== false){
    echo "Niet alle velden zijn ingevuld (tussen voegsel hoeft niet)";
}

if (strpos($url, 'error=username') !== false){
    echo "username is al in gebruik";
}

if (strpos($url, 'error=email') !== false){
    echo "email is al in gebruik";
}

if (strpos($url, 'succes') !== false){
    echo "Account is aangemaakt";
}
?>

<br><br><br>
<form action="logout.php">

    <button> Log out </button>

</form>
<form action="FavorietenMand/FavorietenMannen1.php">

    <button> favorieten </button>

</form>
<form action="mand.php">

    <button> in het mandje </button>

</form>


<br>

<?php

if (isset($_SESSION['voornaam'])) {
    echo $_SESSION['voornaam'];
}

?>

<br>
<br>
<form method="get" action="favorieten.php">
    <button type="submit">favorieten</button>
</form>

</body>
</html>