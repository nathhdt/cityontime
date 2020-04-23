<?php
$servername = "localhost";
$dBUsername = "cityontime";
$dBPassword = "esirem999";
$dBName = "cityontime";

$connection = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
if (!$connection)
{
  die("Connection failed: ".mysqli_connect_error());
}
?>
