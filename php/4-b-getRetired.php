<?php

//4B
//Créer une fonction « getRetired() » acceptant un argument de type int. Elle devra retourner un string.
//Cette fonction permet de calculer le nombre d’années restant avant la retraite ou le nombre d’années depuis la retraite.
//Pour cet exercice, l’âge de la retraite est fixé à 60 ans
$age = readline('saisir votre age ');
function getRetired(int $age) : string
{

     $ageRetraite = intval(60) ;

   
    if ($age>$ageRetraite)
    {
        return   ('vous etes à la retraite depuis  ' . ($age - $ageRetraite) . ('ans'));
    }

    else if ($age<$ageRetraite)
    {
    return ('vous serez a la retraite dans ' . ($ageRetraite - $age) . ('ans'));
    }
    else {
        return ("Vous etes à la retraite");
    }


}
 echo getRetired($age);
?>