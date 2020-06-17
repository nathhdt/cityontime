<?php

require 'include/php/dbh.php';

$stmt = $connection->prepare('SELECT `arret` FROM `cot_divia_arrets`');
        $stmt->execute();

$result = $stmt->get_result();

$listearrets = '';

while ($row = $result->fetch_array(MYSQLI_NUM))
{
  $listearrets = $listearrets.$row[0].'", "';
}


echo substr($listearrets, 0, -4);

?>