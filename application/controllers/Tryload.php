<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tryload extends CI_Controller {

	public $prefix, $table, $aktifmenu, $mainpage, $inpage;

function __construct(){
	parent::__construct();
	$this->prefix 		= 'tryload';
	$this->table 		= 'f'.$this->prefix;
	$this->menu  		= $this->prefix;
	$this->aktifmenu	= $this->prefix;
	$this->mainpage		= $this->prefix.'/v_'.$this->prefix;
	$this->inpage		= $this->prefix.'/v_'.$this->prefix.'_read';
	
}
	public function index()
	{
		$data['menu'] 		= $this->menu;
		$data['aktifmenu'] 	= $this->aktifmenu;
		$data['maindata'] 	= $this->Dbhelper->getdata($this->table);
		$data['recentpost'] = $this->Dbhelper->getdatalimit($this->table,10);
		$this->load->view($this->mainpage,$data);
    }
    
    public function read()
	{
    	$slug = $this->uri->segment(2);
		if ($slug === null); 
		$where = array('slug' => $slug);
		$data['menu'] 		= $this->menu;
		$data['aktifmenu'] 	= $this->aktifmenu;
		$data['maindata'] 	= $this->Dbhelper->getdatawlimit($this->table,$where,10);
		$data['recentpost'] = $this->Dbhelper->getdatalimit($this->table,10);
		$this->load->view($this->inpage,$data);
	}

	function genDummy(){
        $jumlah_data = 50;
        for ($i=1;$i<=$jumlah_data;$i++){
            $data   =   array(
                "judul"     =>  "Judul Ke-".$i,
                "artikel"   =>  "artikel ke-".$i,
                "ket"       =>  'lorem ipsum lorem ipsum');
            $this->db->insert($this->table,$data); 
        }
        echo $i.' Data Berhasil Di Insert';
    }


}
