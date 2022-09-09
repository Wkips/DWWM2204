SELECT * FROM cities;
SELECT * FROM countries;

SELECT city_name FROM cities;

SELECT city_id, city_name FROM cities ORDER BY city_name ASC;


--3Sélectionner toutes les villes avec le nom du pays associé à chaque ville. Trier la liste par code pays et par ordre
--alphabétique inverse.
SELECT city_name, country_name FROM cities
LEFT JOIN countries
ON cities.country_code = countries.country_code;

--4 Sélectionner le code ISO et le nom de tous les pays avec le nombre de villes par pays. Les pays avec le moins de villes apparaissent en 1er.
SELECT 
countries.country_code, 
country_name,
COUNT(cities.*) 
FROM countries, cities 
WHERE countries.country_code = cities.country_code 
GROUP BY countries.country_code, country_name;

-- 5 Créer la requête SELECT correspondant au résultat suivant :

SELECT city_id, city_name, country_code ,
country_name, COUNT (cities.*) AS number_of_cities 
