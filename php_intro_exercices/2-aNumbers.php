<?php
//Les fonctions de la série 2 doivent être implémentées dans le fichier « 02-numbers.php
echo 'Calcul addition :' .PHP_EOL;
echo 'saisir nombre 1 et nombre 2 '. PHP_EOL;
function getSum(int $nb1, int $nb2) : int
{
    return $nb1 + $nb2;
}

$nb1 = readline(" nombre  1 :");
$nb2 = readline(" nombre 2 :");
echo 'la somme de nombre 1 : '  . $nb1.  ' et nombre 2 :'.  $nb2 . ' est de ' . getSum($nb1, $nb2) . PHP_EOL;

//Créer une fonction « getSub() » qui accepte deux arguments de type int. Elle devra retourner la soustraction des deux valeurs
echo 'Calcul soustraction' . PHP_EOL;
echo 'saisir nombre 3 et nombre 4 ' . PHP_EOL;
function getSub(int $nb3, int $nb4) : int
{
    return $nb3 - $nb4;
}
$nb3 = readline("nombre 3 :");
$nb4 = readline("nombre 4 :");
echo 'la difference   de nombre 3 : '  . $nb3.  ' et nombre 4 :'.  $nb4 . ' est de ' . getSub($nb3, $nb4) . PHP_EOL;

//Créer une fonction getMulti() qui accepte deux arguments de type float. Elle devra retourner la multiplication des deux valeurs.
//Limitez le résultat à 2 décimales.
echo 'Calcul Multiplication' . PHP_EOL;
echo 'saisir nombre 5 et nombre 6 ' . PHP_EOL;
function getMulti(float $nb5, float $nb6) : float
{
    return number_format($nb5 * $nb6, 2);
}
$nb5 = readline("nombre 5 :");
$nb6= readline("nombre 6 :");

echo 'le produit de nombre 5 : '  . $nb5.  ' et nombre 6 :'.  $nb6 . ' est de ' . getMulti($nb5, $nb6) . PHP_EOL;

//Créer une fonction getDiv() qui accepte deux arguments de type int. Elle devra retourner la division des deux valeurs.
//Limitez le résultat à 2 décimales
echo 'Caclcul Division' .PHP_EOL;
echo 'saisir nombre 7 et nombre 8 ' . PHP_EOL;
function getDiv(int $nb7, int $nb8) : float
{

if ($nb8 == 0) 
{
    return 0;

}
else
{
    return number_format($nb7 / $nb8, 2);
    
}

}
$nb7 = readline("nombre 7 ");
$nb8= readline("nombre 8 ");
echo 'le quotient de nombre 7 : '  . $nb7.  ' et nombre 8 : '.  $nb8 . ' est de ' . getDiv($nb7, $nb8) . PHP_EOL;

?>

