<?php 

$tableau =  array();
$tableau =  [];

$tableau[] = 'toto'; // 0
$tableau[] = 'Johnny'; // 1
$tableau[1] = 'Gatien'; // 1

$tableau['johnny'] = 'Stagiaire';

echo $tableau[1]; 
echo '<hr>';
echo $tableau['johnny'];

echo '<pre>'.var_export($tableau, true);