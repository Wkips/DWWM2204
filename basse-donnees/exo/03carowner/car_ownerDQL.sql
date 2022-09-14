SELECT * FROM cars

--1. Sélectionner le nom et le numéro d’immatriculation de toutes les voitures triées par immatriculation (ordre croissant).
SELECT car_name, car_registration
FROM cars
INNER JOIN cars_owners ON cars.car_id = cars_owners.car_id
ORDER BY car_registration ASC

--2. Sélectionner toutes les informations de toutes les voitures, incluant le nom de la marque ainsi que le nom et prénom du 
--propriétaire. Trier la liste par nom de marque (ordre croissant) puis par nom de propriétaire (ordre croissant
SELECT cars.* ,brand_name, owner_lastname, owner_firstname
FROM cars
INNER JOIN brands ON cars.brand_id = brands.brand_id

INNER JOIN cars_owners ON cars_owners.car_id = cars.car_id

INNER JOIN owners ON cars_owners.owner_id = owners.owner_id
ORDER BY brand_name ASC , owner_lastname ASC;

--3. Sélectionner le nom de toutes les marques
--incluant le nombre de voitures de chaque marque.

SELECT brand_name
