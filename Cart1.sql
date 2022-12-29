CREATE DATABASE IF NOT EXISTS Cart1; 
USE Cart1;


CREATE TABLE IF NOT EXISTS Products (
  Id int(11) unsigned NOT NULL AUTO_INCREMENT,
  PName varchar(191) NOT NULL,
  Price double(10,2) unsigned NOT NULL,
  PRIMARY KEY (Id)
);

INSERT INTO Products(id,PName,Price) VALUES
	(1, "Smoky Burger",200.00),
	(2, "Sandwich",150.00);