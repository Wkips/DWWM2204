--1 
SELECT emp_lastname,emp_firstname,emp_salary FROM employees ORDER BY emp_hiredate ASC;

--2
SELECT emp_lastname,emp_firstname,emp_salary,emp_hiredate 
FROM employees 
ORDER BY emp_manager_id ASC, emp_lastname ASC ;
--3
SELECT E1.emp_lastname,E1.emp_firstname,E1.emp_salary,E1.emp_hiredate,manager.emp_lastname,manager.emp_firstname
FROM employees AS E1
Join employees AS manager ON manager.emp_id = E1.manager_id
ORDER BY manager.emp_lastname ASC, E1.emp_hiredate DESC ;

--4
SELECT *
FROM EMPLOYEES
WHERE emp_manager_id IS NULL;

--5

SELECT manager.emp_lastname, manager.emp_firstname , COUNT (E1.emp_id) AS nb_sub
FROM employees AS manager

--6 
SELECT 

	manager.emp_lastname,
	AVG (E1.emp_salary) AS acerage_salary
FROM employees as manager
JOIN employees AS E1 ON manager.emp_id = E1.emp_manager_id
GROUP BY manager.emp_id
ORDER BY avergage_salary DESC;


7--

SELECT
	manager.emp_id,
	manager.emp_lastname,
	manager.emp_firstname,
	manager.emp_salary,
,COUNT (E1.emp_id) AS nb_sub,
,SUM  (E1.emp_salary ) AS total_salary,
,AVG (E1,



