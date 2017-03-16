<?php
session_start();

include '../connectiedatabase.php';
$id = $_SESSION['id'];


$sql = "UPDATE favorieten
   SET mannen4 = !mannen4
 WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
header("Location: ../taylor.php");