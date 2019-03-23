<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$baseparam = 'Unicontrol';
$param 	= $this->uri->segment(1);
$param2 = $this->uri->segment(2);
$getParam2 = $this->uri->segment(2);


$route['default_controller'] = 'Home';
$route['404_override'] = 'error'; //to showing error
$route['translate_uri_dashes'] = FALSE;
$route['tryload/genDummy'] = 'tryload/genDummy';
// $route[$param.'/'.$param2] = $param.'/read/'.$param2; 


// $route[$param] = $baseparam;

// $route['galeri'] = 'galeri'; //manual routing.
// $route['admin']  = 'admin'; //manual routing
// $route[$param.'/index'] = $baseparam.'/index'; //pagination first page
// $route[$param.'/index/(:num)'] = $baseparam.'/index/(:num)'; //pg nxt page
// $route[$param.'/'.$param2] = $baseparam.'/read/'.$param2; // open article


