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
	quantity INT NOT NULL,
	category VARCHAR(30) NOT NULL,
	imagesource TEXT NOT NULL
);

INSERT INTO plants (name, description, price, quantity, category, imagesource)
VALUES ('Jasmim', 'Planta ornamental e medicinal.', 2.00, 10, 'flor', 'https://media.istockphoto.com/id/182862148/pt/foto/flores-de-jasmim.jpg?s=612x612&w=is&k=20&c=7no3vJBFkF-rvGKCCevPkayfcs6VbFzErSa1f-LVsSY=');
INSERT INTO plants (name, description, price, quantity, category, imagesource)
VALUES ('Hibisco', 'Planta ornamental e medicinal.', 2.00, 10, 'flor', 'https://media.istockphoto.com/id/1050715338/pt/foto/tree-with-big-red-flowers-hibiscus.jpg?s=612x612&w=is&k=20&c=j5ztC0ca-XPTw-t-aS3q_sVQAp-D--Y6eYryXFPEEP0=');
INSERT INTO plants (name, description, price, quantity, category, imagesource)
VALUES ('Rosa do deserto', 'Planta ornamental.', 4.00, 10, 'flor', 'https://media.istockphoto.com/id/1312775355/pt/foto/desert-rose-single-flower-plant-adenium-obesum-india.jpg?s=612x612&w=is&k=20&c=OxT8z4uZA2DYU_mqim6aYb1eaqJcdALg5gytyfK-xaA=');
INSERT INTO plants (name, description, price, quantity, category, imagesource)
VALUES ('Azaléia', 'Planta ornamental.', 2.00, 10, 'flor', 'https://media.istockphoto.com/id/92237879/pt/foto/desabrochando-az%C3%A1lea.jpg?s=612x612&w=is&k=20&c=GOxQnYvPDKibWzLwltJWG6g0c1vjl_sgYx-B48tgOiw=');
INSERT INTO plants (name, description, price, quantity, category, imagesource)
VALUES ('Cacto desconhecido', 'Planta ornamental.', 2.00, 10, 'cacto', 'https://media.istockphoto.com/id/912142406/pt/foto/cactus-small-plants.jpg?s=612x612&w=is&k=20&c=JalM7pqm1fmgp-mWmv91ZK00NNH4gKWdg2eJqQtL1xM=');
INSERT INTO plants (name, description, price, quantity, category, imagesource)
VALUES ('Coqueiro', 'Planta ornamental frutífera.', 2.00, 10, 'palmeira', 'https://media.istockphoto.com/id/1156117356/pt/foto/coconut-palm-trees-in-paiva-reserve-beach.jpg?s=612x612&w=is&k=20&c=p2GqqnL6oAEAvmWDMl70eOwfcepKwLHa9XGVN07PfYk=');
