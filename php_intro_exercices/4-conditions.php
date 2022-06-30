<?php
//Créer une fonction « isMajor() » acceptant un argument de type int. Elle devra retourner un booléen.
//Si l’âge est supérieur ou égal à 18, elle doit retourner true. Sinon elle doit retourner false.

$age=readline('saisir votre age ');
function isMajor($age) : bool
{ 
if ($age >=18)
{
return true;
}
else
{
    return false;
}
}
echo isMajor($age);


//4B
//Créer une fonction « getRetired() » acceptant un argument de type int. Elle devra retourner un string.
//Cette fonction permet de calculer le nombre d’années restant avant la retraite ou le nombre d’années depuis la retraite.
//Pour cet exercice, l’âge de la retraite est fixé à 60 ans

?>