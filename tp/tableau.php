<?php

require_once '../config/configuration.php';

$tableau = [
    22 => [
        'nom' => 'Hash',
        'prenom' => 'Stéphane',
    ],
    19 => [
        'nom' => 'Dark',
        'prenom' => 'Vador',
    ],
    23 => [
        'nom' => 'Steve',
        'prenom' => 'Stéphanie',
    ],
    36 => [
        'nom' => 'Blanchard',
        'prenom' => 'Yvan',
    ],
    33 => [
        'nom' => 'Jésus',
        'prenom' => 'Edouard',
    ],
    18 => [
        'nom' => 'Bern',
        'prenom' => 'Fréderic',
    ],
];

echo _dump($tableau);

ksort($tableau);
echo _dump($tableau);
foreach ($tableau as $key => $value) {
    echo $value['nom'].' '.$value['prenom']. ' a '. $key. ' ans'.'<br>' ;
}

krsort($tableau);
echo _dump($tableau);
foreach ($tableau as $key => $value) {
    echo $value['nom'].' '.$value['prenom']. ' a '. $key. ' ans'.'<br>' ;
}

?>