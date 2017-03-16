<?php
session_start();

include '../connectiedatabase.php';
$id = $_SESSION['id'];


$sql = "UPDATE favorieten
   SET vrouwen3 = !vrouwen3
 WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
header("Location: ../emerson.php");