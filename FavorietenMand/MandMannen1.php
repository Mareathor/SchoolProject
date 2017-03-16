<?php
session_start();

include '../connectiedatabase.php';
$id = $_SESSION['id'];


$sql = "UPDATE mand
   SET mannen1 = !mannen1
 WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
header("Location: ../camdon.php");