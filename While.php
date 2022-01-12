<?php


/*****************************************/
/********** Les boucles : While **********/
/*****************************************/
$nombreMouton = 1;
echo "1.Je vais compter les moutons pour dormir : <br>";
while ($nombreMouton <= 5) {
    echo $nombreMouton . " mouton(s) <br>";
    $nombreMouton++;
}
echo "Je dors enfin...<br><br>";

//-----------------------------------------
//Une autre façon d'utiliser la boucle while
$nombreMouton = 1;
$dormir = false;
echo "2.Je vais compter les moutons pour dormir : <br>";
while ($dormir === false) {
    echo $nombreMouton . " mouton(s) <br>";
    $nombreMouton++;
    if ($nombreMouton > 5) {
        $dormir = true;
    }
}
echo "Je dors enfin...<br><br>";


/**
 * Utililisez les deux exemples en haut pour compter 25 vaches.
 */


// TODO Votre code ici !

$nombreDeVache = 1;
echo "1.Je vais compter 25 vaches pour dormir : <br>";
while ($nombreDeVache <= 25) {
    echo $nombreDeVache . " vache(s) <br>";
    $nombreDeVache++;
}
echo "Je dors enfin...<br><br>";

$nombreVaches = 1;
$dodo = false;
echo "2.Je vais compter les vaches pour dormir : <br>";
while ($dodo === false) {
    echo $nombreVaches . " vache(s) <br>";
    $nombreVaches++;
    if ($nombreVaches > 25) {
        $dodo = true;
    }
}
echo "Je dors enfin...<br><br>";