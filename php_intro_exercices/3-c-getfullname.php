<?php
//Créer une fonction « getFullName() » acceptant deux arguments (nom et prénom) de type string.
//Cette fonction doit retourner la concaténation des deux valeurs avec un espace entre les 2, le prénom en minuscule et le nom
//en MAJUSCULE.
//Exemple :
//getFullName ('devoldère', 'mickaël'); // retourne « mickaël DEVOLDÈRE »

//Le changement de casse consiste à transformer une chaîne minuscule en majuscule ou inversement. 
//La conversion minuscule en majuscule se fait en PHP avec la fonction strtoupper() et l’inverse avec la fonction strtolower().


$name=readline('saisir votre nom');
$lastname=readline('saisir votre prenom');
function getFullName(string $name  ,  string $lastname)
{
    return $name . ' ' . $lastname;
}

echo 'je m apelle : '.getFullName($name=strtoupper($name)  , $lastname=strtolower($lastname));
?>