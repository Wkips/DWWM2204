
DROP TABLE IF EXISTS cars;
DROP TABLE IF EXISTS brands;
DROP TABLE IF EXISTS owners;




CREATE TABLE brands
(brand_id SERIAL PRIMARY KEY ,
 brand_name VARCHAR (50) NOT NULL,
 brand_slogan VARCHAR (255)
);

CREATE TABLE owners
(
	owner_id INTEGER PRIMARY KEY,
 owner_lastname VARCHAR (50 ) NOT NULL,
 owner_firstname VARCHAR (50) NOT NULL
);

CREATE TABLE cars
(
	car_id SERIAL PRIMARY KEY,
 	car_registration CHAR(9) UNIQUE NOT NULL,
 	car_name VARCHAR(100) NOT NULL,
	brand_id INT NOT NULL,
	owner_id INT NOT NULL,
	FOREIGN KEY (brand_id) REFERENCES brands(brand_id),
	FOREIGN KEY (owner_id) REFERENCES owners(owner_id)
);