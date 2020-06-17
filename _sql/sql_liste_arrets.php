<?php

//SETUP
$codeville = 217;

//#######################
// XML - LISTE DES LIGNES
//#######################

//Récupération de l'XML par l'API Keolis
$lignes = simplexml_load_file('http://timeo3.keolis.com/relais/'.$codeville.'.php?xml=1');

//Echo de l'heure d'exécution
echo '-- Script SQL CityOnTime<br>';
echo '-- Liste des arrêts ville '.$codeville.'<br>';
echo '-- Heure: '.$lignes->heure.'<br><br><br>';

//Liste des lignes & arrpets
$i = 0;
foreach($lignes->alss->als as $val)
{
    echo '<p>-- ### LIGNE '.str_replace("'", "''", $lignes->alss->als[$i]->ligne->nom).' > '.str_replace("'", "''", $lignes->alss->als[$i]->ligne->vers).'</p>';


    //XML arrêts
    $arrets = simplexml_load_file('http://timeo3.keolis.com/relais/'.$codeville.'.php?xml=1&ligne='.str_replace("'", "''", $lignes->alss->als[$i]->ligne->code).'&sens='.str_replace("'", "''", $lignes->alss->als[$i]->ligne->sens));

    //Parse des arrêts
    $j = 0;
    foreach($arrets->alss->als as $val)
    {

        echo 'INSERT INTO `cot_divia_arrets`(`ligne_nom`, `ligne_code`, `arret`, `arret_ref`, `direction`) VALUES (\''.str_replace("'", "''", $lignes->alss->als[$i]->ligne->nom).'\',\''.str_replace("'", "''", $lignes->alss->als[$i]->ligne->code).'\',\''.str_replace("'", "''", $arrets->alss->als[$j]->arret->nom).'\',\''.str_replace("'", "''", $arrets->alss->als[$j]->refs).'\',\''.str_replace("'", "''", $lignes->alss->als[$i]->ligne->vers).'\');<br>';
        $j++;
    }
    $i++;
    echo '<br>';
}
echo "<p>-- ### CORRECTIONS<p>";
echo "UPDATE `cot_divia_arrets` SET `arret`='Lycée H. Fontaine' WHERE `arret`='Lycée H.Fontaine';";
?>