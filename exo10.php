
<?php
/* On veut demander a l'utilisateur de rentrer les horaires d'ouverture d'un magasin
On demande a l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert
+ On affiche le/les créneau/x d'ouverture
*/

// On demande a l'utilisateur de rentrer un créneaux
  // On demande l'heure de début
  // On demande l'heure de fin
  // On verifire que l'heure de fin > l'heure du debut
  // On demande si on veut rajouter un nouveaux creneaux (o/n)
 
// On demande a l'utilisateur de rentrer une heure
// On affiche l'état d'ouverture du magasin


$creneau = [];

while(true) {

$debut = (int)readLine("Entrer l'heure de début de votre créneau : ");
$fin = (int)readLine("Entrer l'heure de début de votre créneau : ");

array_push($creneau, $debut);
array_push($creneau, $fin);

if ($debut >= $fin) {
    echo "Votre requete est refusée. L'heure de début ($debut) est inférieure à l'heure de fin ($fin).";

} elseif ( $debut < $fin) {
    $reponse = readLine("Voulez modifiez votre créneau : o / n.");
    
    if($reponse === 'o') {

    } else {
        break;
    }
}

echo "Votre créneau : entre " . $creneau[0] . " heures et " . $creneau[1] . " heures.\r\n";
}

