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

UPDATE people SET person_lastname='DEVOL' WHERE person_id=1;

INSERT INTO resident
(person_id,date_arrival,date_leave,person_id_docteur_id)
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
(11, 'Mustapha', 'M', '1990-06-11', 5),
(12, 'Toto', 'Titi', '1987-08-09', 5),
(13, 'Nezplein', 'Jean', '2004-02-23', 1),
(14, 'Nie', 'Joe', '2002-05-21', 1),
(15, 'Frost', 'Jack', '2000-12-21', 1),
(16, 'Mimi', 'Léa', '1999-08-28', 1),
(17, 'Paute', 'Jessica', '2001-04-11', 1),
(18, 'Martin', 'Michel', '2002-10-09', 1),
(19, 'Dupont', 'Louise', '2002-01-07', 1),
(20, 'Alouache', 'Al', '2002-07-14', 1),
(21, 'Hamblot', 'René', '2002-05-21', 1),
(22, 'LeTaxi', 'Joe', '2002-05-02', 1);
;

UPDATE people SET person_lastname='DEVOL' WHERE person_id=1;

INSERT INTO residents
(person_id, resident_date_arrival, resident_date_leave, resident_doctor_id) 
VALUES 
('13', '2022-08-05 09:02:05', NULL, NULL),
('14', '2022-08-05 10:14:00', NULL, 8),
('15', '2022-08-06 14:59:00', NULL, NULL),
('16', '2022-08-11 18:45:00', NULL, NULL),
('17', '2022-09-01 12:18:00', NULL, NULL),
('18', '2022-09-02 11:37:00', NULL, NULL),
('19', '2022-09-02 08:25:00', NULL, NULL),
('20', '2022-09-02 08:29:00', NULL, NULL),
('21', '2022-09-03 09:17:00', NULL, 7),
('22', '2022-09-03 15:15:00', NULL, 8);