<?php
session_start();

include '../connectiedatabase.php';
$id = $_SESSION['id'];


$sql = "UPDATE mand
   SET vrouwen4 = !vrouwen4
 WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
header("Location: ../kasey.php");