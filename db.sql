CREATE DATABASE thai;

USE thai;

CREATE TABLE register(
    id int(8) PRIMARY KEY AUTO_INCREMENT,
    name varchar(32),
    mail varchar(32) UNIQUE,
    address varchar(32),
    pass varchar(32)
 );