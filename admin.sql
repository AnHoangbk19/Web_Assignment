CREATE TABLE admin (
	username varchar(30) PRIMARY KEY,
    `password` varchar(30) NOT NULL,
    fullname varchar(50) NOT NULL,
    phone varchar(10) UNIQUE,
    exp_year int NOT NULL
);

INSERT INTO admin
VALUES ('tringuyen', '123456', 'le tri nguyen', '0963676377', 2);