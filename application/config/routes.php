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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* admin */
$route['admin'] = 'admin/index';
$route['home_admin'] = 'admin/index/login';
$route['kategory_yudisium'] = 'admin/index/kategory';
$route['list_seleksi'] = 'admin/index/seleksi';
$route['laboran'] = 'admin/index/laboran';
$route['admin_logout'] = 'admin/index/logout';
$route['edit_profile'] = 'admin/index/update';
$route['add_category'] = 'admin/add/addCategory';
$route['get_mahasiswa'] = 'admin/index/getMahasiswaById';
$route['update_kategori/(:num)'] = 'admin/edit/update/$1';
$route['delete_kategori/(:num)'] = 'admin/remove/delete/$1';
$route['aktif_mahasiswa'] = 'admin/add/addActiveMahasiswa';
$route['delete_list/(:num)'] = 'admin/remove/removeList/$1';
$route['add_bebas_lab'] = 'admin/add/addBebasLab';
$route['remove_bebasLab/(:num)'] = 'admin/remove/removeBebasLab/$1';
$route['update_bebasLab/(:num)'] = 'admin/edit/updateBebasLab/$1';
$route['add_status_verifikasi'] = 'admin/add/addStatusVerifikasi';
$route['update_status_verifikasi/(:num)'] = 'admin/edit/updateStatusVerifikasi/$1';
$route['cetak_bebeas_lab/(:num)'] = 'admin/index/cetakBebasLab/$1';

/* frontend */
$route['index'] = 'index';
$route['login'] = 'index/login';
$route['form_login'] = 'index/formLogin';
$route['home'] = 'index/home';
$route['form_biodata'] = 'index/biodata';
$route['list_yudisium'] = 'index/list';
$route['logout_user'] = 'index/logout';
$route['update_user'] = 'index/update';
$route['upload_image/(:num)'] = 'index/uploadImg/$1';
$route['updateImage/(:num)'] = 'index/updateImage/$1';
$route['cetak_surat_yudisium'] = 'index/cetakYudisium';
