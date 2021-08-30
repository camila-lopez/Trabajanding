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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//User
$route['login'] = 'users/login';
$route['error'] = 'users/error';
$route['registro'] = 'users/registro';
$route['guardar'] = 'users/save';
$route['sobre-nosotros'] = 'users/nosotros';
$route['privacidad'] = 'users/privacidad';
$route['contacto'] = 'users/contacto';

//Cliente
$route['cliente/home'] = 'cliente/home';
$route['cliente/perfil'] = 'cliente/mis_datos';
$route['cliente/agendar'] = 'cliente/agendar';
$route['cliente/mis-servicios'] = 'cliente/mis_servicios';
$route['cliente/pagos'] = 'cliente/mis_pagos';
$route['cliente/mis-servicios/(:num)'] = 'cliente/delete_servicio/$1';
$route['cliente/ayuda'] = 'cliente/ayuda';
$route['cliente/contacto'] = 'cliente/contacto';
$route['cliente/sobre-nosotros'] = 'cliente/nosotros';
$route['cliente/privacidad'] = 'cliente/privacidad';
$route['cliente/calificar/(:num)'] = 'cliente/calificar/$1';

//Trabajador
$route['trabajador/home'] = 'trabajador/home';
$route['trabajador/perfil'] = 'trabajador/mis_datos';
$route['trabajador/agregar-trabajo'] = 'trabajador/nuevo_trabajo';
$route['trabajador/agendar-servicio/(:num)'] = 'trabajador/agendar_servicio/$1';
$route['trabajador/mis-servicios'] = 'trabajador/mis_servicios';
$route['trabajador/ganancias'] = 'trabajador/mis_ganancias';
$route['trabajador/mis-servicios/(:num)'] = 'trabajador/delete_servicio/$1';
$route['trabajador/finalizar-servicio/(:num)'] = 'trabajador/finalizar_servicio/$1';
$route['trabajador/ayuda'] = 'trabajador/ayuda';
$route['trabajador/contacto'] = 'trabajador/contacto';
$route['trabajador/sobre-nosotros'] = 'trabajador/nosotros';
$route['trabajador/privacidad'] = 'trabajador/privacidad';
