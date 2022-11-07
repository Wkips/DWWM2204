<?php
/**
* Affiche "Hello World !"
*/
function helloWorld() : void
{
    echo "hello world" .PHP_EOL;
}




function hello (string $name) :string
{
    return "Hello $name";
}


//0 test de la fonction (la fonction affiche directement le résultat)
helloWorld();
echo hello('willy');
?>
