<?php
$position = intval(2);
$n = readline(" veuillez saisir un nombre entier");
$Resultat = ("0\n1");
$NbPrecedent =0 ;
$NbCourant = 1;
$Nbsuivant ;
{
if
    ( $n>2 )

    
    do while
    ( $position <$n ) 

    
    do 
    {
        $Nbsuivant= $NbPrecedent.$NbCourant;
        $Resultat=$Resultat\"n". $Nbsuivant;
        $NbPrecedent=$NbCourant;
        $NbCourant=$Nbsuivant;
        $position=$position+1;

    }
    else 
    {
        $n=2;
    }

    echo ('les ' . $n . 'premieres nombres de la suite de Fibonacci sont \n' . $Resultat);
}
 


?>