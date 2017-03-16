<?php
session_start();

include '../connectiedatabase.php';
$id = $_SESSION['id'];


$sql = "UPDATE favorieten
   SET mannen5 = !mannen5
 WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
header("Location: ../reagen.php");