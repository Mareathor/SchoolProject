<?php
session_start();

include '../connectiedatabase.php';
$id = $_SESSION['id'];


$sql = "UPDATE mand
   SET vrouwen6 = !vrouwen6
 WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
header("Location: ../valere.php");