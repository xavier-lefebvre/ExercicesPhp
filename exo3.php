<?php 
/*Ecrire un algorithme qui demande un nombre de départ, et qui ensuite
affiche les dix nombres suivants. Par exemple, si l'utilisateur entre le
nombre 17, le programme affichera les nombres de 18 à 27.*/

$demande = (int)readLine("Entrer un nombre : ");
$i = 1;
while ($i <= 10)  {
    echo $demande + $i . " ";
    $i++;
}
?>