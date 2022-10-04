<?php 
// page : définir la page à afficher.

/*
$_GET[] = valeurs transmises par l'url
*/
echo '<pre>'.var_export($_GET, true). '</pre>';

// si le parametre 'page' dans l'url n'est pas vide
//$page = !empty($_GET['page']) ? $_GET['page'] : 'home';
$page = $_GET['page'] ?? 'home';


switch($page)
{
    case 'home':
        // charger ici le fichier home.php
        require '../View/home.php';
    break;
    case 'profile':
        // charger ici le fichier profile.php
        require '../View/profile.php';
    break;
    case 'groups':
        require '../Controllrt/GroupController.php';
        $controller = new GroupController();
        $controller->index(); 
        break;
    default:
        echo 'Erreur 404';
    break;
}