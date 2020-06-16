<?php
require 'include/php/dbh.php';

//Si pas connecté, pas de favoris !
if (empty($user)) {
  echo "<a class='btn btn-outline-secondary btn-sm' href='include/keolis-api/ajouter_favori.php?ref=" . $ref_id . "&ville=" . $ville . "' role='button'><i class='fa fa-star' aria-hidden='true'></i> Ajouter aux favoris</a>";
} else {
  //Connecté, est-ce que l'arrêt est dans les favoris ?
  $stmt = $connection->prepare('SELECT `ref` FROM `cot_favoris` WHERE `email`= ?');
  $stmt->bind_param("s", $user);
  $stmt->execute();

  $result = $stmt->get_result();

  $break = 0;
  while (($row = $result->fetch_array(MYSQLI_NUM)) && $break == 0) {
      if ($ref_id == $row[0]) {
        //Correspondance trouvée dans la base de données !
        $break = 1;
        echo "<a class='btn btn-outline-secondary btn-sm' href='include/keolis-api/supprimer_favori.php?ref=" . $ref_id . "&ville=" . $ville . "' role='button' style='color:#e74c3c;'><i class='fas fa-minus-circle' aria-hidden='true'></i> Supprimer des favoris</a>";
      }
    }

  //Si 0 correspondance
  if ($break == 0) {
    echo "<a class='btn btn-outline-secondary btn-sm' href='include/keolis-api/ajouter_favori.php?ref=" . $ref_id . "&ville=" . $ville . "' role='button'><i class='fa fa-star' aria-hidden='true'></i> Ajouter aux favoris</a>";
  }
}
