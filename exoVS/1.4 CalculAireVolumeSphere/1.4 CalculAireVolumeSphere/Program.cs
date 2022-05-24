// See https://aka.ms/new-console-template for more information
double rayonr;
double airea;
double volumev;
double aire;

Console.WriteLine("Veuillez entrez le rayon r");
rayonr = double.Parse(Console.ReadLine());

Console.WriteLine("l'aire a est de:");
aire= Math.Pow(rayonr, 2) * (Math.PI * 4);
Console.WriteLine(aire);


Console.WriteLine("le volume est de: ");
volumev = ((4 / 3 * Math.PI) * Math.Pow(rayonr, 3));
Console.WriteLine(volumev);  
