<?php

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
