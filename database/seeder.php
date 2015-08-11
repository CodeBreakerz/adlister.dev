<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'auction_house_db');
define('DB_USER', 'Arthus');
define('DB_PASS', '');

require_once 'db_connect.php';

$dbc->exec('TRUNCATE items');

$items = [
    ['item_name' => 'Thuderfury, Blessed Blade of the Windseeker',   'item_type' => 'Weapon', 'date_listed' => '1902-05-22', 'price' => '150.00', 'description' => 'Did someone say Thunderfury?  Legendary! ', 'item_img' => '/img/thunderfury.jpg'],
    ['item_name' => 'Rusty Dagger',   'item_type' => 'Weapon', 'date_listed' => '1934-05-30', 'price' => '1.00', 'description' => 'Causes tetanus ', 'item_img' => '/img/thunderfury.jpg'],
    ['item_name' => 'Leather Breeches',   'item_type' => 'Armor', 'date_listed' => '1921-03-04', 'price' => '1.00', 'description' => 'Party Pants! ', 'item_img' => '/img/thunderfury.jpg'],
    ['item_name' => 'Styling Leather Hat',   'item_type' => 'Armor', 'date_listed' => '1899-03-02', 'price' => '1.00', 'description' => 'Pimpin ', 'item_img' => '/img/thunderfury.jpg'],
    ['item_name' => 'Olympic',   'item_type' => 'Washington', 'date_listed' => '1938-06-29', 'price' => '922650.86', 'description' => ' ', 'item_img' => '/img/thunderfury.jpg'],
    ['item_name' => 'Rocky Mountain',   'item_type' => 'Colorado', 'date_listed' => '1915-01-26', 'price' => '265828.41', 'description' => ' ', 'item_img' => '/img/thunderfury.jpg'],
    ['item_name' => 'Shenandoah',   'item_type' => 'Virginia', 'date_listed' => '1926-05-22', 'price' => '199045.23', 'description' => ' ', 'item_img' => '/img/thunderfury.jpg'],
    ['item_name' => 'Yellowstone',   'item_type' => 'Montana', 'date_listed' => '1872-03-01', 'price' => '2219790.71', 'description' => ' ', 'item_img' => '/img/thunderfury.jpg'],
    ['item_name' => 'Big Bend',   'item_type' => 'Texas', 'date_listed' => '1944-06-12', 'price' => '801163.21', 'description' => ' ', 'item_img' => '/img/thunderfury.jpg'],
    ['item_name' => 'Glacier Bay',   'item_type' => 'Alaska', 'date_listed' => '1980-12-02', 'price' => '3224840.31', 'description' => ' ', 'item_img' => '/img/thunderfury.jpg']
];

    $stmt = $dbc->prepare('INSERT INTO items (item_name, item_type, date_listed, price, description, item_img) 
        VALUES (:item_name, :item_type, :date_listed, :price, :description, :item_img)');

    foreach ($items as $item) {
        $stmt->bindValue(':item_name', $item['item_name'], PDO::PARAM_STR);
        $stmt->bindValue(':item_type', $item['item_type'], PDO::PARAM_STR);
        $stmt->bindValue(':date_listed', $item['date_listed'], PDO::PARAM_STR);
        $stmt->bindValue(':price', $item['price'], PDO::PARAM_STR);
        $stmt->bindValue(':description', $item['description'], PDO::PARAM_STR);
        $stmt->bindValue(':item_img', $item['item_img'], PDO::PARAM_STR);

        $stmt->execute();
    }