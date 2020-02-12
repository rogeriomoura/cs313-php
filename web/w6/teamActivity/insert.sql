DROP TABLE scripture_topics;
DROP TABLE topics;

CREATE TABLE topics
(   id          SERIAL       NOT NULL PRIMARY KEY,
    name        VARCHAR(500) NOT NULL);

INSERT INTO topics (name) VALUES('Faith');
INSERT INTO topics (name) VALUES('Sacrifice');
INSERT INTO topics (name) VALUES('Charity');

CREATE TABLE scripture_topics
(
    id            SERIAL   NOT NULL PRIMARY KEY,
    scripture_id  INT      NOT NULL REFERENCES scriptures(id),
    topic_id      INT      NOT NULL REFERENCES topics(id)
);