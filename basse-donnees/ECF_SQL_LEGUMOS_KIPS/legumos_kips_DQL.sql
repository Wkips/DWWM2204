--DQL
--1 Selectionner toutes les informations des legumes tries par nom du legume Alphabetique
SELECT Id,Name,Variety,PrimaryColor,LifeTime,Fresh FROM Vegetables 
ORDER BY Name ASC;


--2 Selectionner le nom et le prix des legumes Pour chaques variete de legume afficher le nombres de ventes ainsi que le poids total vendu Legumes tries par nombres de ventes
SELECT Name,SaleUnitPrice,SaleActive FROM Vegetables

NATURAL JOIN Sales
GROUP BY SaleActive,SaleUnitPrice,Vegetables.Name
HAVING COUNT (SaleActive)= 1;



--A  revoir plus tard a la correction 
--SELECT Name,SaleUnitPrice,SaleActive FROM Vegetables
---NATURAL JOIN Sales
---WHERE (SaleActive = 1) 
--HAVING COUNT (SaleActive)
--GROUP BY SaleActive;
--SaleUnitPrice,Vegetables.Name
--HAVING COUNT (SaleActive);


--3
SELECT Id,Name,Variety,PrimaryColor,LifeTime,Fresh FROM Vegetables
WHERE (Name LIKE '%on%') OR (PrimaryColor LIKE 'green');


