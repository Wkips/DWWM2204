// See https://aka.ms/new-console-template for more information

// Lire 3 nombres entier A, B et C puis les afficher dans l’ordre décroissant.
int a;
int b;
int c;

Console.WriteLine("saisir le nombre a");
a = int.Parse(Console.ReadLine());

Console.WriteLine("saisir le nombre b");
b = int.Parse(Console.ReadLine());

Console.WriteLine("saisir le nombre c");
c = int.Parse(Console.ReadLine());

if (a < b && b < c)
{
    Console.WriteLine( c+""+ b+""+ a);
}


