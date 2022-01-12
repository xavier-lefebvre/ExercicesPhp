<?php 
/*Réécrire l’algorithme précédent, mais cette fois-ci on ne connaît pas
d’avance combien l’utilisateur souhaite saisir de nombres. La saisie des
nombres s’arrête lorsque l’utilisateur entre un zéro.*/

$myArray = [];
$demand = 1;
while($demand != 0) {
    $demand = readLine("Entrer un nombre : ");
    array_push($myArray, $demand);
}
echo "Le nombre le plus grand est " . max($myArray) . "\r\n";
?>