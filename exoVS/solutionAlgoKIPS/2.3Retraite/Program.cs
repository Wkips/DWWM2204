// See https://aka.ms/new-console-template for more information



    /*    Lire un nombre A correspondant à un âge (en années). 

    Selon l’âge fourni, le programme doit afficher l’un des messages suivants:

        Vous êtes à la retraite depuis X années

        Il vous reste X années avant la retraite.

        C’est le moment de prendre sa retraite.

        La valeur fournie n’est pas un âge valide. */
int age;
int ageRetraite;
Console.WriteLine("saisir votre age");
age=int.Parse(Console.ReadLine());
ageRetraite = 60;

if (age >ageRetraite)
{
    Console.WriteLine("vous etes a la retraite depuis "+ (age - ageRetraite) + " années");


}
else if (age <ageRetraite)
{
    Console.WriteLine("vous serez a la retraite dans" + (ageRetraite - age) +" années");
}
else
{
    Console.WriteLine("il est temps de partir en retraite ");
}

