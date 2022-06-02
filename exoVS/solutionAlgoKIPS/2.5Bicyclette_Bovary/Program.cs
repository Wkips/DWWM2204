// See https://aka.ms/new-console-template for more information
string rep;


Console.WriteLine("fait il beau aujourd'hui ? oui/non");
rep = Console.ReadLine();
if (rep == "oui")
{
    Console.WriteLine("le velo fonctionne t'il ? oui/non");
    rep = Console.ReadLine();
    if (rep == "oui")
    {
        Console.WriteLine("Aller faire une balade a vélo.");
    }
    else if (rep == "non")
    {
        Console.WriteLine("Au garage, les réparations peuvent-elles être fait immediatement ? ");
        rep = Console.ReadLine();
        if (rep == "oui")
        {
            Console.WriteLine("Faites une balade à vélo");
        }
       
        else
        {
            Console.WriteLine("Avez-vous Game of throne?");
            rep = Console.ReadLine();
            if (rep == "oui")
            {
                Console.WriteLine("s'installer dans le fauteuil et commencer a lire");
            }
            else if (rep == "non")
            {
                Console.WriteLine("allez a la bibliotheque. Le livre GoT est il disponible?");
               rep = Console.ReadLine();
                if (rep == "oui")
                {
                    Console.WriteLine("rentrer a la maison et commencer a lire");
                }
                else if (rep == "non")
                {
                    Console.WriteLine("empruntez un livre policier rentrer a la maison et commencer a lire ");
                }
         
           
            }
        }


    }
    

    
}
else if (rep == "non")
{
Console.WriteLine("allez a pied cueuillir des joncs ");
}
else
{

}
Console.WriteLine("Fin du programme");