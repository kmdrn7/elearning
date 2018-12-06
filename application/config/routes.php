<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * BELOW IS DEFAULT ROUTE :))
 */

$route['default_controller'] = 'MainController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/**
 *
 * BELOW IS FRONT-END ROUTE :))
 * : rute buat tampilan depan
 */

$route['courses'] = 'CoursesController/index';
$route['courses/(:any)'] = 'CoursesController/detail';

/**
 *
 * BELOW IS BACK-END ROUTE :))
 * : rute untuk admin panel
 */

$route['admin'] = 'admin/AdminController/admin';
$route['admin/dashboard'] = 'admin/AdminController/index';

$route['admin/kategori'] = 'admin/KategoriController/index';
$route['admin/kategori/add'] = 'admin/KategoriController/add';
$route['admin/kategori/update/(:any)'] = 'admin/KategoriController/update/$1';
$route['admin/kategori/delete/(:any)'] = 'admin/KategoriController/delete/$1';
$route['admin/kategori/delete-force/(:any)'] = 'admin/KategoriController/delete_force/$1';
$route['admin/kategori/view'] = 'admin/KategoriController/view';