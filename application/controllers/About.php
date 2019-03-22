<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller {

	public $table       = 't_config_image';
	public $aktifmenu	= 'about';
	public $menu       	= 'about';
	public $mainpage	= 'about/v_about';
	public $inpage		= '';

function __construct(){
	parent::__construct();
	
}
	public function index()
	{
		$data['menu'] 		= $this->menu;
		$data['aktifmenu'] 	= $this->aktifmenu;
		$w = array('tipe' => 'tk','aktif' => '1' );
		$data['maindata'] 	= $this->Unimodel->getdataw($this->table,$w);
		$this->load->view($this->mainpage,$data);
    }


}
