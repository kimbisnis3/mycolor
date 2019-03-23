<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	public $table       = 'm_home';
	public $aktifmenu	= 'home';
	public $menu       	= 'home';
	public $mainpage	= 'home/v_home';
	public $inpage		= 'home/v_home_read';

function __construct(){
	parent::__construct();

	$this->load->helper('text');
}
	public function index()
	{
		$data['aktifmenu'] = $this->aktifmenu;	
		$this->load->view($this->mainpage,$data);
    }
    
    public function read($slug=null)
	{
		if ($slug === null) 
        redirect(error);
		$where = array('slug' => $slug);
		$data['menu'] 		= $this->menu;
		$data['maindata'] 	= $this->Dbhelper->getdatawall($this->table,$where);
		$data['recentpost'] = $this->Dbhelper->getdatalimit($this->table,10);
		$this->load->view($this->inpage,$data);
	}

	function test()
	{
		$data['berita'] 	= $this->Dbhelper->getdataorder('fberita');
		$this->load->view('home/tes',$data);

	}


}
