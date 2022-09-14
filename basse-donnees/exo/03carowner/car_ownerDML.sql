TRUNCATE TABLE brands RESTART IDENTITY CASCADE;
TRUNCATE TABLE owners RESTART IDENTITY CASCADE;
TRUNCATE TABLE cars RESTART IDENTITY CASCADE;
TRUNCATE TABLE cars_owners RESTART IDENTITY CASCADE;

INSERT INTO 
brands (brand_name)
VALUES 
('Audi'),
('AMC'),
('Chevrolet'),
('Peugeot'),
('Toyota');
 
SELECT * FROM brands;

INSERT INTO
owners (owner_id,owner_lastname,owner_firstname)
VALUES
(1,'Petit','Annie'),
(2,'Marsfall','Bénédicte'),
(3,'Doe','John'),
(4,'Bouchra','Amine'),
(5,'Jones','Steeven');


INSERT INTO
cars (car_id,car_name,brand_id)
VALUES
(12,'Chevelle Concours',3),
(16,'A6 Break',1),
(21,'Corolla',5),
(19,'Monte Carlo',3),
(27,'504',4),
(30,'Q8',1),
(28,'100 LS',1),
(23,'Hornet',2),
(26,'3008',4)
;

INSERT INTO 
cars_owners(car_id,car_registration,car_owner_id)
VALUES

(12,'AA-123-AA',1),
(16,'BB-274-BB',5),
(21,'CA-789-BA',2),
(19,'CC-546-FV',4),
(27,'CG-274-ZG',4),
(30,'ER-355-GX',3),
(28,'FV-313-FT',5),
(23,'DE-228-KS',5),
(26,'CF-614-PM',5)
