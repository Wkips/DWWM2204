<?php
//Les fonctions de la série 2 doivent être implémentées dans le fichier « 02-numbers.php

echo 'saisir nombre 1 et nombre 2 '. PHP_EOL;
function getSum(int $nb1, int $nb2) : int
{
    return $nb1 + $nb2;
}

$nb1 = readline("saisir nombre  1 ");
$nb2 = readline("saisir nombre 2 ");
echo 'la somme de nombre 1 : '  . $nb1.  ' et nombre 2 :'.  $nb2 . ' est de ' . getSum($nb1, $nb2) . PHP_EOL;

//Créer une fonction « getSub() » qui accepte deux arguments de type int. Elle devra retourner la soustraction des deux valeurs
echo 'saisir <nombre 3 et nombre 4 ' . PHP_EOL;
function getSub(int $nb3, int $nb4) : int
{
    return $nb3 - $nb4;
}
$nb3 = readline("saisir nombre 3 ");
$nb4 = readline("saisir nombre 4 ");
echo 'la difference   de nombre 3 : '  . $nb3.  ' et nombre 4 :'.  $nb4 . ' est de ' . getSub($nb3, $nb4) . PHP_EOL;

//Créer une fonction getMulti() qui accepte deux arguments de type float. Elle devra retourner la multiplication des deux valeurs.
//Limitez le résultat à 2 décimales.
echo 'saisir nombre 5 et nombre 6 ' . PHP_EOL;
function getMulti(float $nb5, float $nb6) : float
{
    return number_format($nb5 * $nb6, 2);
}
$nb5 = readline("saisir nombre 5 ");
$nb6= readline("saisir nombre 6 ");

echo 'le produit de nombre 5 : '  . $nb5.  ' et nombre 6 :'.  $nb6 . ' est de ' . getMulti($nb5, $nb6) . PHP_EOL;
?>;
