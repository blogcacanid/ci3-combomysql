<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Jabatan extends CI_Model {
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function _get_list_combo() {
        $this->db->select('jabatan_id, nama_jabatan');
        $this->db->order_by('level_jabatan');
        return $this->db->get('jabatan')->result();
    }

}    