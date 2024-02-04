<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbbase = "datamember";

$conn = mysqli_connect($servername, $username, $password, $dbbase);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



?>