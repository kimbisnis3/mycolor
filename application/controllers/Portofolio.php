<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Portofolio extends CI_Controller {

	public $table       = 'm_portofolio';
	public $aktifmenu	= 'portofolio';
	public $menu       	= 'portofolio';
	public $mainpage	= 'portofolio/v_portofolio';
	public $inpage		= 'portofolio/v_portofolio_list';
	public $detpage		= 'portofolio/v_portofolio_det';

function __construct(){
	parent::__construct();
	
}
	public function index()
	{
		$page 	= ($this->input->get('page') == '' || $this->input->get('page') == null) ? 1 : $this->input->get('page');
		$limit 	= 16;
		$offset = ($page - 1) * $limit;
		$data['countdata'] 	= $this->db->query("select * from m_portofolio where aktif = 1 ")->num_rows();
		$data['maindata'] 	= $this->db->query("select * from m_portofolio where aktif = 1 ")->result();
		$data['ktgportofolio'] 	= $this->db->query("SELECT DISTINCT
			m_ktgportofolio.judul, m_ktgportofolio.id
		FROM
			m_ktgportofolio
		LEFT OUTER JOIN m_portofolio ON m_portofolio.ref_ktgportofolio = m_ktgportofolio.id
		WHERE m_portofolio.aktif = 1")->result();
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
		$data['countdata'] 	= $this->db->query("select * from m_portofolio where aktif = 1 and ref_ktgportofolio = {$id}")->num_rows();
		$data['maindata'] 	= $this->db->query("select * from m_portofolio where aktif = 1 and ref_ktgportofolio = {$id} LIMIT {$limit} OFFSET {$offset}")->result();
		$data['ktgportofolio'] 	= $this->db->query("select * from m_ktgportofolio where id = {$id}")->row();
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
		$data['countdata'] 	= $this->db->query("select * from m_portofolio where aktif = 1 and slug = '{$slug}'")->num_rows();
		$data['maindata'] 	= $this->db->query("select * from m_portofolio where aktif = 1 and slug = '{$slug}'")->row();
		$data['ktgportofolio'] 	= $this->db->query("select * from m_ktgportofolio where id = {$data['maindata']->ref_ktgportofolio}")->row();
		$data['menu'] 		= $this->menu;
		$data['aktifmenu'] 	= $this->aktifmenu;
		if ($data['countdata'] > 0) {
			$this->load->view($this->detpage,$data);
		} else {
			$this->load->view('template/datakosong');
		}
	}


}
