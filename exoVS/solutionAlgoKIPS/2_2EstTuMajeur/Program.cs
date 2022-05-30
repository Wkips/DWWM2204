// See https://aka.ms/new-console-template for more information
//Exercice 2.2 : Es-tu majeur ? 



//Lire un nombre A correspondant à un âge (en années). 

    //Afficher “Vous êtes majeur” ou “Vous êtes mineur” selon le cas. 

      //  Pour un nombre négatif le message doit être “Vous n’êtes pas encore né”. 

 

//La majorité est fixée à 18 ans

    Console.WriteLine("es tu majeur ?");
int age;
Console.WriteLine("saisir votre age");
age=int.Parse(Console.ReadLine());


if (age >= 18)
{
    Console.WriteLine("Vous etes majeur");
}
else if (age <0 )
{

    Console.WriteLine("vous etes encore encore pas né");
}
else 
{
    Console.WriteLine("vous etes mineur");
}
