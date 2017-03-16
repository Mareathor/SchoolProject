<?php
session_start();

include '../connectiedatabase.php';
$id = $_SESSION['id'];


$sql = "UPDATE mand
   SET mannen2 = !mannen2
 WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
header("Location: ../florian.php");