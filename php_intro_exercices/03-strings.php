<?php
 
//3-a
//Créer une fonction « getMC2() ».
//Cette fonction doit retourner Le nom de l’inventeur de la formule « E = MC² 

//echo 'Fonction getMC2'. PHP_EOL;


//3-b
//Créer une fonction « getUserName() » qui accepte deux arguments (prénom et nom) de type string.
//Cette fonction doit retourner la concaténation des deux valeurs.
//Exemple :
//getUserName ('mickaël', 'devoldère'); // retourne « mickaëldevoldère »
//$name = readline("saisir votre nom :");
//$lastname = readline("saisir votre prenom : ");


function getMC2():string {
    return 'einstein';

}

function getUserName(string $name, string $lastname)
{
    return $name . ' '. $lastname . ' ';
}


//echo 'je m apelle : '.getUserName($name , $lastname);


//3c
//Créer une fonction « getFullName() » acceptant deux arguments (nom et prénom) de type string.
//Cette fonction doit retourner la concaténation des deux valeurs avec un espace entre les 2, le prénom en minuscule et le nom
//en MAJUSCULE.
//Exemple :
//getFullName ('devoldère', 'mickaël'); // retourne « mickaël DEVOLDÈRE »

//Le changement de casse consiste à transformer une chaîne minuscule en majuscule ou inversement. 
//La conversion minuscule en majuscule se fait en PHP avec la fonction strtoupper() et l’inverse avec la fonction strtolower().


$name=readline('saisir votre nom ').PHP_EOL;
$lastname=readline('saisir votre prenom ').PHP_EOL;
function getFullName(string $name  ,  string $lastname)
{
    return $name . ' ' . $lastname;
}

//echo 'je m apelle : '.getFullName($name=strtoupper($name)  , $lastname=strtolower($lastname));

//3d
//Créer une fonction « askUser() » acceptant deux arguments (nom et prénom) de type string.
//Cette fonction doit retourner une chaîne de caractères sous la forme :
//« Bonjour prénom, nom. Connaissez-vous Einstein ? »
//Cette fonction doit réutiliser les fonctions
//« getFullName() » pour obtenir la concaténation des deux valeurs.
// « getMC2() » pour obtenir le nom de l'inventeur de la formule E = MC².


function askUser(string $name  ,  string $lastname) : string
{
    return 'Bonjour '.getFullName($name, $lastname) . ' connaissez vous :' . getMC2() . '?';

}

echo 'bonjour ' . askUser($name , $lastname);
?>