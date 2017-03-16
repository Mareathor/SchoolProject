<?php
session_start();

include '../connectiedatabase.php';
$id = $_SESSION['id'];


$sql = "UPDATE favorieten
   SET vrouwen1 = !vrouwen1
 WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
header("Location: ../lolita.php");