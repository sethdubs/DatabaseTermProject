CREATE DATABASE BookSystem;

use BookSystem;

CREATE TABLE db_book
(
	BookID INT,
	Title VARCHAR(200),
	UnitPrice DECIMAL,
	Author VARCHAR(200),
	Quantity INT,
	SupplierID INT,
	SubjectID INT
);

INSERT INTO db_book (BookID, Title, UnitPrice, Author, Quantity, SupplierID, SubjectID) VALUES (1, 'book1', 12.34, 'author1', 5, 3, 1);
INSERT INTO db_book (BookID, Title, UnitPrice, Author, Quantity, SupplierID, SubjectID) VALUES (2, 'book2', 56.78, 'author2', 2, 3, 1);
INSERT INTO db_book (BookID, Title, UnitPrice, Author, Quantity, SupplierID, SubjectID) VALUES (3, 'book3', 90.12, 'author3', 10, 2, 1);
INSERT INTO db_book (BookID, Title, UnitPrice, Author, Quantity, SupplierID, SubjectID) VALUES (4, 'book4', 34.56, 'author4',12, 3, 2);
INSERT INTO db_book (BookID, Title, UnitPrice, Author, Quantity, SupplierID, SubjectID) VALUES (5, 'book5', 78.9, 'author5', 5, 2, 2);
INSERT INTO db_book (BookID, Title, UnitPrice, Author, Quantity, SupplierID, SubjectID) VALUES (6, 'book6', 12.34, 'author6', 30, 1, 3);
INSERT INTO db_book (BookID, Title, UnitPrice, Author, Quantity, SupplierID, SubjectID) VALUES (7, 'book7', 56.9, 'author7', 17, 3, 4);
INSERT INTO db_book (BookID, Title, UnitPrice, Author, Quantity, SupplierID, SubjectID) VALUES (8, 'book8', 33.44, 'author8', 2, 1, 3);



CREATE TABLE db_customer
(
	CustomerID INT,
	LastName VARCHAR(200),
	FirstName VARCHAR(200),
	Phone VARCHAR(200)
);

INSERT INTO db_customer(CustomerID, LastName, FirstName, Phone) VALUES(1, 'lastname1', 'firstname1', '334-001-001');
INSERT INTO db_customer(CustomerID, LastName, FirstName, Phone) VALUES(2, 'lastname2', 'firstname2', '334-002-002');
INSERT INTO db_customer(CustomerID, LastName, FirstName, Phone) VALUES(3, 'lastname3', 'firstname3', '334-003-003');
INSERT INTO db_customer(CustomerID, LastName, FirstName, Phone) VALUES(4, 'lastname4', 'firstname4', '334-004-004');

CREATE TABLE db_employee
(
	EmployeeID INT,
	LastName VARCHAR(200),
	FirstName VARCHAR(200)
);

INSERT INTO db_employee(EmployeeID, LastName, FirstName) VALUES(1, 'lastname5', 'firstname5');
INSERT INTO db_employee(EmployeeID, LastName, FirstName) VALUES(2, 'lastname6', 'firstname6');

CREATE TABLE db_order_detail
(
	BookID INT,
	OrderID INT,
	Quantity INT
);

INSERT INTO db_order_detail(BookID, OrderID, Quantity) VALUES(1, 1, 2);
INSERT INTO db_order_detail(BookID, OrderID, Quantity) VALUES(4, 1, 1);
INSERT INTO db_order_detail(BookID, OrderID, Quantity) VALUES(6, 2, 2);
INSERT INTO db_order_detail(BookID, OrderID, Quantity) VALUES(7, 2, 3);
INSERT INTO db_order_detail(BookID, OrderID, Quantity) VALUES(5, 3, 1);
INSERT INTO db_order_detail(BookID, OrderID, Quantity) VALUES(3, 4, 1);
INSERT INTO db_order_detail(BookID, OrderID, Quantity) VALUES(4, 4, 1);
INSERT INTO db_order_detail(BookID, OrderID, Quantity) VALUES(7, 4, 1);
INSERT INTO db_order_detail(BookID, OrderID, Quantity) VALUES(1, 5, 1);
INSERT INTO db_order_detail(BookID, OrderID, Quantity) VALUES(1, 6, 2);
INSERT INTO db_order_detail(BookID, OrderID, Quantity) VALUES(1, 7, 1);

