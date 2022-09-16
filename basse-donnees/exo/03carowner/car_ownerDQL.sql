SELECT * FROM owners

--1. Sélectionner le nom et le numéro d’immatriculation de toutes les voitures triées par immatriculation (ordre croissant).
SELECT car_name, car_registration
FROM cars
INNER JOIN cars_owners ON cars.car_id = cars_owners.car_id
ORDER BY car_registration ASC

--2. Sélectionner toutes les informations de toutes les voitures, incluant le nom de la marque ainsi que le nom et prénom du 
--propriétaire. Trier la liste par nom de marque (ordre croissant) puis par nom de propriétaire (ordre croissant
SELECT cars.* ,brand_name, owner_lastname, owner_firstname
FROM cars
NATURAL JOIN brands 
INNER JOIN cars_owners ON cars_owners.car_id = cars.car_id
INNER JOIN owners ON  owners.owner_id = cars_owners.car_owner_id
ORDER BY brand_name ASC , owner_lastname ASC;

--3. Sélectionner le nom de toutes les marques
--incluant le nombre de voitures de chaque marque.

SELECT brand_name,
COUNT (car_id)
FROM brands
NATURAL JOIN cars
GROUP BY brand_name
 
 
--4 Sélectionner le nom de toutes les marques incluant le nombre de propriétaires de chaque marque

SELECT brand_name,
COUNT (car_owner_id)FROM brands
NATURAL JOIN cars
NATURAL JOIN cars_owners
GROUP BY brand_name


-- 5
-- Sélectionner les prénoms des propriétaires dont le prénom commence par la lettre A

SELECT owner_firstname
FROM owners
WHERE owner_firstname LIKE 'A%';

--6Sélectionner le noms et prénom des propriétaires dont le prénom contient plus de 5 lettre
SELECT owner_firstname,owner_lastname 
FROM owners
GROUP BY owner_id
HAVING LENGTH(owner_firstname) >5

--LENGTH (owner_firstname) AS longueur

--WHERE LENGTH (owner) >5 (avant  GROUP BY)
--HAVING (apres GROUP  BY)