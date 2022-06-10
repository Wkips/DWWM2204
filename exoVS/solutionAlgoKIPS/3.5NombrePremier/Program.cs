//3.5 Nombre premier divisible par un et lui meme 
int nombre1;
string resultat ="est un nombre premier";
Console.WriteLine("saisir nombre 1");
nombre1 = int.Parse(Console.ReadLine());
for (int i = 2; i < nombre1; i++)

	{

    if (nombre1 % i == 0)
    {
       resultat= nombre1+ " ce n est pas un nombre premier";
    }



    }
Console.WriteLine(resultat);