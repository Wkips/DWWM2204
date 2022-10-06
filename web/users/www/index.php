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
        require '../Controller/HomeController.php';
        $controller = new \Users\Controller\HomeController();
        $controller->index();
    break;

    case 'profile':
        // charger ici le fichier profile.php
        require '../Controller/ProfileController.php';
        $controller = new \Users\Controller\ProfileController();
        $controller->index();
    break;

    case 'groups':
        require '../Controller/GroupController.php';
        $controller = new \Users\Controller\GroupController();
        $controller->index(); 
        break;
    default:
        echo 'Erreur 404';
    break;

}