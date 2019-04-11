CREATE DATABASE thai;

USE thai;

CREATE TABLE register(
    id int(8) PRIMARY KEY AUTO_INCREMENT,
    name varchar(32),
    mail varchar(32) UNIQUE,
    address varchar(32),
    pass varchar(32)
 );
 
 CREATE TABLE boka(
    id int(8) PRIMARY KEY AUTO_INCREMENT,
    name varchar(32),
    datum varchar(32),
    tid varchar(32),
    personer varchar(32)
 );