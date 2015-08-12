<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'auction_house_db');
define('DB_USER', 'Arthus');
define('DB_PASS', '');

require 'db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS `characters`');

$dbc->exec(
 'CREATE TABLE characters (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    realm VARCHAR(50) NOT NULL,
    class VARCHAR(10000),
    race VARCHAR(10000),
    character_img VARCHAR(200),
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
    price VARCHAR(10000) NOT NULL,
    description VARCHAR(2500) NOT NULL,
    item_number VARCHAR(200),
    PRIMARY KEY (id)
  )'
);

$dbc->exec('DROP TABLE IF EXISTS `users`');

$dbc->exec(
 'CREATE TABLE users (
    user_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    username VARCHAR(25) NOT NULL,
    password VARCHAR(25) NOT NULL,
    email VARCHAR(100) NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    address VARCHAR(200) NOT NULL,
    address_line_2 VARCHAR(200),
    city VARCHAR(50) NOT NULL,
    state VARCHAR(50) NOT NULL,
    zip_code VARCHAR(50) NOT NULL,
    phone VARCHAR(50),
    PRIMARY KEY (user_id)
  )'
);

