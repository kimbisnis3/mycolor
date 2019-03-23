<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Produk extends CI_Controller {

	public $table       = 'm_produk';
	public $aktifmenu	= 'produk';
	public $menu       	= 'produk';
	public $mainpage	= 'produk/v_produk';
	public $inpage		= 'produk/v_produk_list';
	public $detpage		= 'produk/v_produk_det';

function __construct(){
	parent::__construct();
	
}
	public function index()
	{
		$page 	= ($this->input->get('page') == '' || $this->input->get('page') == null) ? 1 : $this->input->get('page');
		$limit 	= 16;
		$offset = ($page - 1) * $limit;
		$data['countdata'] 	= $this->db->query("select * from m_ktgproduk where aktif = 1 ")->num_rows();
		$data['maindata'] 	= $this->db->query("select * from m_ktgproduk where aktif = 1 LIMIT {$limit} OFFSET {$offset}")->result();
		$data['currentpage']= $page;
		$data['limit'] 		= $limit;
		$data['numofpage'] 	= ceil($data['countdata'] / $limit);
		$data['menu'] 		= $this->menu;
		$data['aktifmenu'] 	= $this->aktifmenu;
		if ($data['countdata'] > 0) {
			$this->load->view($this->mainpage,$data);
		} else {
			$this->load->view('template/datakosong');
		}
    }

    public function list_item($id=null)
	{
		$page 	= ($this->input->get('page') == '' || $this->input->get('page') == null) ? 1 : $this->input->get('page');
		$limit 	= 16;
		$offset = ($page - 1) * $limit;
		$data['countdata'] 	= $this->db->query("select * from m_produk where aktif = 1 and ref_ktgproduk = {$id}")->num_rows();
		$data['maindata'] 	= $this->db->query("select * from m_produk where aktif = 1 and ref_ktgproduk = {$id} LIMIT {$limit} OFFSET {$offset}")->result();
		$data['ktgproduk'] 	= $this->db->query("select * from m_ktgproduk where id = {$id}")->row();
		$data['currentpage']= $page;
		$data['limit'] 		= $limit;
		$data['numofpage'] 	= ceil($data['countdata'] / $limit);
		$data['menu'] 		= $this->menu;
		$data['aktifmenu'] 	= $this->aktifmenu;
		if ($data['countdata'] > 0) {
			$this->load->view($this->inpage,$data);
		} else {
			$this->load->view('template/datakosong');
		}
	}

	public function detail($slug=null)
	{
		$data['countdata'] 	= $this->db->query("select * from m_produk where aktif = 1 and slug = '{$slug}'")->num_rows();
		$data['maindata'] 	= $this->db->query("select * from m_produk where aktif = 1 and slug = '{$slug}'")->row();
		$data['ktgproduk'] 	= $this->db->query("select * from m_ktgproduk where id = {$data['maindata']->ref_ktgproduk}")->row();
		$data['menu'] 		= $this->menu;
		$data['aktifmenu'] 	= $this->aktifmenu;
		if ($data['countdata'] > 0) {
			$this->load->view($this->detpage,$data);
		} else {
			$this->load->view('template/datakosong');
		}
	}


}
