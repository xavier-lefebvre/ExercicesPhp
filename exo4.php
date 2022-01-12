<?php 
/*Comme le 3 mais avec une boulce for*/

/* Réécrire l'algorithme précédent, en utilisant cette fois l'instruction Pour (Si
ce n'est pas déjà le cas)*/

// Cet algo affiche les 10 nombres aprés celui entré par l'utilisateur
// variables = nb , valeur d'iteration;

/* Début
    Afficher("Entrer un nombre")
    Saisir("nb")
    Afficher("Les 10 nombres aprés celui entré")
*/

$demande = (int)readLine("Entrer un nombre : ");
for ($i = 1; $i <= 10; $i++) {
    echo $demande + $i . " ";
}

?>