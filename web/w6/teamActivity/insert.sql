DROP TABLE scripture_topics;
DROP TABLE topics;
DROP TABLE scriptures;

CREATE TABLE topics
(   id          SERIAL       NOT NULL PRIMARY KEY,
    name        VARCHAR(500) NOT NULL);

INSERT INTO topics (name) VALUES('Faith');
INSERT INTO topics (name) VALUES('Sacrifice');
INSERT INTO topics (name) VALUES('Charity');

CREATE TABLE scriptures
(   id          SERIAL       NOT NULL PRIMARY KEY,
    book        VARCHAR(100) NOT NULL,
    chapter     INT          NOT NULL,
    verse       INT          NOT NULL,
    content     VARCHAR(500) NOT NULL);

INSERT INTO scriptures (book, chapter, verse, content) VALUES('John', 1, 5, 'And the light shineth in darkness; and the darkness comprehended it not.');
INSERT INTO scriptures (book, chapter, verse, content) VALUES('D&C', 88, 49, 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.');
INSERT INTO scriptures (book, chapter, verse, content) VALUES('D&C', 93, 28, 'He that keepeth his commandments receiveth btruth and clight, until he is glorified in truth and knoweth all things.');
INSERT INTO scriptures (book, chapter, verse, content) VALUES('Mosiah', 16, 9, 'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');

CREATE TABLE scripture_topics
(
    id            SERIAL   NOT NULL PRIMARY KEY,
    scripture_id  INT      NOT NULL REFERENCES scriptures(id),
    topic_id      INT      NOT NULL REFERENCES topics(id)
);

SELECT s.book, s.chapter, s.verse, s.content, t.name
FROM scriptures s
INNER JOIN scripture_topics st ON s.id = st.scripture_id
INNER JOIN topics t ON t.id = st.topic_id;