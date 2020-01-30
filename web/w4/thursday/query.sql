\echo '*********************List all restaurant names*********************'
-- write your query here
SELECT name FROM w4_restaurant;

\echo '****************List restaurant names and addresses****************'
-- write your query here
SELECT name, address FROM w4_restaurant;

\echo '************************List  all customers************************'
-- write your query here
SELECT * FROM w4_customer;

\echo '**List  all menu item names and prices of a particular restaurant**'
-- write your query here
SELECT name, price FROM w4_menu_item WHERE restaurant_id = 1;

\echo '*View all orders of a particular customer - show the customer name*'
-- write your query here
SELECT w4_order.id, w4_customer.first_name AS "First Name"
     , w4_customer.last_name AS "Last Name"
     , w4_menu_item.name AS "Menu Items"
     , w4_menu_item.price AS "Price"
FROM w4_order
INNER JOIN w4_customer ON w4_order.customer_id = w4_customer.id
INNER JOIN w4_order_menu_items ON w4_order.id = w4_order_menu_items.order_id
INNER JOIN w4_menu_item ON w4_order_menu_items.menu_item_id = w4_menu_item.id
WHERE customer_id = 1
ORDER BY id;

\echo '************List  all orders of a particular restaurant************'
-- write your query here
SELECT w4_order.id AS "Order ID"
     , w4_restaurant.name AS "Restaurant Name"
     , w4_menu_item.name AS "Item Name"
     , w4_menu_item.price AS "Price"
FROM w4_order
INNER JOIN w4_order_menu_items ON w4_order_menu_items.order_id = w4_order.id
INNER JOIN w4_menu_item ON w4_order_menu_items.menu_item_id = w4_menu_item.id
INNER JOIN w4_restaurant ON w4_menu_item.restaurant_id = w4_restaurant.id
WHERE w4_restaurant.id = 1
ORDER BY w4_order.id;

