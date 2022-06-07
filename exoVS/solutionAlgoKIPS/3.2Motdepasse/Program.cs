// See https://aka.ms/new-console-template for more information
/*Exercice 3.2 : Contrôler la saisie avec limite 

L’utilisateur est invité à saisir un mot de passe. 

Si le mot de passe saisi est correct, le programme affiche “Vous êtes connecté”. 

Dans le cas contraire, l’utilisateur doit recommencer la saisie. 

L’utilisateur dispose de 3 essais maximum. 

Au 3ème échec, le programme affiche “Votre compte est bloqué” et se termine. 

Note : Le bon mot de passe est formation */

string pswd;
int nombreTentativeLouppee=0;
bool connecte= false;


do
{
    Console.WriteLine("veuillez saisir votre mot de passe ");
    pswd = Console.ReadLine();

    if (pswd == "formation")

    {
        Console.WriteLine("vous etes connecte");
        connecte = true;
    }
    else
    {
        nombreTentativeLouppee++;
    }
}
while (nombreTentativeLouppee < 3 && connecte==false); 

 if (nombreTentativeLouppee >=3)
    Console.WriteLine("Compte bloque"); 
