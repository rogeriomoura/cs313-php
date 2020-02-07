\echo '2a. How many events are there?'
SELECT COUNT(id) FROM w5_EVENT;

\echo '2b. How many participants are there?'
SELECT COUNT(id) FROM w5_PARTICIPANT;

\echo '3a. What is the third event when sorted alphabetically (by name)? '
SELECT name FROM w5_EVENT ORDER BY name LIMIT 1 OFFSET 2;

\echo '3b. What is the third event when sorted by ID? '
SELECT name FROM w5_EVENT ORDER BY id LIMIT 1 OFFSET 2;

\echo '4a. List the names alphabetically of all the participants in the ''Toughman Utah'' competition'
SELECT p.name
FROM w5_PARTICIPANT p
INNER JOIN w5_EVENT_PARTICIPANT ep ON ep.participant_id = p.id
INNER JOIN w5_EVENT ev ON ep.event_id = ev.id
WHERE ev.name = 'Toughman Utah'
ORDER BY p.name;

\echo '4b. List the names (sorted by id) of all the participants in the ''Kauai Marathon'' competition'
SELECT p.name
FROM w5_PARTICIPANT p
INNER JOIN w5_EVENT_PARTICIPANT ep ON ep.participant_id = p.id
INNER JOIN w5_EVENT ev ON ep.event_id = ev.id
WHERE ev.name = 'Kauai Marathon'
ORDER BY p.id;

\echo '5a. How many competitions has ''Black Panther'' competed in?'
SELECT COUNT(ep.id)
FROM w5_EVENT_PARTICIPANT ep
INNER JOIN w5_PARTICIPANT e ON e.id = ep.participant_id
WHERE e.name = 'Black Panther';

\echo '5b. How can you verify that your count is correct?'  
SELECT id, name FROM w5_PARTICIPANT WHERE name = 'Black Panther';
SELECT * FROM w5_EVENT_PARTICIPANT WHERE participant_id = (SELECT id FROM w5_PARTICIPANT WHERE name = 'Black Panther');

\echo '5c. Who has competed in the most competitions? How many have they competed in?'
SELECT p.name, COUNT(ep.participant_id)
FROM w5_event_participant ep
INNER JOIN w5_participant p ON p.id = ep.participant_id
GROUP BY p.name
ORDER BY COUNT(ep.participant_id) DESC LIMIT 1;

\echo '5d. Who has competed in the least competitions? How many have they competed in?'
SELECT p.name, COUNT(ep.participant_id)
FROM w5_event_participant ep
INNER JOIN w5_participant p ON p.id = ep.participant_id
GROUP BY p.name
ORDER BY COUNT(ep.participant_id) LIMIT 1;

\echo '5e. people who have competed in 1 or more'
SELECT p.name, COUNT(ep.participant_id)
FROM w5_event_participant ep
INNER JOIN w5_participant p ON p.id = ep.participant_id
GROUP BY p.name
ORDER BY COUNT(ep.participant_id);

\echo '5f. - people that didn''t compete in any'
SELECT name
FROM w5_participant
WHERE id NOT IN(SELECT participant_id FROM w5_event_participant);

-- \echo '6a. Is there anyone who has competed in the same competition twice? '
SELECT p.name, COUNT(ep.id)
FROM w5_participant p
INNER JOIN w5_event_participant ep ON p.id = ep.participant_id
GROUP BY p.name
HAVING COUNT(ep.id) = 2
ORDER BY COUNT(ep.id);


-- \echo '6b. Which event had the most competitors? '
---------------- Your code here ----------------

-- \echo '6c. Which event had the least competitors? '
---------------- Your code here ----------------

-- \echo '6d. List all competitors that competed in the same event at least once '
---------------- Your code here ----------------
