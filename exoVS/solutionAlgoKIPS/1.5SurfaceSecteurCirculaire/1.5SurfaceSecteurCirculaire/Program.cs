// See https://aka.ms/new-console-template for more information
double rayonr;
double anglea;
double airesecteurcirculaire;

Console.WriteLine("saisir le rayon r");
rayonr = double.Parse(Console.ReadLine());

Console.WriteLine("saisir angle a ");
anglea = double.Parse(Console.ReadLine());

Console.WriteLine("l aire du secteur circulaire est ");
airesecteurcirculaire = (Math.PI * Math.Pow(rayonr, 2) * anglea / 360 );
Console.WriteLine(airesecteurcirculaire);
