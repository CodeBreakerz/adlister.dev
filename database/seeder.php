<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'auction_house_db');
define('DB_USER', 'Arthus');
define('DB_PASS', '');

require_once 'db_connect.php';

$dbc->exec('TRUNCATE items');

$items = [
    ['item_name' => 'Crater Lake',   'item_type' => 'Oregon', 'date_listed' => '1902-05-22', 'price' => '183224.05', 'description' => ' '],
    ['item_name' => 'Everglades',   'item_type' => 'Florida', 'date_listed' => '1934-05-30', 'price' => '1508537.90', 'description' => ' '],
    ['item_name' => 'Hot Springs',   'item_type' => 'Arkansas', 'date_listed' => '1921-03-04', 'price' => '5459.75', 'description' => ' '],
    ['item_name' => 'Mount Rainier',   'item_type' => 'Washington', 'date_listed' => '1899-03-02', 'price' => '235625.00', 'description' => ' '],
    ['item_name' => 'Olympic',   'item_type' => 'Washington', 'date_listed' => '1938-06-29', 'price' => '922650.86', 'description' => ' '],
    ['item_name' => 'Rocky Mountain',   'item_type' => 'Colorado', 'date_listed' => '1915-01-26', 'price' => '265828.41', 'description' => ' '],
    ['item_name' => 'Shenandoah',   'item_type' => 'Virginia', 'date_listed' => '1926-05-22', 'price' => '199045.23', 'description' => ' '],
    ['item_name' => 'Yellowstone',   'item_type' => 'Montana', 'date_listed' => '1872-03-01', 'price' => '2219790.71', 'description' => ' '],
    ['item_name' => 'Big Bend',   'item_type' => 'Texas', 'date_listed' => '1944-06-12', 'price' => '801163.21', 'description' => ' '],
    ['item_name' => 'Glacier Bay',   'item_type' => 'Alaska', 'date_listed' => '1980-12-02', 'price' => '3224840.31', 'description' => ' ']
];

    $stmt = $dbc->prepare('INSERT INTO items (item_name, item_type, date_listed, price, description) 
        VALUES (:item_name, :item_type, :date_listed, :price, :description)');

    foreach ($items as $item) {
        $stmt->bindValue(':item_name', $item['item_name'], PDO::PARAM_STR);
        $stmt->bindValue(':item_type', $item['item_type'], PDO::PARAM_STR);
        $stmt->bindValue(':date_listed', $item['date_listed'], PDO::PARAM_STR);
        $stmt->bindValue(':price', $item['price'], PDO::PARAM_STR);
        $stmt->bindValue(':description', $item['description'], PDO::PARAM_STR);

        $stmt->execute();
    }