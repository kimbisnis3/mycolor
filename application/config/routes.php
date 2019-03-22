<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$baseparam = 'Unicontrol';
$param 	= $this->uri->segment(1);
$param2 = '';
$getParam2 = $this->uri->segment(2);

if ($getParam2 == 'index') {
	$param2 = '';
} else {
	$param2 = $getParam2;
}

$page = array('home', 'profil', 'ppdb', 'kesiswaan','fasilitas','kurikulum','berita','artikel','galeri','admin');
if (!in_array($param, $page)) {
    $baseparam = 'Nf';
}

$route['default_controller'] = 'Home';
$route['404_override'] = 'error'; //to showing error
$route['translate_uri_dashes'] = FALSE;
$route['tryload/genDummy'] = 'tryload/genDummy';

$route[$param] = $baseparam;

$route['galeri'] = 'galeri'; //manual routing.
$route['admin']  = 'admin'; //manual routing
$route[$param.'/index'] = $baseparam.'/index'; //pagination first page
$route[$param.'/index/(:num)'] = $baseparam.'/index/(:num)'; //pg nxt page
$route[$param.'/'.$param2] = $baseparam.'/read/'.$param2; // open article


