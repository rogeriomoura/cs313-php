-- ----------------------------------------------- --
-- --------- POPULATE THE USERS TABLE --------- --
-- ----------------------------------------------- --
INSERT INTO user_driver ( username
                  , password
                  , contact)
           VALUES ( 'driver1'
                  , 'pass1'
                  , '111-111-1111');
INSERT INTO user_driver ( username
                  , password
                  , contact)
           VALUES ( 'driver2'
                  , 'pass2'
                  , '222-222-2222');
INSERT INTO user_driver ( username
                  , password
                  , contact)
           VALUES ( 'driver3'
                  , 'pass3'
                  , '333-333-3333');

-- ----------------------------------------------- --
-- ---------- POPULATE THE RIDES TABLE ----------- --
-- ----------------------------------------------- --
INSERT INTO rides ( cityFrom
                  , cityTo
                  , seats
                  , date
                  , time
                  , price
                  , driver_id)
           VALUES ( 'Rexburg'
                  , 'Salt Lake'
                  , 1
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
                  , driver_id)
           VALUES ( 'Salt Lake'
                  , 'Provo'
                  , 2
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
                  , driver_id)
           VALUES ( 'Rexburg'
                  , 'Provo'
                  , 3
                  , '2020-03-23'
                  , '03:00'
                  , 30
                  , 3);

-- ----------------------------------------------- --
-- ------- POPULATE THE USER_RIDER TABLE --------- --
-- ----------------------------------------------- --
INSERT INTO user_rider ( username
                  , password
                  , contact)
           VALUES ( 'rider1'
                  , 'pass1'
                  , '111-111-1111');
INSERT INTO user_rider ( username
                  , password
                  , contact)
           VALUES ( 'rider2'
                  , 'pass2'
                  , '222-222-2222');
INSERT INTO user_rider ( username
                  , password
                  , contact)
           VALUES ( 'rider3'
                  , 'pass3'
                  , '333-333-3333');