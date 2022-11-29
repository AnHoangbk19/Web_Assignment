CREATE DATABASE HOTEL_DB;
USE HOTEL_DB;


CREATE TABLE Booking(
    Email varchar(255) NOT NULL PRIMARY KEY,
    Name varchar(255) NOT NULL,
    Check_in varchar(255) NOT NULL,
    Check_out varchar(255) NOT NULL,
    Adult varchar(255) NOT NULL,
    Child varchar(255) NOT NULL,
    Room varchar(255) NOT NULL,
    Request varchar(255)
);
INSERT INTO Booking
VALUES ('abcxyz@gmail.com', 'VO TAN KIET', '11/29/2022 1:38 PM','11/29/2022 1:38 PM', 'Adult 1','Child 1','Room 1', 'YOLO');
INSERT INTO Booking
VALUES ('guest1@gmail.com', 'MIANMA ROCKET', '11/29/2022 1:38 PM','11/29/2022 1:38 PM', 'Adult 2','Child 2','Room 3', '');
INSERT INTO Booking
VALUES ('guestABC@gmail.com', 'SANTA', '11/29/2022 1:38 PM','11/29/2022 1:38 PM', 'Adult 2','Child 2','Room 3', 'HO HO HO');

CREATE TABLE `admin` (
	username varchar(30) PRIMARY KEY,
    `password` varchar(30) NOT NULL,
    fullname varchar(50) NOT NULL,
    phone varchar(10) UNIQUE,
    exp_year int NOT NULL
);
INSERT INTO admin
VALUES ('tringuyen', '123456', 'le tri nguyen', '0963676377', 2),
    ('admin1', '654321', 'le nguyen', '0355578787', 21),
    ('admin2', 'xzcxzc', 'le minh nguyen', '0123456789', 5),
    ('admin3', 'gfgfdg', 'le ha nguyen', '0998874562', 7);