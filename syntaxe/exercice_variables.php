<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice variable</title>
</head>
<body>
<?php

$vehicule = [
	'conducteur' => [
		'nom' => 'John',
		'prenom' => 'Doe',
		'permis' => ['B', 'A'],
	],
	'caracteristiques' => [
		'couleur' => 'rouge',
		'annee' => 2020,
		'puissance' => 4,
	],
	'finitions' => [
		'interieur' => [
			'type' => 'cuir',
			'couleur' => 'brun'
		],
		'exterieur' => [
			'attache_remorque' => true,
			'couleur' => 'rouge',
			'vitres' => 'teintées',
		],
	],
];


// À l'aide des commandes echo et print_r, affichez les caractéristiques suivantes du véhicule :

// - nom et prénom du conducteur

echo "Nom du conducteur : ".  $vehicule['conducteur']['nom'] . "<br>";
echo "Prénom du conducteur : ".  $vehicule['conducteur']['prenom'] . "<br>";


// - Tous les permis du conducteurs

echo 'Permis de conducteur : '.$vehicule['conducteur']['permis'][0].', '.$vehicule['conducteur']['permis'][1].'<br>';


// - type de finition intérieur

echo "Finition intérieur : ".$vehicule['finitions']['interieur']['type'] . "<br>";


// - couleur de finition extérieure

echo "Finition extérieure : ".$vehicule['finitions']['exterieur']['couleur'] . "<br>";

// - puissance et année du véhicule

echo "Puissance du véhicule : ". $vehicule['caracteristiques']['puissance'] . "<br>";
echo "Année du véhicule : ".  $vehicule['caracteristiques']['annee'] . "<br>";

?>
</body>
</html>