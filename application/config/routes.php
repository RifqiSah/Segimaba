<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'page';
$route['404_override'] = 'sg_404';
$route['translate_uri_dashes'] = TRUE;

// Halaman
$route['signin'] 		= "user/signin";
$route['signup'] 		= "user/signup";
$route['signout'] 		= "user/signout";

$route['about'] 		= "page/about";
$route['contact'] 		= "page/contact";
$route['tos'] 			= "page/tos";

// Lainnya
$route['kost/(:any)'] 		= "kost/detail/$1";