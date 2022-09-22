--DDL
-- Permet de manipuler : TABLE, VIEW, TRIGGER, PROCEDURE

-- CREATE : créer une structure de données 
-- ALTER : Modifier une structure de donnes
-- DROP : Supprimer une structure de données
DROP TABLE IF EXISTS Sales CASCADE;
DROP TABLE IF EXISTS Vegetables CASCADE;


CREATE TABLE Vegetables(
   Id INT PRIMARY KEY,
   Name VARCHAR(50) NOT NULL,
   Variety VARCHAR(50) NOT NULL,
   PrimaryColor VARCHAR(20) NOT NULL,
   LifeTime INT NOT NULL,
   Fresh INT NOT NULL DEFAULT 0);

CREATE TABLE Sales(
   SaleId INT PRIMARY KEY,
   SaleDate DATE NOT NULL,
   SaleWeight INT NOT NULL,
   SaleUnitPrice DECIMAL(5,2) NOT NULL,
   SaleActive INT NOT NULL,
   id INT NOT NULL,
   FOREIGN KEY(id) REFERENCES Vegetables(id)
);
