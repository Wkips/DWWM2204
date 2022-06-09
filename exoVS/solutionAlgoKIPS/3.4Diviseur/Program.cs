// See https://aka.ms/new-console-template for more information
//Lire un nombre entier et afficher tous ses diviseurs autres que 1 et lui-même. 
int a;
int i;

Console.WriteLine("saisir a ");
a= int.Parse(Console.ReadLine());
for (i = 1;i< a; i++)
{
    if (a%i == 0)
    {
        Console.WriteLine(i);
    }
}