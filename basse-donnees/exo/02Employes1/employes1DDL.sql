
-- DDL : Data Definition Language (Langage de définition des données)
-- Permet de manipuler : TABLE, VIEW, TRIGGER, PROCEDURE

-- CREATE : créer une structure de données 
-- ALTER : Modifier une structure de donnes
-- DROP : Supprimer une structure de données

DROP TABLE IF EXISTS employees;

CREATE TABLE employees
(
	emp_id SERIAL PRIMARY KEY,
	emp_lastname VARCHAR (50),
	emp_firstname VARCHAR (50),
	emp_salary INT,
	emp_hiredate DATE,
	emp_manager_id INT,
	FOREIGN KEY (emp_manager_id)  REFERENCES employees (emp_id)
 );
