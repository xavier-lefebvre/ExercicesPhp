<?php
 /*Ecrire un algorithme qui demande un nombre de départ, et qui ensuite
 écrit la table de multiplication de ce
 nombre, présentée comme suit (cas où l'utilisateur entre le nombre 7) :
 Table de 7 : 7 x 1 = 7 7 x 2 = 14 7 x 3 = 21 ... 7 x 10 = 70*/
$demande = (int)readLine("Entrer un nombre : ");
 
$i = 1;
 
echo "Table de " . $demande . "\r\n";
 
while ($i <= 10)  {
     echo $demande . " x " . $i . " = " . $demande * $i . "\r\n";
     $i++;
}
?>