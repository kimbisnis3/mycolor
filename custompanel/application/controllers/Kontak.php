<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kontak extends CI_Controller {
    
    public $table       = 'x_gb';
    public $judul       = 'Kontak Kami';
    public $aktifgrup   = 'kontak';
    public $aktifmenu   = 'kontak';
    public $foldername  = 'kontak';
    public $indexpage   = 'kontak/v_kontak';
    function __construct() {
        parent::__construct();
        include(APPPATH.'libraries/sessionakses.php');
        $title      = $this->judul;
    }
    public function index(){
        $data['title']      = $this->judul;
        $data['aktifgrup']  = $this->aktifgrup;
        $data['aktifmenu']  = $this->aktifmenu;
        $title      = $this->judul;
        $this->load->view($this->indexpage, $data);  
    }

    public function setView(){
        $result     = $this->Unimodel->getdata($this->table);
        $list       = array();
        $no         = 1;
        foreach ($result as $r) {
            $row    = array(
                        "no"        => $no,
                        "datei"     => date('d M Y H:m', strtotime($r->datei)),
                        "nama"      => $r->nama,
                        "email"     => $r->email,
                        "alamat"    => $r->alamat,
                        "pesan"     => $r->pesan,
                        "action"    => btnd($r->id)
                        
            );
            $list[] = $row;
            $no++;
        }   
        echo json_encode(array('data' => $list));
    }

    public function hapus()
    {   
        $w['id'] = $this->input->post('id');
        $delete = $this->Unimodel->delete($this->table,$w);
        $r['sukses'] = ($delete > 0) ? 'success' : 'fail' ;
        echo json_encode($r);
    }
    
}