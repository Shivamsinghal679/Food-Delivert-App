CREATE DATABASE IF NOT EXISTS Cart3; 
USE Cart3;


CREATE TABLE IF NOT EXISTS Products (
  Id int(11) unsigned NOT NULL AUTO_INCREMENT,
  PName varchar(191) NOT NULL,
  Price double(10,2) unsigned NOT NULL,
  PRIMARY KEY (Id)
);

INSERT INTO Products(id,PName,Price) VALUES
	(1, "Sizzler",350.00),
	(2, "Thali",400.00);