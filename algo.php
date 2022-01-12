
// écrire un algo qui demande à l'user un nombre compris entre un et 3 jusqu'a ce que la réponse convienne  
<?php 
// for ($i=0; $i < 3; $i++) {
//     $line = readline("Commande : ");
//     readline_add_history($line);
// }
$demande = (int)readLine("Entrer un nombre :");
    if (demande < 3) {
        echo "Le nombre à entrer est plus grand";
        $demande;    
    } else if (demande === 3) {
        echo "Bravo vous avez deviner le nombre";
    }

?>
 


