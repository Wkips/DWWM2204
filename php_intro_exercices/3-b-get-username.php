<?php
//Créer une fonction « getUerName() » qui accepte deux arguments (prénom et nom) de type string.
//Cette fonctsion doit retourner la concaténation des deux valeurs.
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