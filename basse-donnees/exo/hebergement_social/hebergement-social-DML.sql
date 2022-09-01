INSERT INTO roles
(role_id, role_name) 
VALUES 
(1, 'directeur'),
(2, 'gardien'),
(3, 'cuisinier'),
(4, 'technicien'),
(5, 'éducateur'),
(6, 'médecin'),
(7, 'résident');


INSERT INTO people 
(person_id, person_firstname, person_lastname, person_birthdate, person_hiredate, person_active, person_role_id)
VALUES 
(1, 'Mike', 'DEV', '1980-02-23', '2017-08-27', true, 1),
(2, 'Toto', 'Dubizou', '1963-12-17', NULL, true, 3),
(3, 'Paul', 'TATA','1984-11-08 ', '2014-04-21', true, 4),
(4, 'Jean', 'DUPON', '1969-02-18', '2018-02-24', true, 2),
(5, 'Luc', 'Skywalker', '1977-05-25', '2019-08-30', true,2),
(6, 'Gerard','ROG', '1980-02-15', '2012-03-14', true,6),
(7,'Sarah','SOU', '1977-11-19', '1999-07-12', true,6),
(8,'Nikki','SIXX', '1958-12-11', '1971-03-14', true,6),
(9,'Tommy','LEE', '1962-10-03', '1975-11-20', true,5),
(10,'Mick','Mars', '1951-05-04', '1985-12-14', true,5),
(11,'Vince','Neil', '1980-02-15', '1983-03-02', true,5),
(12,'Rick','MORTY', '1984-10-20', '2001-09-01', true,5);