//Exercice 4.1 : Rechercher un nombre dans un tableau

//Soit un tableau de nombres entier triés par ordre croissant.

//Exemple: [8, 16, 32, 64, 128, 256, 512]

//Chercher si un nombre donné N figure parmi les éléments.

//Si oui, afficher la valeur de l’indice correspondant. Sinon, afficher « Nombre non trouvé ».
int[] tabnombre = new int[7];
for (int i = 0; i < tabnombre.Length; i++)
{
    Console.WriteLine("veuillez entrer le nombre n°"+(i+1)+" du tableau:");
    tabnombre[i] =int.Parse(Console.ReadLine());



}

Console.WriteLine("merci votre tableau est bien remplie voici son contenu :");

foreach (int valeur in tabnombre)
{
    Console.Write(valeur + ",");
}
Console.ReadKey();