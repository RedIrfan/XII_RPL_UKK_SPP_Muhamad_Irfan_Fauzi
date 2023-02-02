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
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route["login"] = "auth";
$route["register"] = "auth/register";

$route["login/auth"] = "auth/login_auth";
$route["register/auth"] = "auth/register_auth";
$route["logout"] = "auth/logout";

$route["admin"] = "admin";

$route["admin/siswa"] = "adminsiswa";
$route["admin/siswa/add"] = "adminsiswa/add";
$route["admin/siswa/insert"] = "adminsiswa/insert";
$route["admin/siswa/edit/(:any)"] = "adminsiswa/edit/$1";
$route["admin/siswa/update/(:any)"] = "adminsiswa/update/$1";
$route["admin/siswa/delete/(:any)"] = "adminsiswa/delete/$1";

$route["admin/petugas"] = "adminpetugas";
$route["admin/petugas/add"] = "adminpetugas/add";
$route["admin/petugas/insert"] = "adminpetugas/insert";
$route["admin/petugas/edit/(:any)"] = "adminpetugas/edit/$1";
$route["admin/petugas/update/(:any)"] = "adminpetugas/update/$1";
$route["admin/petugas/delete/(:any)"] = "adminpetugas/delete/$1";

$route["admin/kelas"] = "adminkelas";
$route["admin/kelas/add"] = "adminkelas/add";
$route["admin/kelas/insert"] = "adminkelas/insert";
$route["admin/kelas/edit/(:any)"] = "adminkelas/edit/$1";
$route["admin/kelas/update/(:any)"] = "adminkelas/update/$1";
$route["admin/kelas/delete/(:any)"] = "adminkelas/delete/$1";

$route["admin/spp"] = "adminspp";
$route["admin/spp/add"] = "adminspp/add";
$route["admin/spp/insert"] = "adminspp/insert";
$route["admin/spp/edit/(:any)"] = "adminspp/edit/$1";
$route["admin/spp/update/(:any)"] = "adminspp/update/$1";
$route["admin/spp/delete/(:any)"] = "adminspp/delete/$1";

$route["admin/history"] = "adminpembayaran/history";
$route["admin/transaksi"] = "adminpembayaran/transaksi";
$route["admin/transaksi/insert"] = "adminpembayaran/transaksi_insert";