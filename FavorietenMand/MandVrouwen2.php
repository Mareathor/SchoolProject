<?php
session_start();

include '../connectiedatabase.php';
$id = $_SESSION['id'];


$sql = "UPDATE mand
   SET vrouwen2 = !vrouwen2
 WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
header("Location: ../alexis.php");