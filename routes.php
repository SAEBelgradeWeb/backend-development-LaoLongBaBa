<?php



$router->get('', 'PagesController@home');
$router->get('add_cart', 'PagesController@add_cart');//add_cart?c_id=1
$router->get('plus_cart', 'PagesController@plus_cart');//plus_cart?c_id=1
$router->get('reduce_cart', 'PagesController@reduce_cart');//reduce_cart?c_id=1
$router->get('delete_cart', 'PagesController@delete_cart');//delete_cart?c_id=1
$router->get('cart_list', 'PagesController@cart_list');//cart_list






?>