CREATE DATABASE IF NOT EXISTS Cart2; 
USE Cart2;


CREATE TABLE IF NOT EXISTS Products (
  Id int(11) unsigned NOT NULL AUTO_INCREMENT,
  PName varchar(191) NOT NULL,
  Price double(10,2) unsigned NOT NULL,
  PRIMARY KEY (Id)
);

INSERT INTO Products(id,PName,Price) VALUES
	(1, "Hot Soup",250.00),
	(2, "Spaghetti",300.00);