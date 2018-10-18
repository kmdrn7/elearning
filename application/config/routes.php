<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * BELOW IS DEFAULT ROUTE :))
 */

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/**
 * 
 * BELOW IS FRONT-END ROUTE :))
 * : rute buat tampilan depan
 */


/**
 * 
 * BELOW IS BACK-END ROUTE :))
 * : rute untuk admin panel
 */

$route['admin'] = 'admin/AdminController/index';