-- efface la table existante
DROP TABLE IF EXISTS peintres;
 
-- creer la table  "mis a jour" 
CREATE TABLE IF NOT EXISTS peintres
(
	id INT PRIMARY KEY,
	nom VARCHAR (100) NOT NULL,
	prenom VARCHAR (50) NULL DEFAULT 'TOto',
	date_de_naissance DATE NOT NULL,
	date_de_deces DATE NULL,
	total_oeuvres INT CHECK (total_oeuvres >= 0 ) NOT NULL DEFAULT 1,
	apreciation DECIMAL (3,2)
);


-- liste les colone 
INSERT INTO peintres
(id, nom, prenom, date_de_naissance,date_de_deces, total_oeuvres, apreciation)

-- insert/declare les données
VALUES
(1, 'M', 'Mustapha', '1980-05-07', NULL, 20, 4.2);

INSERT INTO peintres
(id, nom, date_de_naissance,total_oeuvres, apreciation)

-- insert/declare les données
VALUES
(2, 'Bastian', '1991-02-14', 1, 4.2);


