<?php 

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Product.php';

//USERS
$user1 = new User('Luca', 'Morucci', 28);
$user2 = new Premium_user('Gianluca', 'Mancini', 24);


//PRODUCTS
$product1 = new Product('iPhone12', 900, 'Apple');
$product2 = new Product('S21', 780, 'Samsung');

// var_dump($product1);

echo $product2;





?>