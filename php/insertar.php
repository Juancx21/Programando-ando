<?php

include 'conexion.php';

$dip=$_POST['nom'];

$sql = "INSERT INTO dirip (ip) VALUES ('".$dip."')";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
}

?>