<?php
$servername = "localhost";
$dBUsername = "cityontime";
$dBPassword = "esirem999";
$dBName = "cityontime";

$connection = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

$connection -> set_charset("utf8");

if (!$connection)
{
  die("Connection failed: ".mysqli_connect_error());
}
?>
