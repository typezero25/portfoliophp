<?php

require_once '../config/configuration.php';
// array = clé $ commande
$commandes = [
    'clients' => [
        [
            'numero_commande' => 'Eg65jls7875',
            'informations' => [
                'nom' => 'Edouard',
                'prenom' => 'Steeve',
                'adresses' => [
                    'livraison' => [
                        'adresse' => '17 rue saint jacques',
                        'postal' => 12000,
                        'ville' => 'Rodez',
                    ],
                    'facturation' => [
                        'adresse' => '34 rue saint paul',
                        'postal' => 12000,
                        'ville' => 'Rodez',
                    ],
                ],
            ],
            'commentaires' => [
                [
                    'commentaire' => 'Client fidèle',
                ],
                [
                    'commentaire' => 'Ristourne a sa prochaine commande',
                ],
            ],
            'commande' => [
                'articles' => [
                    [
                        'article' => 'jean',
                        'size' => 'xxl',
                        'color' => 'green',
                    ],
                    [
                        'article' => 'tee-shirt',
                        'size' => 'xxl',
                        'color' => 'white',
                    ],
                    [
                        'article' => 'pull',
                        'size' => 'xxl',
                        'color' => 'white',
                    ],
                ],
            ],
        ],
        [
            'numero_commande' => 'E2546JHG521d',
            'informations' => [
                'nom' => 'Smit',
                'prenom' => 'Jean-Yves',
                'adresses' => [
                    'livraison' => [
                        'adresse' => '33 rue d\'endoume',
                        'postal' => 13007,
                        'ville' => 'Marseille',
                    ],
                    'facturation' => [
                        'adresse' => '10 rond point du prado',
                        'postal' => 13008,
                        'ville' => 'Marseille',
                    ],
                ],
            ],
            'commande' => [
                'articles' => [
                    [
                        'article' => 'chausette',
                        'size' => '38-42',
                        'color' => 'white',
                    ],
                    [
                        'article' => 'tee-shirt',
                        'size' => 'xl',
                        'color' => 'black',
                    ],
                    [
                        'article' => 'pull',
                        'size' => 'xl',
                        'color' => 'white',
                    ],
                ],
            ],
        ],
        [
            'numero_commande' => 'a12f41g5JH66',
            'informations' => [
                'nom' => 'Bernard',
                'prenom' => 'François',
                'adresses' => [
                    'livraison' => [
                        'adresse' => '33 rue de montpellier',
                        'postal' => 33000,
                        'ville' => 'Bordeaux',
                    ],
                    'facturation' => [
                        'adresse' => '33 rue de montpellier',
                        'postal' => 33000,
                        'ville' => 'Bordeaux',
                    ],
                ],
            ],
            'commande' => [
                'articles' => [
                    [
                        'article' => 'nappes en coton',
                        'size' => 'taille-unique',
                        'color' => 'white',
                    ],
                    [
                        'article' => 'set de 24 couverts',
                        'size' => 'taille-unique',
                        'color' => 'gris',
                    ],
                    [
                        'article' => 'lot de 6 chaises en bois',
                        'size' => 'taille-unique',
                        'color' => 'bois',
                    ],
                ],
            ],
        ],
    ],
];

echo _dump($commandes);
for ($i = 0; $i < count($commandes['clients']); ++$i) {
    echo '<h4>Client '.$i.'</h4>';
    echo 'Numéro commande : '.$commandes['clients'][$i]['numero_commande'].'<br>';
    echo '<br>'.'<strong>Informations :</strong>'.'<br>'.'Nom : '.$commandes['clients'][$i]['informations']['nom'].'<br>'.'Prénom : '.$commandes['clients'][$i]['informations']['prenom'].'<br>';
    echo 'Adresses :'.'<br>'. '- Livraison'.'<br>';
    echo 'Adresse : '.$commandes['clients'][$i]['informations']['adresses']['livraison']['adresse'].'<br>';
    echo 'Code postal : '.$commandes['clients'][$i]['informations']['adresses']['livraison']['postal'].'<br>';
    echo 'Ville : '.$commandes['clients'][$i]['informations']['adresses']['livraison']['ville'].'<br>';
    echo '<br>'.'<strong>- Facturation</strong>'.'<br>';
    echo 'Adresse : '.$commandes['clients'][$i]['informations']['adresses']['facturation']['adresse'].'<br>';
    echo 'Code postal : '.$commandes['clients'][$i]['informations']['adresses']['facturation']['postal'].'<br>';
    echo 'Ville : '.$commandes['clients'][$i]['informations']['adresses']['facturation']['ville'].'<br>';
    echo '<br>'.'<strong>Commentaires : </strong>'.'<br>';
    for ($c = 0; $c < count($commandes['clients'][$i]['commentaires']); ++$c){
        echo $commandes['clients'][$i]['commentaires'][$c]['commentaire'].'<br>';
        }
    echo '<br>'.'<strong>Commandes : </strong>'.'<br>'.'Articles'.'<br>';
    for ($a = 0; $a < count($commandes['clients'][$i]['commande']['articles']); ++$a){
        echo 'Article : '.$commandes['clients'][$i]['commande']['articles'][$a]['article'].'<br>';
        echo 'Taille : '.$commandes['clients'][$i]['commande']['articles'][$a]['size'].'<br>';
        echo 'Couleur : '.$commandes['clients'][$i]['commande']['articles'][$a]['color'].'<br>'.'<br>';   
        }
    

}
