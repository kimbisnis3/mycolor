<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kontak extends CI_Controller {

	public $table       = 'x_gb';
	public $aktifmenu	= 'kontak';
	public $menu       	= 'kontak';
	public $mainpage	= 'kontak/v_kontak';
	public $inpage		= '';

function __construct(){
	parent::__construct();
	
}
	public function index()
	{
		$data['menu'] 		= $this->menu;
		$data['aktifmenu'] 	= $this->aktifmenu;

		$this->load->view($this->mainpage,$data);
    }

    public function pesan() 
    {
    	$d['nama']     	= $this->input->post('nama');
    	$d['alamat']	= $this->input->post('alamat');
    	$d['email']		= $this->input->post('email');
    	$d['pesan']		= $this->input->post('pesan');

    	$insert = $this->Unimodel->save($this->table,$d);

    	$r['sukses'] = ($insert > 0) ? 'success' : 'fail' ;
        echo json_encode($r);
    }


}
