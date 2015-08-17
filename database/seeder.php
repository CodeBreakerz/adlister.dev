<?php
require_once '../bootstrap.php';
require_once 'db_connect.php';

$dbc->exec('TRUNCATE items');

$items = [
    ['item_name' => 'Thuderfury, Blessed Blade of the Windseeker',   'item_type' => 'Weapon', 'date_listed' => '1902-05-22', 'price' => '150.00', 'description' => 'Did someone say Thunderfury?  Legendary! ', 'item_number' => '19019'],
    ['item_name' => 'Rusty Dagger',   'item_type' => 'Weapon', 'date_listed' => '1934-05-30', 'price' => '1.00', 'description' => 'Causes tetanus ', 'item_number' => '92976'],
    ['item_name' => 'Leather Breeches',   'item_type' => 'Armor', 'date_listed' => '1921-03-04', 'price' => '1.00', 'description' => 'Party Pants! ', 'item_number' => '2962'],
    ['item_name' => 'Comfortable Leather Hat',   'item_type' => 'Armor', 'date_listed' => '1899-03-02', 'price' => '1.00', 'description' => 'Pimpin ','item_number' => '8174'],
    ['item_name' => 'Olympic',   'item_type' => 'Washington', 'date_listed' => '1938-06-29', 'price' => '922650.86', 'description' => ' ','item_number' => '19019'],
    ['item_name' => 'Rocky Mountain',   'item_type' => 'Colorado', 'date_listed' => '1915-01-26', 'price' => '265828.41', 'description' => ' ', 'item_number' => '19019'],
    ['item_name' => 'Shenandoah',   'item_type' => 'Virginia', 'date_listed' => '1926-05-22', 'price' => '199045.23', 'description' => ' ', 'item_number' => '19019'],
    ['item_name' => 'Yellowstone',   'item_type' => 'Montana', 'date_listed' => '1872-03-01', 'price' => '2219790.71', 'description' => ' ','item_number' => '19019'],
    ['item_name' => 'Big Bend',   'item_type' => 'Texas', 'date_listed' => '1944-06-12', 'price' => '801163.21', 'description' => ' ', 'item_number' => '19019'],
    ['item_name' => 'Glacier Bay',   'item_type' => 'Alaska', 'date_listed' => '1980-12-02', 'price' => '3224840.31', 'description' => ' ', 'item_number' => '19019']
];

    $stmt = $dbc->prepare('INSERT INTO items (item_name, item_type, date_listed, price, description, item_number) 
        VALUES (:item_name, :item_type, :date_listed, :price, :description, :item_number)');

    foreach ($items as $item) {
        $stmt->bindValue(':item_name', $item['item_name'], PDO::PARAM_STR);
        $stmt->bindValue(':item_type', $item['item_type'], PDO::PARAM_STR);
        $stmt->bindValue(':date_listed', $item['date_listed'], PDO::PARAM_STR);
        $stmt->bindValue(':price', $item['price'], PDO::PARAM_STR);
        $stmt->bindValue(':description', $item['description'], PDO::PARAM_STR);
        $stmt->bindValue(':item_number', $item['item_number'], PDO::PARAM_STR);

        $stmt->execute();
    }

$dbc->exec('TRUNCATE users');


$users = [

['username' => 'user1', 'password' => password_hash('user1', PASSWORD_DEFAULT), 'email' => 'user1', 'first_name' => 'user1', 'last_name' => 'user1', 'address' => 'user1', 'address_line_2' => 'user1', 'city' => 'user1', 'state' => 'user1', 'zip_code' => 'user1', 'phone' => 'user1' ]

];

$stmt = $dbc->prepare('INSERT INTO users (username, password, email, first_name, last_name, address, address_line_2, city, state, zip_code, phone) 
        VALUES (:username, :password, :email, :first_name, :last_name, :address, :address_line_2, :city, :state, :zip_code, :phone)');

    foreach ($users as $user) {
        $stmt->bindValue(':username', $user['username'], PDO::PARAM_STR);
        $stmt->bindValue(':password', $user['password'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $user['email'], PDO::PARAM_STR);
        $stmt->bindValue(':first_name', $user['first_name'], PDO::PARAM_STR);
        $stmt->bindValue(':last_name', $user['last_name'], PDO::PARAM_STR);
        $stmt->bindValue(':address', $user['address'], PDO::PARAM_STR);
         $stmt->bindValue(':address_line_2', $user['address_line_2'], PDO::PARAM_STR);
        $stmt->bindValue(':city', $user['city'], PDO::PARAM_STR);
        $stmt->bindValue(':state', $user['state'], PDO::PARAM_STR);
        $stmt->bindValue(':zip_code', $user['zip_code'], PDO::PARAM_STR);
        $stmt->bindValue(':phone', $user['phone'], PDO::PARAM_STR);

        $stmt->execute();
    }