CREATE TABLE db_order
(
	OrderID INT,
	CustomerID INT,
	EmployeeID INT, 
	OrderDate VARCHAR(10),
	ShippedDate VARCHAR(10),
	ShipperID INT
);

INSERT INTO db_order(OrderID, CustomerID, EmployeeID, OrderDate, ShippedDate, ShipperID) VALUES(1, 1, 1, '8/1/13', '8/3/14', 1);
INSERT INTO db_order(OrderID, CustomerID, EmployeeID, OrderDate, ShippedDate, ShipperID) VALUES(2, 1, 2, '8/4/13', NULL, NULL);
INSERT INTO db_order(OrderID, CustomerID, EmployeeID, OrderDate, ShippedDate, ShipperID) VALUES(3, 2, 1, '8/1/13', '8/4/14', 2);
INSERT INTO db_order(OrderID, CustomerID, EmployeeID, OrderDate, ShippedDate, ShipperID) VALUES(4, 4, 2, '8/4/13', '8/4/14', 1);
INSERT INTO db_order(OrderID, CustomerID, EmployeeID, OrderDate, ShippedDate, ShipperID) VALUES(5, 1, 1, '8/4/13', '8/5/14', 1);
INSERT INTO db_order(OrderID, CustomerID, EmployeeID, OrderDate, ShippedDate, ShipperID) VALUES(6, 4, 2, '8/4/13', '8/5/14', 1);
INSERT INTO db_order(OrderID, CustomerID, EmployeeID, OrderDate, ShippedDate, ShipperID) VALUES(7, 3, 1, '8/4/13', '8/4/14', 1);

CREATE TABLE db_shipper
(
	ShipperID INT,
	ShipperName VARCHAR(200)
);

INSERT INTO db_shipper(ShipperID, ShipperName) VALUES(1,'shipper1');
INSERT INTO db_shipper(ShipperID, ShipperName) VALUES(2,'shipper2');
INSERT INTO db_shipper(ShipperID, ShipperName) VALUES(3,'shipper3');

CREATE TABLE db_subject
(
	SubjectID INT,
	CategoryName VARCHAR(200)
);

INSERT INTO db_subject(SubjectID, CategoryName) VALUES(1, 'category1');
INSERT INTO db_subject(SubjectID, CategoryName) VALUES(2, 'category2');
INSERT INTO db_subject(SubjectID, CategoryName) VALUES(3, 'category3');
INSERT INTO db_subject(SubjectID, CategoryName) VALUES(4, 'category4');


CREATE TABLE db_supplier
(
	SupplierID INT,
	CompanyName VARCHAR(200),
	ContactLastName VARCHAR(200),
	ContactFirstName VARCHAR(200),
	Phone VARCHAR(10)
);

INSERT INTO db_supplier(SupplierID, CompanyName, ContactLastName, ContactFirstName, Phone) VALUES(1,'supplier1', 'company1', NULL, '1111111111');
INSERT INTO db_supplier(SupplierID, CompanyName, ContactLastName, ContactFirstName, Phone) VALUES(2,'supplier2', 'company2', NULL, '2222222222');
INSERT INTO db_supplier(SupplierID, CompanyName, ContactLastName, ContactFirstName, Phone) VALUES(3,'supplier3', 'company3', NULL, '3333333333');
INSERT INTO db_supplier(SupplierID, CompanyName, ContactLastName, ContactFirstName, Phone) VALUES(4,'supplier4', 'company4', NULL, '4444444444');

