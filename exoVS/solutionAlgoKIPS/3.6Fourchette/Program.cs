//    L’ordinateur « choisit » aléatoirement un nombre mystère (entier compris entre 0 et 100). 
//Le joueur essaie de le deviner. 

Random rnd = new Random();
int nb_essaie = 0;
int nombreMachine = rnd.Next(0, 100);
int choix;
int min =0;
int max =100;
Console.WriteLine(nombreMachine);

do
{

    Console.WriteLine("veuillez choisir un nombre entre " + min + " et " + max);
    choix = int.Parse(Console.ReadLine());
    nb_essaie++;
    if (choix == nombreMachine)
    {
        Console.WriteLine("vous avez gagné");
    }
    else
    {
        Console.WriteLine("try again");
        if (choix < nombreMachine)
        {
            min = choix;


        }
        else if (choix > nombreMachine)
        {
            max = choix;
        }


    }

    
} while (choix != nombreMachine);

Console.WriteLine("fin de partie vous avez trouvez en " +nb_essaie + " essaie");




