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
}
    
//4C getMax
    //Cr�er une fonction � getMax() � acceptant 3 arguments de type float.
//Cette fonction doit retourner la valeur du plus grand des 3 nombres. Limitez le r�sultat � 3 d�cimales
//Si au moins 2 des valeurs fournies sont �gales la fonction retourne 0.
$nombreA = readline("sasir nombre a : ");
$nombreB = readline("sasir nombre b : ");
$nombreC = readline("sasir nombre c : ");
function getMax(float $nombreA, float $nombreB, float $nombreC) : float
{
    if ($nombreA==$nombreB || $nombreB==$nombreC || $nombreA==$nombreC)
    {
       return 0 ;
    }
    else 
    {
        if($nombreA>$nombreB && $nombreB>$nombreC)
        {
            return $nombreA;
        }      
        if( $nombreA>$nombreC && $nombreC>$nombreB)
        {  
            return $nombreA;
        }
        if( $nombreB>$nombreA && $nombreA>$nombreC)
        {       
            return $nombreB;
        }
        if($nombreB>$nombreC && $nombreC>$nombreA)
        {
            return $nombreB;
        }
        if($nombreC>$nombreA && $nombreA>$nombreB)
        {
            return $nombreC;
        }
        if($nombreC>$nombreB && $nombreB>$nombreA);
        {
            return $nombreC;
        }
    }
}
$resultat = number_format(getMax($nombreA, $nombreB, $nombreC), 3);
echo  'le nombre maximum est : ' .  $resultat;


<?php
//EXERCICE 4.D
//Créez une fonction « capitalCity() » qui accepte un argument de type string (le pays dont on cherche la capitale).
//Elle devra retourner le nom de la capitale des pays suivants 
//France => Paris
//Allemagne => Berlin
//Italie => Rome
//Maroc => Rabat
//Espagne => Madrid
//Portugal => Lisbonne
//Angleterre => Londres
//Si le pays ne fait pas partie de la liste ci-dessus, la fonction retourne la valeur « Capitale inconnue ».
//Note : Utilisez la structure SWITCH pour faire cet exercice */

function capitalCity(string $country) : string
{
    switch ($country)
    {
            case  'France':
                    return 'Paris';
            break;

            case 'Allemagne':
                    return 'Berlin';
            break;

            case  'italie':
                    return 'rome';
            break;

            case 'Maroc':
                    return 'Rabat';
            break;

            case  'Espagne':
                    return 'Madrid';
                break;
            case 'Portugal':
                    return 'Lisbonne';
                break;

            case 'angleterre';
                    return 'londres';
            break;
           
            default ;
            return 'ce n est pas dans la liste';
    
    
    }
}

$country = readline('saisir le nom d un pays ');
$result = capitalCity($country);

echo $result . PHP_EOL;

?>


?>