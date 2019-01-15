/* Users Table */
CREATE TABLE users (
	id SERIAL NOT NULL PRIMARY KEY,
	real_name VARCHAR NOT NULL, 
	email VARCHAR NOT NULL, 
	username VARCHAR NOT NULL UNIQUE, 
	password VARCHAR NOT NULL,
	address VARCHAR,
	dob date NOT NULL,
	tel VARCHAR,
	admin boolean NOT NULL
);

/* Categoty Table */
CREATE TABLE category (
  id SERIAL NOT NULL PRIMARY KEY,
  name VARCHAR NOT NULL UNIQUE
);

/* Product Table */
CREATE TABLE product (
	id SERIAL NOT NULL PRIMARY KEY,
	name VARCHAR NOT NULL,
	description VARCHAR NOT NULL,
	price NUMERIC(5,2) NOT NULL,
  cat_id INTEGER REFERENCES category NOT NULL,
	stock INTEGER NOT NULL
);

/* Orders Table*/
CREATE TABLE orders (
	id SERIAL NOT NULL PRIMARY KEY,
	order_date VARCHAR NOT NULL,
	username VARCHAR REFERENCES user(username) NOT NULL,
	address VARCHAR NOT NULL, 
	state_state VARCHAR NOT NULL	
);

/* Order line*/
CREATE TABLE order_line (
	order_id INTEGER REFERENCES order NOT NULL,
	product_id INTEGER REFERENCES  NOT NULL,	
	quantity INTEGER NOT NULL,
  PRIMARY KEY (order_id, product_id)
);

/* Comments */
CREATE TABLE comments(
	id SERIAL NOT NULL PRIMARY KEY,
	product_id INTEGER REFERENCES  NOT NULL,
	username VARCHAR REFERENCES user(username) NOT NULL
);

/* Address Table */
/*
CREATE TABLE address (
	id SERIAL NOT NULL PRIMARY KEY,
	username VARCHAR REFERENCES user(username) NOT NULL,
	street VARCHAR NOT NULL, 
	door VARCHAR NOT NULL, 
	city VARCHAR NOT NULL, 
	user_tel VARCHAR NOT NULL	
); */


INSERT INTO users (id, real_name, email, username, password, address, dob, tel, admin) 
VALUES (DEFAULT, 'admin', 'admin@gmail.com', 'admin', 'password', 'Rua do admin, nº1, Curral de Moinas', '1994-01-01', '+351912223344', 'TRUE');

INSERT INTO users (id, real_name, email, username, password, address, dob, tel, admin) 
VALUES (DEFAULT, 'user', 'user@gmail.com', 'user', 'password', 'Rua do user, nº2, Curral de Moinas', '1994-01-01', '+351913334455', 'FALSE');

INSERT INTO category (id, name)
VALUES (DEFAULT, 'Pratos de carne');

INSERT INTO category (id, name)
VALUES (DEFAULT, 'Pratos de peixe');

INSERT INTO  (id, name, description, price, cat_id, stock) 
VALUES (DEFAULT, 'Tiras de frango com cenas', 'Ótimas tiras de frango com cenas!', '5', '1', '100');

INSERT INTO  (id, name, description, price, cat_id, stock) 
VALUES (DEFAULT, 'Hambúrguer com cenas', 'Excelente hambúrguer, ótimas cenas!', '4', '1', '20');

INSERT INTO  (id, name, description, price, cat_id, stock) 
VALUES (DEFAULT, 'Massa à bolonhesa', 'Muito mais do que uma simples massa à bolonhesa!', '7', '1', '50');

INSERT INTO  (id, name, description, price, cat_id, stock) 
VALUES (DEFAULT, 'Pescada com legumes', 'Uma delícia!', '6', '2', '30');

