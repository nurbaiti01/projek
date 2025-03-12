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
$route['default_controller'] = 'welcome';
$route['home'] = 'welcome/home';
$route['form_mahasiswa'] = 'welcome/form_mahasiswa';
$route['insert_mahasiswa'] ['POST']= 'welcome/insert_mahasiswa';
$route['view_mahasiswa'] ['GET']= 'welcome/view_mahasiswa';
$route['form_edit_mahasiswa/(:num)'] ['GET']= 'welcome/form_edit_mahasiswa/$1';
$route['edit_mahasiswa'] ['POST']= 'welcome/edit_mahasiswa';
$route['hapus_mahasiswa/(:num)'] ['GET']= 'mahasiswa/deleteUser/$1';
$route['edit_dosen'] ['POST']= 'welcome/edit_dosen/$1';
$route['form_dosen'] ['POST']= 'welcome/form_dosen';
$route['edit_dosen/(:num)'] ['GET']= 'welcome/edit_dosen/$1';
$route['insert_dosen'] ['POST']= 'welcome/insert_dosen';
$route['view_dosen'] ['GET']= 'welcome/view_dosen';
$route['view_dosen'] ['GET']= 'welcome/view_dosen';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;