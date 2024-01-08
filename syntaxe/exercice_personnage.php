<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercice fiche de personnage</title>

<!-- ////////////////////////// Description de l'exercice //////////////////////// -->

<!-- Vous devez creer une page web présentant les caractéristiques d'un personnage imaginaire,
	issu d'un jeu de role.

	Les informations du personnage seront enregistrees dans des variables.

	On y trouvera :

	- Une image d'avatar
	- Le nom (dans une variable)
	- Le prénom (dans une variable)
	- Un tableau de caractéristiques (dans une variable, on utilisera un tableau associatif) -->

<!-- ////////////////////////// Style de la carte Simone Veil //////////////////////// -->

<style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #3BD99E;
        }

		
		p {
			align: left;
		}

        #avatar {
			width: 750px;
			height: 461px;
        }

        #caracteristiques {
            margin-top: 20px;
            border-collapse: collapse;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
			border-radius: 15px;
        }

        #caracteristiques th, #caracteristiques td {
            border: 1px solid #ddd;
			background:#f0f0f0;
            padding: 8px;
            text-align: left;
        }

        #caracteristiques th {
            background-color: #f2f2f2;
        }

    </style>
</head>

<body>

<h1>Simone Veil</h1>

<!-- ////////////////////////// Déclaration des variables //////////////////////// -->

	<?php
	//  Tableau identitaire 
	$avatarImage = "img\image.jpg";
    $nom = "Veil";
    $prenom = "Simone";

    //  Tableau des Caractéristiques
	$caracteristiques = array(
        "Carrière politique" => 70,
        "Engagement humanitaire" => 90,
        "Reconnaissance internationale" => 80,
        "Feminisme" => 100
	)
    ?>

<!-- ////////////////////////// Affichage de l'Avatar - Heroine  //////////////////////// -->

<img src="<?php echo $avatarImage; ?>" alt="Simone Veil" id="avatar">

<p>Nom: <?php echo $nom; ?></p>
<p>Prénom: <?php echo $prenom; ?></p>

<table id="caracteristiques">
	<tr>
		<th>Caractéristique</th>
		<th>Valeur</th>
	</tr>

	<?php

	// Affichage des caractéristiques dans le tableau
	foreach ($caracteristiques as $cle => $valeur) {
		echo 
		"<tr>
			<td>$cle</td>
			<td>$valeur</td>
		</tr>";
	}

	?>
</table>

</body>

</html>