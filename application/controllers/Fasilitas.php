<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fasilitas extends CI_Controller {

	public $prefix, $table, $aktifmenu, $mainpage, $inpage;

	function __construct(){
		parent::__construct();
		$this->prefix 		= 'fasilitas';
		$this->table 		= 'f'.$this->prefix;
		$this->menu  		= $this->prefix;
		$this->aktifmenu	= $this->prefix;
		$this->mainpage		= $this->prefix.'/v_'.$this->prefix;
		$this->inpage		= $this->prefix.'/v_'.$this->prefix.'_read';
		
	}

    public function index(){
    	
		$this->load->library('pagination');
		$jumlah_data = $this->Dbhelper->getcount($this->table);
		$config['base_url'] = base_url().$this->menu.'/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;

		$data['menu'] 		= $this->menu;
		$data['aktifmenu'] 	= $this->aktifmenu;
		$data['recentpost'] = $this->Dbhelper->getdatalimit($this->table,10);

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['maindata'] = $this->Dbhelper->datapage($this->table,$config['per_page'],$from);
		
		$this->load->view($this->mainpage,$data);
	}
    
    public function read()
	{
    	$slug = $this->uri->segment(2);
		if ($slug === null); 
		$where = array('slug' => $slug);
		$data['menu'] 		= $this->menu;
		$data['aktifmenu'] 	= $this->aktifmenu;
		$data['maindata'] 	= $this->Dbhelper->getdatawall($this->table,$where);
		$data['recentpost'] = $this->Dbhelper->getdatalimit($this->table,10);
		$this->load->view($this->inpage,$data);
	}


}
