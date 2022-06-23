<?php
function helloWorld()
{
    echo "Hello World !". PHP_EOL;
}

helloWorld();


function hello(string $name) : string
{
return "Hello $name"  . PHP_EOL;
}
// test de la fonction (la fonction n'affiche rien. "echo" affichera la valeur retournée par la fonction)
echo hello("willy");

function Nobody(string $name) : string
{
    if($name == ''){ 

        return "nobody" . PHP_EOL;
    }
    else {
        return "Hello $name !" .PHP_EOL;
    }
    
}

$name = readline('Veuillez entrer votre prénom : ');
echo Nobody($name);


?>