//Exercice 4.2 : Rechercher une lettre dans une phrase

//Soit une chaîne de caractères terminée par le caractère « . ».

//Donnez l’algorithme d’un programme qui compte le nombre d’occurrences d’une lettre donnée (“a” par exemple) dans cette chaîne.

//Si la chaîne de caractères est vide ou n’est composée que du caractère « . », le message “LA CHAINE EST VIDE” sera affiché.

//Proposez un jeu d’essai prévoyant les 3 cas suivants :

//    La phrase est vide
//    La lettre n’est pas présente
//    La lettre est présente une ou plusieurs fois

String phrase;
char lettre;
char[] tableau_phraase;
Console.WriteLine("saisir une phrase terminée par un point");
phrase  = Console.ReadLine();
if(phrase.EndsWith(".") && phrase.Length<=1 )
{
    Console.WriteLine("la phrase est vide");
}
else
{
    tableau_phraase = phrase.ToCharArray();
    Console.WriteLine("veuillez saisir un caractere");
    lettre = char.Parse(Console.ReadLine());
}

