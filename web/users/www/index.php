<?php
/** 
* DATA Source Name ( connetion string)
* @ DB Serv
*port si ce n estg pas le port par defaut
*DB name = nom db
* charset = jeux de charactere
*/
$dsn = 'host=localhost;port=3306;dbname=users2204;charset=utf8mb4';
$connexion = new PDO('$dsn','users2204','azer');