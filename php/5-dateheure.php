<?php
//EXERCICES 5.A
//Créer une fonction « getToday() ». Cette fonction doit afficher et retourner la date du jour au format d/m/Y sous forme de
//chaine de caractères (exemple : 21/10/2020).
//Aide et exemples :
//https://www.php.net/manual/fr/function.date.php
//https://www.php.net/manual/fr/datetime.format.php#refsect1-datetime.format-examples

function getToday () : string
{
 $datetoday = date("d/m/Y");
 echo 'la date du jour est : ' .  $datetoday .PHP_EOL;
return $datetoday;
}
 getToday()



 //XERCICE 5.B
//Créer une fonction « getTimeLeft() » acceptant un argument de type string et qui retourne une chaine de caractère.
//La valeur de l'argument représente une date au format Y-m-d (ex: 2020-11-23).
//La fonction doit vérifier si la date fournie est valide (bon format, date cohérente).
//Si la date est ultérieure à la date du jour, la fonction retourne la différence en années/mois/jours.
//Si la date est égale à la date du jour, la fonction retourne « Aujourd'hui ».
//Si la date est antérieur à la date du jour, la fonction retourne « Évènement passé ».
//Exemples :
//Pour les exemples suivants: DateDuJour = 2020-01-30 (30 Janvier 2020)
//getTimeLeft ("2019-09-29"); // retourne « Évènement passé »
//getTimeLeft ("2020-01-30"); // retourne « Aujourd'hui »
//getTimeLeft ("2020-02-15"); // retourne « Dans 16 jours »
//getTimeLeft ("2020-05-16"); // retourne « Dans 4 mois et 17 jours »
//getTimeLeft ("2021-05-30"); // retourne « Dans 1 an et 4 mois »
//getTimeLeft ("2022-10-17"); // retourne « Dans 2 ans et 9 mois »

function getTimeLeft(string $date) : string
{
    $date =  ("Y/m/d");
    return $date;
}


?>