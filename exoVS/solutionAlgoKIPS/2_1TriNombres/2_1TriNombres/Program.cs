// See https://aka.ms/new-console-template for more information
//Exercice 2.1 : Tri de nombres 

//Lire 2 nombres entier A et B puis les afficher dans l’ordre croissant

int a;
int b;

Console.WriteLine("veuillez saisir le nombre a ");
a = int.Parse(Console.ReadLine());

Console.WriteLine("veuillez saisir le nombre b");
b = int.Parse(Console.ReadLine());

if (a > b) 
{

    Console.WriteLine(a + " est plus grand que " + b);
}
else 
{

    Console.WriteLine(b + " est plus grand que " + b);
}