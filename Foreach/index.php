<?php

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
    array(
        'nom' => 'Independance day',
        'date' => 1996,
        'realisateur' => 'Roland Emmerich',
        'acteurs' => array(
            'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
        ),
    ),
    array(
        'nom' => 'Bienvenue a Gattaca',
        'date' => 1998,
        'realisateur' => 'Andrew Niccol',
        'acteurs' => array(
            'Ethan Hawke', 'Uma Thurman', 'Jude Law',
        ),
    ),
    array(
        'nom' => 'Forrest Gump',
        'date' => 1994,
        'realisateur' => 'Robert Zemeckis',
        'acteurs' => array(
            'Tom Hanks', 'Gary Sinise',
        ),
    ),
    array(
        'nom' => '12 hommes en colere',
        'date' => 1957,
        'realisateur' => 'Sidney Lumet',
        'acteurs' => array(
            'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
        ),
    ),
);

echo '12.Mes films : <br>';
//ajoutez votre code ici
foreach ($videotheque as $premierEtage) {
    foreach ($premierEtage as $value => $info) {
        if ($value === 'acteurs'){
            echo "Acteurs ". implode(", ", $info);
        }
        else {
            echo $value. "," . $info. "<br>";
        }
    }
}

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';
//ajoutez votre code ici
$maVideotheque = array(
    array(
        'nom' => 'Le Seigneur des Anneaux',
        'date' => 2001,
        'realisateur' => 'Peter Jackson',
        'synopsis' => 'ça ne compte que pour un !',
        'acteurs' => array(
            "Elijah Wood", "Sean Astin", "Viggo Mortensen",
        ),
    ),
    array(
        'nom' => 'Kaamelott Premier Volet',
        'date' => 2020,
        'realisateur' => 'Alexandre Astier',
        'synopsis' => "C'est pas faux",
        'acteurs' => array(
            'Alexandre Astier', 'Lionel Astier', 'Franck Pitiot',
        ),
    ),
    array(
        'nom' => 'Docteur Strange',
        'date' => 2016,
        'realisateur' => 'Scott Derrickson',
        'synopsis' => "C'est un gars qui joue les intermédiaires entre le monde réel et ce qui se trouve au-delà et qui pète tout sur son passage.",
        'acteurs' => array(
            "Benedict Cumberbatch", "Chiwetel Ejiofor", "Tilda Swinton",
        ),
    ),
);
foreach ($maVideotheque as $premierEtage) {
    foreach ($premierEtage as $value => $info) {
        if ($value === 'acteurs'){
            echo "Acteurs ". implode(", ", $info);
        }
        else {
            echo $value. "," . $info. "<br>";
        }
    }
}