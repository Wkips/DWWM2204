//Barnabé fait ses courses dans plusieurs magasins.

//Dans chacun, il dépense 1 € de plus que la moitié de ce qu’il possédait en entrant.

//Dans le dernier magasin, il dépense le solde.

//Barnabé dépense au moins 1 € dans chaque magasin.

//Représenter l’algorithme permettant de trouver le nombre de magasins dans lesquels il a acheté.
double soldeDepart;
double soldeReste;
int compteur=0;
{
    Console.WriteLine("saisir solde de depart");
   soldeDepart= int.Parse(Console.ReadLine());
    soldeReste = soldeDepart;
    do
    {
        if (soldeReste > 2)
        {
            soldeReste = (soldeReste / 2) - 1;
            Console.WriteLine("il vous reste " + soldeReste.ToString("N2"));
            compteur++;
           
        }
        else
        {
            soldeReste = 0;
            Console.WriteLine("il vous reste " + soldeReste.ToString("N2")+" barnabe n'a plus d'argent il a visité " +compteur + " magasin");
        }
       
        
    }
    while (soldeReste > 0);

}
//ToString("Nx") = nombre de chiffre apres la virgule
