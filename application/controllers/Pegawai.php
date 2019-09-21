<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller{
    
    function __construct(){
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('M_Jabatan');
    }

    public function index(){
        $data['jabatan'] = $this->M_Jabatan->_get_list_combo(); // combo jabatan
        $this->load->view('v_pegawai',$data);
    }
   
}
