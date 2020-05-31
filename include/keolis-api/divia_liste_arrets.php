<?php

require 'include/php/dbh.php';

$stmt = $connection->prepare('SELECT `ligne_nom`, `arret`, `direction` FROM `cot_divia_arrets`');
        $stmt->execute();

$result = $stmt->get_result();

$listearrets = '';

while ($row = $result->fetch_array(MYSQLI_NUM))
{
  $listearrets = $listearrets.$row[1].'", "';
}


echo substr($listearrets, 0, -4);

?>