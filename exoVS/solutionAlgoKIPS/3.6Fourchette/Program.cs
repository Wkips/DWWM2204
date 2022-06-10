//    L’ordinateur « choisit » aléatoirement un nombre mystère (entier compris entre 0 et 100). 
//Le joueur essaie de le deviner. 

Random rnd = new Random();
int n = rnd.Next(0, 100);
int choix;
Console.WriteLine(n);

do
{

    Console.WriteLine("veuillez choisir un nombre entre 0 et 100 ");
    choix = int.Parse(Console.ReadLine());
    if (choix == n)
    {
        Console.WriteLine("vous avez gagné");
    }
    else
    {
        Console.WriteLine("try again");
    }
} while (choix !=n || n != -1);

    Console.WriteLine("fin de partie ");
        


