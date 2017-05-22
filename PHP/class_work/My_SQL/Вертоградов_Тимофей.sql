--БАЗА ТОВАРЫ
--1. Выбрать товары по цене от 100 до 200

SELECT `Name`, `Price` FROM Products
WHERE Price > 100 AND Price < 200

--2. Выбрать среднюю цену товара у производителя с кодом 2

SELECT AVG(Price) FROM Products
WHERE Code = 2

--3. Посчитать количество товаров по цене выше 200.

SELECT count(code) FROM Products
WHERE Price > 200

--4. Для каждого товара выбрать название, цену, название производителя

SELECT Products.Name, Manufacturers.Name, `Price` FROM `Products`
INNER JOIN Manufacturers ON Products.Manufacturer = Manufacturers.Code;

--5. Показать по каждому производителю его имя и среднюю цену на его товары.

SELECT Manufacturers.Name, AVG(Products.Price) FROM Manufacturers
LEFT JOIN Products ON Manufacturers.Code = Products.Manufacturer
GROUP BY Manufacturers.Code

--6. Отобрать названия производителей, чья средняя цена на товар больше 150.

SELECT Manufacturers.Name, AVG(Products.Price) FROM Manufacturers
  LEFT JOIN Products ON Manufacturers.Code = Products.Manufacturer
GROUP BY Manufacturers.Code
HAVING AVG(Products.Price) > 150

--7. Вывести самый дешёвый товар и название его производителя.

SELECT Products.Price, Manufacturers.Name FROM Products
LEFT JOIN Manufacturers ON Products.Manufacturer = Manufacturers.Code
WHERE Products.Price = (SELECT MIN(Products.Price) FROM Products);

--8. По каждому производителю вывести самый дорогой его товар и его цену.

SELECT MAX(Price), Manufacturers.Name FROM Products
JOIN Manufacturers ON Products.Manufacturer = Manufacturers.Code
GROUP BY Manufacturers.Name
HAVING MAX(Price);

--9. Для всех товаров, чья цена превышает 200 - применить скидку 10% (уменьшить цену на 10%)

UPDATE `Products` SET Price = Price * 0.9
WHERE Price > 200;

--БАЗА СКЛАД
--1. Выбрать среднюю стоимость(value) контейнера(box) по каждому из складов

SELECT AVG(Value), Warehouses.`Location` FROM Boxes
LEFT JOIN Warehouses ON Boxes.Warehouse = Warehouses.Code
GROUP BY Warehouses.Code;

--2. Отобрать склады, где средняя стоимость контейнера больше 150.

SELECT AVG(Value) as avgV, Warehouses.`Location` FROM Boxes
LEFT JOIN Warehouses ON Boxes.Warehouse = Warehouses.Code
GROUP BY Warehouses.Location
HAVING avgV > 150;

--3. Вывести для каждого контейнера город(склад) где он находится.

SELECT Boxes.code, Warehouses.Location FROM Boxes
LEFT JOIN Warehouses ON Boxes.Warehouse = Warehouses.Code
;

--4. Вывести склады, которые уже "переполнены". Это значит, что кол-во контейнеров на этом складе больше, чем его вместимость(поле capacity в таблице warehouse)

SELECT Location, Capacity, COUNT(Boxes.Code) as currentValue FROM Warehouses
JOIN Boxes ON Warehouses.Code = Boxes.Warehouse
GROUP BY Warehouses.Code
HAVING Capacity < COUNT(Boxes.Code)

--5. Выбрать кода всех контейнеров из города Chicago

SELECT Boxes.code FROM Boxes
  LEFT JOIN Warehouses ON Boxes.Warehouse = Warehouses.Code
WHERE Location = 'Chicago'
;

--БАЗА СОТРУДНИКИ
--1. Выбрать всех сотрудников, чья фамилия начинается с S

SELECT * FROM Employees
WHERE LastName LIKE 'S%'

--2. Выбрать всех сотрудников из департаментов 37 и 77

SELECT * FROM `Employees`
WHERE `Department` = 37 OR `Department` = 77

--3. По каждому департаменту вывести его название и кол-во сотрудников в нём.

SELECT Departments.Name, COUNT(*) FROM Departments
LEFT JOIN Employees ON Departments.Code = Employees.Department
GROUP BY Employees.Department ;

--4. Вывести имена сотрудников, которые работают в департаменте с бюджетом более 60000

SELECT Employees.Name FROM Employees
LEFT JOIN Departments ON Employees.Department = Departments.Code
WHERE Departments.Budget > 60000

--5. Выбрать названия департаментов, где работает более 2-х сотрудников

SELECT Departments.Name FROM Departments
LEFT JOIN Employees ON Departments.Code = Employees.Department
GROUP BY Department
HAVING COUNT(*) > 2

--6. Вывести имена сотрудников, работающих в департаменте со ВТОРЫМ по величине бюджетом.

SELECT DISTINCT `Employees`.`Name`, `Departments`.`Budget`
FROM `Employees`
JOIN `Departments` ON `Departments`.`Code` = `Employees`.`Department`
WHERE `Departments`.`Budget` = (SELECT `Departments`.`Budget` FROM `Departments` ORDER BY `Departments`.`Budget` DESC LIMIT 1, 1)