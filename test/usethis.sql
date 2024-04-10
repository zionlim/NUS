CREATE DATABASE IF NOT EXISTS dg01;
USE dg01;


CREATE TABLE products (
    product_id int unsigned auto_increment primary key,
    product_name varchar(80),
    product_price float(4,2),
	img_url varchar(255)

);

CREATE TABLE orders (
    order_id int primary key,
    order_date date,
    status varchar(40)

);

CREATE TABLE orders_items (
    order_id int,
    product_name varchar(80),
    quantity int(10)

);

CREATE TABLE users (
    userid varchar(40),
	password varchar(40)

);

INSERT INTO dg01.products (product_id, product_name, product_price, img_url)
    VALUES (0, "Ravioli", 12, ""),
    (1, "Seafood Pasta", 24, ""),
    (2, "Pesto", 15, "");
	
INSERT INTO dg01.users(userid, password)
	VALUES('zion', 'zion');
	VALUES('zaw', 'zaw');