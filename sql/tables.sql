/* Create */
/* Users Table */
CREATE TABLE users (
	id SERIAL NOT NULL PRIMARY KEY,
	real_name VARCHAR(256) NOT NULL, 
	email VARCHAR(256) NOT NULL, 
	username VARCHAR(256) NOT NULL UNIQUE, 
	password VARCHAR(256) NOT NULL,
	address VARCHAR(256),
	dob date NOT NULL,
	tel VARCHAR(12),
	admin boolean NOT NULL
);

/* Product Table */
CREATE TABLE products (
	id SERIAL NOT NULL PRIMARY KEY,
	name VARCHAR(256) NOT NULL,
	description VARCHAR NOT NULL,
	price real NOT NULL,
	stock INTEGER NOT NULL
);

/* Orders Table*/
CREATE TABLE orders (
	id SERIAL NOT NULL PRIMARY KEY,
	order_date VARCHAR(50) NOT NULL,
	username VARCHAR(256) REFERENCES users(username) NOT NULL,
	address VARCHAR(256) NOT NULL, 
	state VARCHAR(256) NOT NULL	
);

/* Invoice Product*/
CREATE TABLE order_products (
	order_id INTEGER REFERENCES orders NOT NULL,
	product_id INTEGER REFERENCES products NOT NULL,	
	quantity INTEGER NOT NULL
);

/* Comments */
CREATE TABLE comments(
	id SERIAL NOT NULL PRIMARY KEY,
	product_id INTEGER REFERENCES products NOT NULL,
	username VARCHAR(256) REFERENCES users(username) NOT NULL
);

/* Address Table */
CREATE TABLE address (
	id SERIAL NOT NULL PRIMARY KEY,
	username VARCHAR(256) REFERENCES users(username) NOT NULL,
	street VARCHAR(256) NOT NULL, 
	door VARCHAR(256) NOT NULL, 
	city VARCHAR(256) NOT NULL, 
	user_tel VARCHAR(256) NOT NULL	
);

/* INSERT */
/* Users */
INSERT INTO siem_2018.users (user_first, user_last, user_email, product_stock) VALUES ('product', 'description', '1', '1');
/* Warehouse */
/* Add product */
INSERT INTO siem_2018.product (product_name, product_description, product_price, product_stock) VALUES ('product', 'description', '1', '1');

/* Orders list */
INSERT INTO siem_2018.orders (order_date, order_uid, order_address, order_state) VALUES ('2018-11-03', 'superlinhares', 'Travessa da Relva', 'Confirmada');
INSERT INTO siem_2018.orders (order_date, order_uid, order_address, order_state) VALUES ('2018-11-03', 'userlinhares', 'Travessa da Relva', 'Em processamento');