//Lire 2 nombres entier A et B puis afficher tous les nombres entiers dans l’intervalle. 

int a;
int b;
int i;


Console.WriteLine("Saisir le nombre a");
a= int.Parse(Console.ReadLine());
Console.WriteLine("Saisir le nombre b");
b= int.Parse(Console.ReadLine());

if (a < b)
{
    for (i = a; i < b; i++)
    {
        Console.WriteLine(i + " ");


    }

}
else if (b<a)
{
    for (i = b; i < a; i++)
    {
        Console.WriteLine(i + "");
    }

}
