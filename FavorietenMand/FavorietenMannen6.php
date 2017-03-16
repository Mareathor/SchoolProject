<?php
session_start();

include '../connectiedatabase.php';
$id = $_SESSION['id'];


$sql = "UPDATE favorieten
   SET mannen6 = !mannen6
 WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
header("Location: ../quint.php");