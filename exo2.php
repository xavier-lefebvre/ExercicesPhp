<?php
/*Ecrire un algorithme qui demande un nombre compris entre 10 et 20,
jusqu’à ce que la réponse convienne. En cas de réponse supérieure à 20,
on fera apparaître un message : « Plus petit ! », et inversement, « Plus
grand ! » si le nombre est inférieur à 10.*/

// algo : tant que nb != entre 10 et 20, redemande nb.


while ($demande <= 10 || $demande >= 20)  {
    $demande = (int)readLine("Entrer un nombre compris entre 10 et 20:");
    if($demande < 10) {
        echo "Plus grand";
    } else if ($demande > 20) {
        echo "Plus petit";
    }
}
echo "Bravo votre nombre convient ! ";
?>