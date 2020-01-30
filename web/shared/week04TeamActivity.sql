CREATE TABLE users
(
    id SERIAL NOT NULL PRIMARY KEY,
    name VARCHAR(80) NOT NULL,
    password VARCHAR(80) NOT NULL,
    display_name VARCHAR(80) NOT NULL
);

CREATE TABLE speakers
(
    id SERIAL NOT NULL PRIMARY KEY,
    speaker_name VARCHAR(80) NOT NULL
);

CREATE TABLE conferences
(
    id SERIAL NOT NULL PRIMARY KEY,
    month VARCHAR(80) NOT NULL,
    year INT NOT NULL
);

CREATE TABLE talks
(
    id  SERIAL NOT NULL PRIMARY KEY,
    name VARCHAR(80),
    speaker_id INT NOT NULL REFERENCES speakers(id),
    conference_id INT NOT NULL REFERENCES conferences(id)
);

CREATE TABLE notes
(
    id SERIAL NOT NULL PRIMARY KEY,
    talk_id INT NOT NULL REFERENCES talks(id),
    user_id int NOT NULL REFERENCES users(id)
);


ALTER TABLE conferences
ADD session VARCHAR(80);

INSERT INTO speakers VALUES (DEFAULT, 'Russel M. Nelson');
INSERT INTO speakers VALUES (DEFAULT, 'Jeffery R. Holland');
INSERT INTO speakers VALUES (DEFAULT, 'Dieter F. Uchtdorf');
INSERT INTO speakers VALUES (DEFAULT, 'Dalin H. Oaks');

INSERT INTO conferences VALUES (DEFAULT, 4, 2018);

INSERT INTO talks VALUES (DEFAULT, 'Good, Better, Best', '4', '1');
INSERT INTO talks VALUES (DEFAULT, 'Airplanes', '3', '1');
INSERT INTO talks VALUES (DEFAULT, 'The Slap Down by President Nelson', '1', '1');

INSERT INTO notes VALUES (DEFAULT, '5', '1', 'This was a super good talk');
INSERT INTO notes VALUES (DEFAULT, '2', '1', 'Very spiritual');
INSERT INTO notes VALUES (DEFAULT, '4', '2', 'Families can truely be eternal');
INSERT INTO notes VALUES (DEFAULT, '5', '1', 'Wow');

ALTER TABLE notes
ADD notes VARCHAR;


SELECT note, name, speaker_name
FROM notes
INNER JOIN talks ON notes.talk_id = talks.id
INNER JOIN speakers ON talks.speaker_id = speakers.id;