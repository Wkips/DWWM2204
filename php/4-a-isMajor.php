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


?>