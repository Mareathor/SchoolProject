<?php
session_start();

include '../connectiedatabase.php';
$id = $_SESSION['id'];


$sql = "UPDATE mand
   SET vrouwen5 = !vrouwen5
 WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
header("Location: ../nola.php");