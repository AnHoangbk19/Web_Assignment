CREATE DATABASE HOTEL_DB;
USE HOTEL_DB;

-- Create Booking Table 
CREATE TABLE Booking(
    IdBooking INT NOT NULL PRIMARY KEY,
    Email varchar(255) NOT NULL,
    Name varchar(255) NOT NULL,
    Check_in varchar(255) NOT NULL,
    Check_out varchar(255) NOT NULL,
    Adult varchar(255) NOT NULL,
    Child varchar(255) NOT NULL,
    Room varchar(255) NOT NULL,
    Request varchar(255)
);

-- insert value
INSERT INTO Booking
VALUES ('1', 'abcxyz@gmail.com', 'VO TAN KIET', '11/29/2022 1:38 PM','11/29/2022 1:38 PM', '1','1','Room 1', 'YOLO');
INSERT INTO Booking
VALUES ('2', 'guest1@gmail.com', 'MIANMA ROCKET', '11/29/2022 1:38 PM','11/29/2022 1:38 PM', '2','2','Room 3', '');
INSERT INTO Booking
VALUES ('3', 'guestABC@gmail.com', 'SANTA', '11/29/2022 1:38 PM','11/29/2022 1:38 PM', ' 2','2','Room 3', 'HO HO HO');

-- Create Admin Table 
CREATE TABLE `admin` (
	username varchar(30) PRIMARY KEY,
    `password` varchar(30) NOT NULL,
    fullname varchar(50) NOT NULL,
    phone varchar(10) UNIQUE,
    exp_year int NOT NULL
);

-- insert value
INSERT INTO `admin`
VALUES ('tringuyen', '123456', 'le tri nguyen', '0963676377', 2),
    ('admin1', '654321', 'le nguyen', '0355578787', 21),
    ('admin2', 'xzcxzc', 'le minh nguyen', '0123456789', 5),
    ('admin3', 'gfgfdg', 'le ha nguyen', '0998874562', 7);

-- Create News Table 
CREATE TABLE `news` (
  `userPost` text NOT NULL,
  `postTime` datetime NOT NULL,
  `content` text NOT NULL,
  `newsID` varchar(255) PRIMARY KEY
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- insert value
INSERT INTO `news` (`userPost`, `postTime`, `content`, `newsID`) VALUES
('Nguyễn Hữu Nhân', '2022-11-29 08:07:22', 'Insert news1 content', '1234'),
('Lê Trí Nguyên', '2022-11-29 08:07:22', 'Insert news2 content', '5678'),
('Hoàng An', '2022-11-29 08:07:22', 'Insert news3 content', '1256'),
('Nguyễn Hữu Nhân', '2022-11-29 08:07:22', 'Insert news1 content', '1234'),
('Lê Trí Nguyên', '2022-11-29 08:07:22', 'Insert news2 content', '5678'),
('Hoàng An', '2022-11-29 08:07:22', 'Insert news3 content', '1256');

-- Create Rooms Table 
CREATE TABLE `rooms` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `roomName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bath` int(11) NOT NULL,
  `bed` int(11) NOT NULL,
  `rating` double NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- insert value
INSERT INTO `rooms` (`id`, `roomName`, `description`,`bath`, `bed`, `rating`, `price`, `image`) VALUES
(1, 'King Room', 'Luxious that impress even royalties', 3, 2, 5.0, 300000, 'https://i.pinimg.com/originals/ba/9a/c5/ba9ac50e4ea914da0c57fadb558ed4f1.jpg'),
(2, 'Nature Relaxing Room', 'Enjoy natural beauty along with our services', 2, 2, 4.8, 80000, 'https://images.squarespace-cdn.com/content/v1/4fcf5c8684aef9ce6e0a44b0/1624127208154-VVYP8K5W9LGOJ7PRQ0G7/Living+Room+Example'),
(3, 'Aqua Room', 'Experience Living in the ocean', 2, 2, 4.7, 150000, 'https://cmsapi.manilaoceanpark.com/storage/uploads/Aqua%20Supreme%201(2)_1567482953_thumbnail.jpg');
