CREATE DATABASE folder;
USE folder;
CREATE TABLE firsts 
( 
id int NOT NULL AUTO_INCREMENT, 
name varchar(255) NOT NULL, 
lastname varchar(255) NOT NULL, 
phone int(11) NOT NULL, 
PRIMARY KEY (id) 
);
CREATE TABLE seconds 
( 
id int NOT NULL AUTO_INCREMENT, 
name varchar(255) NOT NULL, 
lastname varchar(255) NOT NULL, 
phone int(11) NOT NULL, 
first_id int(11) NOT NULL, 
PRIMARY KEY (id) 
);

INSERT INTO firsts SET name = 'Иван', lastname='Иванов', phone='111';
INSERT INTO firsts SET name = 'Петр', lastname='Петров', phone='222';
INSERT INTO firsts SET name = 'Сидор', lastname='Сидоров', phone='333';

INSERT INTO seconds SET name = 'Neve', lastname='Campbell', phone='111', first_id = '0';
INSERT INTO seconds SET name = 'Mia', lastname='Goth', phone='222', first_id = '0';
INSERT INTO seconds SET name = 'Lucy', lastname='Liu', phone='333', first_id = '0';
INSERT INTO seconds SET name = 'Gemma', lastname='Arterton', phone='444', first_id = '0';
INSERT INTO seconds SET name = 'Chloe', lastname='Moretz', phone='555', first_id = '0';
INSERT INTO seconds SET name = 'Taylor', lastname='Swift', phone='000', first_id = '0';


