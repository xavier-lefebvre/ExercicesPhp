<?php 
/* Ecrire un algorithme qui demande successivement 20 nombres à
l’utilisateur, et qui lui dise ensuite quel était le plus grand parmi ces 20
nombres : Entrez le nombre numéro 1 : 12 Entrez le nombre numéro 2 : 14
etc. Entrez le nombre numéro 20 : 6 Le plus grand de ces nombres est : 14

Modifiez ensuite l’algorithme pour que le programme affiche de surcroît en
quelle position avait été saisie ce nombre : C’était le nombre numéro 2*/

$myArray = [];
$i = 0;
while($i < 5 ) {

    $demand = readLine("Entrer le nombre numéro " . ($i + 1) . " : ");
    array_push($myArray, $demand);
    $i++;

}


$hisPosition = array_search(max($myArray), $myArray);

echo "Le plus grand nombre est " . max($myArray) . "\r\n" . "C'était le nombre numéro " . ($hisPosition + 1) ;
?>

