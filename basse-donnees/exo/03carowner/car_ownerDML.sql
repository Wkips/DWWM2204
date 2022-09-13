
INSERT INTO 
brands (brand_name)
VALUES 
('Audi'),
('AMC'),
('Chevrolet'),
('Peugeot'),
('Toyota');
 




INSERT INTO
owners (owner_id,owner_lastname,owner_firstname)
VALUES
(1,'Petit','Annie'),
(2,'Marsfall','Bénédicte'),
(3,'Doe','John'),
(4,'Bouchra','Amine'),
(5,'Jones','Steeven');


INSERT INTO
cars (car_id,car_registration,car_name,brand_id,owner_id)
VALUES
(12,'AA-123-AA','Chevelle Concours',3,1),
(16,'BB-274-BB','A6 Break',1,5),
--DECALAGE 
(21,'CA-546','Monte Carlo',3,4),
(19,'CC-546-FV','504',4,4),
(27,'CG-274-ZG','Q8',1,3),
(30,'FV-313-FT',),
(28),
(23),
(26);
;