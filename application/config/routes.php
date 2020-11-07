<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pizzaNowHome/index';
$route['customize/(:any)'] = 'customize/index/$1';
$route['add-to-cart/(:any)'] = 'cart/addItemToCart/$1';
$route['add-to-cart-pizza'] = 'cart/addPizzaToCart';
$route['remove-from-cart/(:any)'] = 'cart/removeItemFromCart/$1';
$route['update-cart-item-qty/(:any)/(:any)'] = 'cart/updateItemQty/$1/$2';
$route['home'] = 'pizzaNowHome/index';
$route['menu'] = 'menu/index';
$route['cart'] = 'cart/index';
$route['order'] = 'order/index';
$route['checkout'] = 'order/checkout';
$route['delivery/(:any)'] = 'delivery/index/$1';
$route['default_controller'] = 'pizzaNowHome/index';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['404_override'] = 'my404';
