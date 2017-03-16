<HTML>
<head>
    <meta charset="UTF-8">

    <meta name="auteurs" content="Tolunay Oruc en Mees Kerssens">
    <link rel="stylesheet" href="css/schoenen.css">
    <link rel="icon" href="http://lettergenerator.net/alphabetletters/cursive/printable-letter-greatvibes-m.jpg">
</head>
<body>
<?php
session_start();
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

include 'connectiedatabase.php';
$id = $_SESSION['id'];


$sql = "SELECT * FROM favorieten where id = '$id'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
    echo $row['mannen1'];
}
echo '<br>';
echo $row['mannen2'];

if ($row['mannen1'] = true){
    echo "hier je html instoppen";
}
echo '<br>';
if ($row['mannen2'] = true){
    echo "hier je html instoppen";
}
echo '<br>';
if ($row['mannen3'] = true){
    echo "hier je html instoppen";
}
echo '<br>';
if ($row['mannen4'] = true){
    echo "hier je html instoppen";
}
echo '<br>';
if ($row['mannen5'] = true){
    echo "hier je html instoppen";
}
echo '<br>';
if ($row['mannen6'] = true){
    echo "hier je html instoppen";
}
echo '<br>';
if ($row['vrouwen1'] = true){
    echo "hier je html instoppen";
}
echo '<br>';
if ($row['vrouwen2'] = true){
    echo "hier je html instoppen";
}
echo '<br>';
if ($row['vrouwen3'] = true){
    echo "hier je html instoppen";
}
echo '<br>';
if ($row['vrouwen4'] = true){
    echo "hier je html instoppen";
}
echo '<br>';
if ($row['vrouwen5'] = true){
    echo "hier je html instoppen";
}
echo '<br>';
if ($row['vrouwen6'] = true){
    echo "hier je html instoppen";
}
echo '<br>';
?>
