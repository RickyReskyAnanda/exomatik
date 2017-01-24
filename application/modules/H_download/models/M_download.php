<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_download extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_download(){
        $this->db->order_by('tgl_input','DESC');
        return $this->db->get('table_download')->result_array();
    }

    public function select_jenis_download(){
        $this->db->select('jenis');
        $this->db->distinct();
        return $this->db->get('table_download')->result_array();
    }
   
}
?>