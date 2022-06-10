//diviseur 3.4 

int nombre1;
int i;

Console.WriteLine("veuillez saisir le nombre 1");
nombre1 = int.Parse(Console.ReadLine());
for (i = 1; i < nombre1; i++)
{

	if (nombre1 % i == 0)
	{
		Console.WriteLine(i);
	}
}