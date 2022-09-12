
-- DDL : Data Definition Language (Langage de définition des données)
-- Permet de manipuler : TABLE, VIEW, TRIGGER, PROCEDURE

-- CREATE : créer une structure de données 
-- ALTER : Modifier une structure de donnes
-- DROP : Supprimer une structure de données

DROP TABLE IF EXISTS employees;

CREATE TABLE employees
(
	emp_id SERIAL PRIMARY KEY,
	emp_lastname VARCHAR (50) NOT NULL,
	emp_firstname VARCHAR (50) NOT NULL,
	emp_salary INT NOT NULL,
	emp_hiredate DATE NOT NULL,
	emp_manager_id INT NULL,
	FOREIGN KEY (emp_manager_id)  REFERENCES employees (emp_id)
 );
 
 --Ajout des contraintes 
 
-- ALTER TABLE employees 
 	 --ADD PRIMARY KEY (emp_id),
	 --ADD COLUMN emp_manager_id IND NULL,
	-- ADD CONSTRAINT fk_employees_manager
 
