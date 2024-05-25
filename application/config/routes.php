<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'pages/view/$1';

$route['users'] = 'users/index';
$route['users/create'] = 'users/create';
$route['users/update'] = 'users/update';
$route['users/filter'] = 'users/filtered';
$route['users/(:any)'] = 'users/view/$1';

$route['roles'] = 'roles/index';
$route['roles/create'] = 'roles/create';
$route['roles/update'] = 'roles/update';
$route['roles/filter'] = 'roles/filtered';
$route['roles/(:any)'] = 'roles/view/$1';

$route['articles'] = 'articles/index';
$route['articles/create'] = 'articles/create';
$route['articles/update'] = 'articles/update';
$route['articles/filter'] = 'articles/filtered';
$route['articles/(:any)'] = 'articles/view/$1';

$route['volumes'] = 'volumes/index';
$route['volumes/create'] = 'volumes/create';
$route['volumes/update'] = 'volumes/update';
$route['volumes/(:any)'] = 'volumes/view/$1';
$route['account/(:any)'] = 'register/view/$1';

$route['public_page'] = 'page_public/index';
$route['public_page/archived'] = 'page_public/archived';
$route['public_page/(:any)'] = 'page_public/view/$1';
$route['(:any)'] = 'pages/view/$1';