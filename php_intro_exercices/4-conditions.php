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
$age=readline('saisir votre age ');
function getRetired(int $age) : string
{

     $ageRetraite = intval(60) ;

   
    if ($age>$ageRetraite)
    {
        return   ('vous etes à la retraite depuis  ' . ($age - $ageRetraite) . ('ans'));
    }

    else if (($age<$ageRetraite) && ($age>0))
    {
    return ('vous serez a la retraite dans ' . ($ageRetraite - $age) . ('ans'));
    }
    else if($age<$ageRetraite)
    {   return ('vous etes pas né ');

    }
    else 
    {
        return ("Vous etes à la retraite");
    }
    
    //4C getMax
    //Créer une fonction « getMax() » acceptant 3 arguments de type float.
//Cette fonction doit retourner la valeur du plus grand des 3 nombres. Limitez le résultat à 3 décimales
//Si au moins 2 des valeurs fournies sont égales la fonction retourne 0.
}
 echo getRetired($age);
?>