INSERT INTO employees (emp_id,emp_manager_id,emp_lastname,emp_firstname,emp_salary,emp_hiredate)

VALUES 
(1,NULL, 'Holemes','Cathy',100000,'2010-01-09'),
(2,1,'Mannheim','Luc',87500,'2017-06-17'),
(3,2,'Kipré','Abdou',42800,'2017-10-09'),
(4,2,'Martin','Valérie',39500,'2018-03-30'),
(5,1,'Slezak','Daniel',75000,'2011-09-09'),
(6,5,'Bahl','Tarik',60000,'2014-04-08'),
(7,5,'Armanetti','Michaël',60000,'2014-05-06'),
(8,5,'Goldman','Estelle',55000,'2016-12-02'),
(9,5,'Durand','Gabriel',55000,'2016-12-02'),
(10,8,'Morel','Audrey',46500,'2012-07-01'),
(11,8,'Carpentier','Guillaume',58500,'2010-02-03'),
(12,9,'Lefebvre','Hugo',42000,'2015-10-11'),
(13,9,'Sharif','Sonia',54500,'2011-01-23'),
(14,15,'Fournier','Sabrina',42000,'2017-10-27'),
(15,5,'Bower','Sarah',49500,'2018-05-22'),
(16,8,'Dimario','Jordan',32500,'2019-06-30'),
(17,9,'Macdowel','Cindy',32500,'2019-11-04')
;


UPDATE employees
SET emp_manager_id = E1.emp_manager_id