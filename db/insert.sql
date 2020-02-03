-- ----------------------------------------------- --
-- --------- POPULATE THE USERS TABLE --------- --
-- ----------------------------------------------- --
INSERT INTO users ( username
                  , password
                  , contact
                  , display_name)
           VALUES ( 'testing1'
                  , 'pass1'
                  , '111-111-1111'
                  , 'user1');
INSERT INTO users ( username
                  , password
                  , contact
                  , display_name)
           VALUES ( 'testing2'
                  , 'pass2'
                  , '222-222-2222'
                  , 'user2');
INSERT INTO users ( username
                  , password
                  , contact
                  , display_name)
           VALUES ( 'testing3'
                  , 'pass3'
                  , '333-333-3333'
                  , 'user3');

-- ----------------------------------------------- --
-- --------- POPULATE THE RIDES TABLE --------- --
-- ----------------------------------------------- --
INSERT INTO rides ( cityFrom
                  , cityTo
                  , seats
                  , date
                  , time
                  , price
                  , users_id)
           VALUES ( 'Rexburg'
                  , 'Salt Lake'
                  , '1'
                  , '2020-01-23'
                  , '19:00'
                  , 20
                  , 1);
INSERT INTO rides ( cityFrom
                  , cityTo
                  , seats
                  , date
                  , time
                  , price
                  , users_id)
           VALUES ( 'Salt Lake'
                  , 'Provo'
                  , '2'
                  , '2020-02-23'
                  , '20:00'
                  , 10
                  , 2);
INSERT INTO rides ( cityFrom
                  , cityTo
                  , seats
                  , date
                  , time
                  , price
                  , users_id)
           VALUES ( 'Rexburg'
                  , 'Provo'
                  , '3'
                  , '2020-03-23'
                  , '03:00'
                  , 30
                  , 3);

-- ----------------------------------------------- --
-- --------- POPULATE THE CONNECT TABLE --------- --
-- ----------------------------------------------- --
INSERT INTO connect ( user1_id
                  , ride_id)
           VALUES ( 3
                  , 1);
INSERT INTO connect ( user1_id
                  , ride_id)
           VALUES ( 1
                  , 2);
INSERT INTO connect ( user1_id
                  , ride_id)
           VALUES ( 2
                  , 3);