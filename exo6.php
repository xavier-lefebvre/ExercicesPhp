<?php
/*Ecrivez un algorithme calculant la somme des valeurs d’un
tableau (on suppose que le tableau a été préalablement saisi).*/
$myArray = [14, 2, 8];
$sum = 0;

for ($n = 0; $n <= count($myArray); $n++) {
    $sum += $myArray[$n];
}
echo "La somme des valeurs de votre tableau est " . $sum . ".";
?>
