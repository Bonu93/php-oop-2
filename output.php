<?php 

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Product.php';

//USERS
$user1 = new User('Luca', 'Morucci', 28);
$user2 = new Premium_user('Gianluca', 'Mancini', 24);
$user3 = new Premium_user('Andrea', 'Lorenzetti', 27);
$user3->setLevel(2);



//PRODUCTS
$product1 = new Product('iPhone12', 900, 'Apple');
$product2 = new Product('S21', 780, 'Samsung');
$product3 = new Product('Galaxy Fold', 1200, 'Samsung');

echo "Utente {$user2->name}, hai diritto a uno sconto del {$user2->getDiscount()}%, puoi acquistare {$product1->name} a {$product1->getSale($user2->getDiscount())}€";


?>