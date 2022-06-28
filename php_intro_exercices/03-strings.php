<?php

//Créer une fonction « getMC2() ».
//Cette fonction doit retourner Le nom de l’inventeur de la formule « E = MC² 

echo 'Fonction getMC2'. PHP_EOL;
function getMC2() {
    return 'einstein';

}


//Créer une fonction « getUserName() » qui accepte deux arguments (prénom et nom) de type string.
//Cette fonction doit retourner la concaténation des deux valeurs.
//Exemple :
//getUserName ('mickaël', 'devoldère'); // retourne « mickaëldevoldère »
$name = readline("saisir votre nom :");
$lastname = readline("saisir votre prenom : ");


function getUserName(string $name, string $lastname)
{
    return $name . ' '. $lastname;
}


echo 'je m apelle : '.getUserName($name , $lastname);


?>