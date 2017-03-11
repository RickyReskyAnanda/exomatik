<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pendaftaran extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_pendaftaran(){
        $this->db->order_by('id_pendaftaran', 'asc');
        $data = $this->db->get('table_pendaftaran')->result();
        echo json_encode($data);
    }
    public function delete_data_pendaftaran(){ //hapus data rilis
        $id = $this->input->post('id');

        $this->db->where('id_pendaftaran', $id);
        $this->db->delete('table_pendaftaran');
    }
}
?>