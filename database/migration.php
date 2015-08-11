<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'auction_house_db');
define('DB_USER', 'Arthus');
define('DB_PASS', '');

require 'db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS `users`');

$dbc->exec(
 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    realm VARCHAR(50) NOT NULL,
    class VARCHAR(10000),
    race VARCHAR(10000),
    PRIMARY KEY (id)
  )' 
);

$dbc->exec('DROP TABLE IF EXISTS `items`');

$dbc->exec(
 'CREATE TABLE items (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    item_name VARCHAR(50) NOT NULL,
    item_type VARCHAR(50) NOT NULL,
    date_listed DATE NOT NULL,
    price DECIMAL(15, 2),
    description VARCHAR(2500) NOT NULL,
    item_img VARCHAR(200),
    PRIMARY KEY (id)
  )'
);
