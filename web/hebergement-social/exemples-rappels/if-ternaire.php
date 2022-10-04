<?php 

// si le parametre 'page' dans l'url n'est pas vide
if(!empty($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

$page = !empty($_GET['page']) ? $_GET['page'] : 'home';

$page = $_GET['page'] ?? 'home';