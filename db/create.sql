CREATE TABLE user_driver
(
    id SERIAL NOT NULL PRIMARY KEY,
    username VARCHAR(80) NOT NULL,
    password VARCHAR(80) NOT NULL,
    contact VARCHAR(80) NOT NULL
);

CREATE TABLE user_rider
(
    id SERIAL NOT NULL PRIMARY KEY,
    username VARCHAR(80) NOT NULL,
    password VARCHAR(80) NOT NULL,
    contact VARCHAR(80) NOT NULL
);

CREATE TABLE rides
(
    id SERIAL NOT NULL PRIMARY KEY,
    cityFrom VARCHAR(80) NOT NULL,
    cityTo VARCHAR(80) NOT NULL,
    seats INT NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    price FLOAT NOT NULL,
    driver_id INT NOT NULL REFERENCES user_driver(id),
    rider_id INT REFERENCES user_rider(id)
);