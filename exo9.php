<?php
/* Lire la suite des prix (en euros entiers et terminée par zéro) des achats
d’un client. Calculer la somme qu’il doit, lire la somme qu’il paye, et
simuler la remise de la monnaie en affichant les textes "10 Euros", "5
Euros" et "1 Euro" autant de fois qu’il y a de coupures de chaque sorte à
rendre. */

function decompose($number) {
    $liquide = [" piece de 1 €", "billet de 5 €", "billet de 10 €"];
    $unites = $number % 10;
    $dizaines = (((($number - $unites) / 10) % 10) * 10);
    $centaines = ($number - ($dizaines + $unites ));
    
    // test 100th ! these tests are wrong.
    if ($number > 99) {
        if ($unites === 5) {
            echo (($centaines / 10) + ($dizaines / 10)) . " " . $liquide[2] . " et " . 1 . " " . $liquide[1] . ".\r\n";
        } else {
            if ($unites > 5) {
            echo (($centaines / 10) + ($dizaines / 10)) . " " . $liquide[2] . " , " . ($unites % 5) . " " . $liquide[1]. " et " . $unites . $liquide[0] . ".\r\n";
            } elseif ($unites < 5) {
                echo (($centaines / 10) + ($dizaines / 10)) . " " . $liquide[2] . " et " . $unites . $liquide[0];
            }
        }

    /* si nombre > 99 
        si unites === 5 / afficher n billet de 10 + n billet de 5
        sinon 
            si unites > 5 / afficher n billet de 10 + n billet de 5 + n pieces de 1
            sinonsi unites < 5 / afficher n billet de 10 + n pieces de 1 
    */    

    // test 10  
    } elseif ($number > 9 && $number < 100) {
        if ($unites === 5) {
            echo ($dizaines / 10) . " " . $liquide[2] . " et " . 1 . " " . $liquide[1] . ".\r\n";
        } else {
            if ($unites > 5) {
                echo ($dizaines / 10). " " . $liquide[2] . " , ". 1 . " " . $liquide[1] . " et " . ($unites % 5) . $liquide[0] . ".\r\n"; 
            } else {
                echo ($dizaines / 10). " " . $liquide[2] . " et " . $unites . $liquide[0];
            }
        }

    // test units
    } else  {
        if ($unites === 5) {
            echo 1 . " " . $liquide[1] . ".\r\n";
        } else {
            if ($unites > 5) {
                echo 1 . " " . $liquide[1] . " et " . ($unites % 5) . $liquide[0] . ".\r\n";
            } else {
                echo $unites . $liquide[0];
            }

        }
        
    }
    
} 

function rendLargent($facture, $paiement) {
    $rendu = ($paiement - array_sum($facture));
    $liquide = ["piece de 1 €", "billet de 5 €", "billet de 10 €"];
    
    if( array_sum($facture) > $paiement) {
        echo "Il manque " . (array_sum($facture) - $paiement) . " €.";

    } elseif ($paiement > array_sum($facture)) {
       
    echo "Le montant total de votre achat est de " . array_sum($facture) . "€. \r\n"
    . "Voici votre monnaie sur " . $paiement . " € : ";
    decompose($rendu);

    } elseif (array_sum($facture) === $paiement)
    echo "Le compte est bon ! \r\n";
}
rendLargent([10, 3, 1, 15, 11], 56);771000






