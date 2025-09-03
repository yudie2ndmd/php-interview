USE interview;

-- SCHEMA
CREATE TABLE orders
(
    id            int auto_increment primary key,
    date_created  int      not null,
    customer_id   int     null
);

CREATE TABLE orders_products
(
    id          int auto_increment primary key,
    order_id    int        not null,
    product_id  int        not null,
    quantity    decimal(20, 2) not null default 1,
    price       decimal(20, 2) not null default 0
);

-- Inserting 3 orders from same customer with only order number 2 with products
INSERT INTO orders (customer_id, date_created)
VALUES 
(10000, UNIX_TIMESTAMP('2025-01-01 10:00:00')),
(10000, UNIX_TIMESTAMP('2025-01-02 10:00:00')),
(10000, UNIX_TIMESTAMP('2025-01-03 10:00:00'));
INSERT INTO orders_products (order_id, product_Id, quantity, price)
VALUES 
(2, 10, 10, 10),
(2, 10, 20, 8);



