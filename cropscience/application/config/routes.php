<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['admin/menu/edit/(:any)'] = 'admin/menu_add/$1';
$route['admin/menu/delete/(:any)'] = 'admin/menu_delete/$1';

$route['admin/category/edit/(:any)'] = 'admin/category_add/$1';
$route['admin/category/delete/(:any)'] = 'admin/category_delete/$1';

$route['admin/product/edit/(:any)'] = 'admin/product_add/$1';
$route['admin/product/delete/(:any)'] = 'admin/product_delete/$1';

$route['admin/content/edit/(:any)'] = 'admin/content_add/$1';
$route['admin/content/delete/(:any)'] = 'admin/content_delete/$1';

$route['admin/user/edit/(:any)'] = 'admin/user_add/$1';
$route['admin/user/delete/(:any)'] = 'admin/user_delete/$1';

$route['admin/slider/edit/(:any)'] = 'admin/slider_add/$1';
$route['admin/slider/delete/(:any)'] = 'admin/slider_delete/$1';

$route['th/content/(:any)'] = 'home/content/$1/th';
$route['th/product_list/(:any)'] = 'home/product_list/$1/th';
$route['th/product_detail/(:any)'] = 'home/product_detail/$1/th';

$route['en/content/(:any)'] = 'home/content/$1/en';
$route['en/product_list/(:any)'] = 'home/product_list/$1/en';
$route['en/product_detail/(:any)'] = 'home/product_detail/$1/en';


$route['default_controller'] = "home";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */