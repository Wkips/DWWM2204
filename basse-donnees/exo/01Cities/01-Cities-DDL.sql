
-- DDL : Data Definition Language (Langage de définition des données)
-- Permet de manipuler : TABLE, VIEW, TRIGGER, PROCEDURE

-- CREATE : créer une structure de données 
-- ALTER : Modifier une structure de donnes
-- DROP : Supprimer une structure de données

DROP TABLE IF EXISTS cities;
DROP TABLE IF EXISTS countries;


CREATE TABLE countries
(country_code CHAR (2) PRIMARY KEY,
country_name VARCHAR(100));


CREATE TABLE cities
(city_id INT PRIMARY KEY,
city_name VARCHAR(255),
 country_code CHAR (2)NOT NULL,
 FOREIGN KEY (country_code) REFERENCES countries(country_code)
);


