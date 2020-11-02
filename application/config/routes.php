<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['customize/(:any)'] = 'pages/customize/$1';
$route['home'] = 'pizzaNowHome/index';
$route['menu'] = 'menu/index';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['404_override'] = 'my404';
