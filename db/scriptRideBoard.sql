CREATE TABLE users
(
    id SERIAL NOT NULL PRIMARY KEY,
    username VARCHAR(80) NOT NULL,
    password VARCHAR(80) NOT NULL,
    contact VARCHAR(80) NOT NULL,
    display_name VARCHAR(80) NOT NULL
);

CREATE TABLE rides
(
    id SERIAL NOT NULL PRIMARY KEY,
    cityFrom VARCHAR(80) NOT NULL,
    cityTo VARCHAR(80) NOT NULL,
    seats INT(1) NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    price FLOAT NOT NULL,
    users_id INT NOT NULL REFERENCES users(id) 
);

CREATE TABLE connect
(
    id SERIAL NOT NULL PRIMARY KEY,
    user1_id INT NOT NULL REFERENCES users(id),
    ride_id INT NOT NULL REFERENCES rides(id)
);