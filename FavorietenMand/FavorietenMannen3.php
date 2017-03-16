<?php
session_start();

include '../connectiedatabase.php';
$id = $_SESSION['id'];


$sql = "UPDATE favorieten
   SET mannen3 = !mannen3
 WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
header("Location: ../kyle.php");