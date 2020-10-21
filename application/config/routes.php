<?php
defined('BASEPATH') OR exit('No direct script access allowed');




$route['default_controller'] = 'member/beranda';
$route['admin'] = ['admin/dashboard'];
$route['pengelola']= ['pengelola/dashboard'];
$route['login'] = 'login';
$route['register'] = 'register';
$route['404_override'] = ''; 
$route['translate_uri_dashes'] = FALSE;
