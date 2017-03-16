<?php

session_start();

#COnnectiedatabse.php toevoegen aan de dingen die hij kan gebruiken
include 'connectiedatabase.php';
include 'password.php';
#alle informatie krijgen van loginform.php
$voornaam = $_POST['voornaam'];
$tussen = $_POST['tussen'];
$achternaam = $_POST['achternaam'];
$username= $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

 # checken of alles ingevuld is
if (empty($voornaam)){
    header("Location: loginform.php?error=empty");
    exit();
}
if (empty($achternaam)){
    header("Location: loginform.php?error=empty");
    exit();
}
if (empty($username)){
    header("Location: loginform.php?error=empty");
    exit();
}
if (empty($password)){
    header("Location: loginform.php?error=empty");
    exit();
}
if (empty($email)){
    header("Location: loginform.php?error=empty");
    exit();
}

else {

    #checkt of er al eentje bestaat met iets
    $sql = "SELECT username FROM members WHERE username ='$username' ";
    $result = mysqli_query($conn, $sql);
    $uncheck = mysqli_num_rows($result);
    if ($uncheck > 0) {
        header("Location: loginform.php?error=username");
        exit();
    }
        else {
            #checkt of er al eentje bestaat met iets
            $sql = "SELECT email FROM members WHERE username ='$email' ";
            $result = mysqli_query($conn, $sql);
            $emailcheck = mysqli_num_rows($result);
        }
            if ($emailcheck > 0) {
                header("Location: loginform.php?error=email");
                exit();
            }

            else {
                $hash = password_hash($password, PASSWORD_BCRYPT);
                #de query uitvoeren en terug brengen naar loginform.php
                $sql = "INSERT INTO members (username, email, password, voornaam, tussen, achternaam) VALUES ('$username','$email','$hash','$voornaam','$tussen','$achternaam')";
                $result = mysqli_query($conn, $sql);

                /* echo $username;
                sleep(1);

                $sql = 'SELECT id FROM members WHERE username = "$username" ';
                $result = mysqli_query ($conn, $sql);

                #$id = mysqli_fetch_row($result);


                while ($a = mysqli_fetch_assoc($result)) {
                    print_r ($a);
                }

                $id = (int) $a['id'];
                echo "<br>";
                echo "<br>";
                echo "<br>";

                $sql = "INSERT INTO `favorieten`(`id`, `mannen1`, `mannen2`, `mannen3`, `mannen4`, `mannen5`, `mannen6`, `vrouwen1`, `vrouwen2`, `vrouwen3`, `vrouwen4`, `vrouwen5`, `vrouwen6`) VALUES ('$id',false,false,false,false,false,false,false,false,false,false,false,false)";
                $result = mysqli_query($conn, $sql);

                $sql = "INSERT INTO `mand`(`id`, `mannen1`, `mannen2`, `mannen3`, `mannen4`, `mannen5`, `mannen6`, `vrouwen1`, `vrouwen2`, `vrouwen3`, `vrouwen4`, `vrouwen5`, `vrouwen6`) VALUES ('$id',false,false,false,false,false,false,false,false,false,false,false,false)";
                $result = mysqli_query($conn, $sql);*/
                header("Location: loginform.php?succes");
            }
}