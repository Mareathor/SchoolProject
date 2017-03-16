<?php

session_start();

#COnnectiedatabse.php toevoegen aan de dingen die hij kan gebruiken
include 'connectiedatabase.php';
include 'password.php';
#alle informatie krijgen van index.php
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select * FROM members where username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hashResult = $row['password'];
$hash = password_verify($password, $hashResult);
if ($hash == 0){
    header("Location: loginform.php?error=login");
    exit();
}else {


    $sql = "SELECT * FROM members WHERE username='$username' AND password ='$hashResult'";
    $result = mysqli_query($conn, $sql);

    if (!$row = mysqli_fetch_assoc($result)) {
        echo "Je gebruikersnaam of wachtwoord is incorrect";
    } else {
        $_SESSION['id'] = $row['id'];
    }

    $id = $_SESSION['id'];
    echo $id;

    $sql = "SELECT id FROM mand WHERE username ='$username'";
    $result = mysqli_query($conn, $sql);
    $idcheck = mysqli_num_rows($result);
    if ($idcheck > 0) {
        header("Location: loginform.php");
        exit();
    } else {
        $sql = "INSERT INTO `favorieten`(`id`, `mannen1`, `mannen2`, `mannen3`, `mannen4`, `mannen5`, `mannen6`, `vrouwen1`, `vrouwen2`, `vrouwen3`, `vrouwen4`, `vrouwen5`, `vrouwen6`) VALUES ('$id',false,false,false,false,false,false,false,false,false,false,false,false)";
        $result = mysqli_query($conn, $sql);

        $sql = "INSERT INTO `mand`(`id`, `mannen1`, `mannen2`, `mannen3`, `mannen4`, `mannen5`, `mannen6`, `vrouwen1`, `vrouwen2`, `vrouwen3`, `vrouwen4`, `vrouwen5`, `vrouwen6`) VALUES ('$id',false,false,false,false,false,false,false,false,false,false,false,false)";
        $result = mysqli_query($conn, $sql);
        header("Location: loginform.php?wow");
        echo $id;
    }
}



header("Location: loginform.php");



 /* login zonder hash
session_start();

#COnnectiedatabse.php toevoegen aan de dingen die hij kan gebruiken
include 'connectiedatabase.php';
#alle informatie krijgen van index.php
$username= $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM members WHERE username='$username' AND password ='$password'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
    echo "Je gebruikersnaam of wachtwoord is incorrect";
} else {
    $_SESSION['id'] = $row['id'];
}

$id = $_SESSION['id'];
echo $id;

$sql = "SELECT id FROM mand WHERE username ='$id'";
$result = mysqli_query($conn, $sql);
$idcheck = mysqli_num_rows($result);
if ($idcheck > 0) {
    header("Location: loginform.php");
    exit();
} else {
    $sql = "INSERT INTO `favorieten`(`id`, `mannen1`, `mannen2`, `mannen3`, `mannen4`, `mannen5`, `mannen6`, `vrouwen1`, `vrouwen2`, `vrouwen3`, `vrouwen4`, `vrouwen5`, `vrouwen6`) VALUES ('$id',false,false,false,false,false,false,false,false,false,false,false,false)";
    $result = mysqli_query($conn, $sql);

    $sql = "INSERT INTO `mand`(`id`, `mannen1`, `mannen2`, `mannen3`, `mannen4`, `mannen5`, `mannen6`, `vrouwen1`, `vrouwen2`, `vrouwen3`, `vrouwen4`, `vrouwen5`, `vrouwen6`) VALUES ('$id',false,false,false,false,false,false,false,false,false,false,false,false)";
    $result = mysqli_query($conn, $sql);
    header("Location: loginform.php?wow");
    echo $id;
}



header("Location: loginform.php");
*/