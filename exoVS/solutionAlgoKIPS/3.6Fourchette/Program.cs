//    L’ordinateur « choisit » aléatoirement un nombre mystère (entier compris entre 0 et 100). 
//Le joueur essaie de le deviner. 

Random rnd = new Random();
int nombreMachine = rnd.Next(0, 100);
int choix;
int min =0;
int max =100;
Console.WriteLine(n);

do
{

    Console.WriteLine("veuillez choisir un nombre entre " + min + " et " + max);
    choix = int.Parse(Console.ReadLine());
    if (choix == nombreMachine)
    {
        Console.WriteLine("vous avez gagné");
    }
    else
    {
        Console.WriteLine("try again");
        if (choix < nombreMachine)
        {
            (min == choix);


        }
        else if (choix > nombreMachine)
        {
            (max == choix);
        }

        else
        {
            Console.Writeline("votre choix est compris entre " + min + " et " + max);
        }

    } while (choix != nombreMachine && nombreMachine != -1) ;

    Console.WriteLine("fin de partie ");
}
        


