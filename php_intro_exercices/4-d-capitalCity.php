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