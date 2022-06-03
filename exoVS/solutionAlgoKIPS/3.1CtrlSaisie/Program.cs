// See https://aka.ms/new-console-template for more information
/*L’utilisateur est invité à saisir son prénom.

Le programme affiche ensuite “Bonjour” suivi du prénom saisi.

Le prénom doit contenir au moins 2 caractères.

Si le prénom contient moins de 2 caractères, l’utilisateur doit recommencer la saisie.

L’utilisateur dispose d’un nombre d’essai illimité.*/

string prenom;
do
{
    Console.WriteLine("Veuillez saisir votre prenom");
    prenom = Console.ReadLine();
    if (prenom.Length < 2)
    {
        Console.WriteLine("saisir un prenom de deux lettres ");
        prenom = Console.ReadLine();
    }

}
while (prenom.Length < 2);



        Console.WriteLine("bonjour " + prenom);

