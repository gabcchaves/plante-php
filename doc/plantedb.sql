CREATE DATABASE IF NOT EXISTS plantedb;

USE plantedb;

CREATE TABLE IF NOT EXISTS users (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	password TEXT NOT NULL,
	phone VARCHAR(11) NOT NULL
);

CREATE TABLE IF NOT EXISTS plants (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	description TEXT NOT NULL,
	price DOUBLE NOT NULL,
	quantity INT NOT NULL
);

INSERT INTO plants (name, description, price, quantity)
VALUES ('Jasmim', 'Planta ornamental e medicinal.', 2.00, 10);
INSERT INTO plants (name, description, price, quantity)
VALUES ('Hibisco', 'Planta ornamental e medicinal.', 2.00, 10);
INSERT INTO plants (name, description, price, quantity)
VALUES ('Rosa do deserto', 'Planta ornamental.', 4.00, 10);
INSERT INTO plants (name, description, price, quantity)
VALUES ('Azaléia', 'Planta ornamental.', 2.00, 10);
