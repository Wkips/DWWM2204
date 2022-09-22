--DML
-- TRUNCATE TABLE ;
-- TRUNCATE TABLE ;
-- TRUNCATE TABLE ;
INSERT INTO Vegetables
(Id,Name,Variety,PrimaryColor,LifeTime,Fresh)

VALUES

(1,'apple','golden','green',90,0),
(2,'banana','cavendish','yelllow',10,0),
(3,'blueberries','bluecrop','green',8,0),
(4,'cabbage','broccoli','green',60,0),
(5,'carrot','De Colmar','orange',60,0),
(6,'cherry','moreau','darkred',20,0),
(7,'coconut','palmyre','brown',30,0),
(8,'grape','aladin','green',10,0),
(9,'kiwi','hayward','green',40,0),
(10,'lemon','eureka','green',30,0),
(11,'onion','Stuttgart','white',90,0);

INSERT INTO Sales
(SaleId,SaleDate,SaleWeight,SaleUnitPrice,SaleActive,Id)
VALUES
(1,'2022-09-22',2,2.5,1,1),
(2,'2022-09-22',2,2.5,1,1),
(3,'2022-09-22',4,3.95,1,7),
(4,'2022-08-30',1,1.25,0,11),
(5,'2022-07-15',6,1.95,0,8),
(6,'2022-09-10',5,2.45,1,9),
(7,'2022-06-02',2,1.49,0,4),
(8,'2022-01-25',8,3.15,1,10),
(9,'2022-04-28',3,3.99,0,2),
(10,'2022-02-04',1,1.25,1,11),
(11,'2022-05-05',9,1.59,1,5);