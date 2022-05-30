// See https://aka.ms/new-console-template for more information
int a;
int b;
int temp;
Console.WriteLine("saisir a ");
a = int.Parse(Console.ReadLine());

Console.WriteLine("saisir b");
b = int.Parse(Console.ReadLine());

temp = a;
a = b;
b = temp;
Console.WriteLine("a= "+a);
Console.WriteLine("b=" +b);