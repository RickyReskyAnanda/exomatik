<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_jenis(){
        $this->db->order_by('waktu', 'DESC');
        $data = $this->db->get('table_jenis_tutorial')->result();
        echo json_encode($data);
    }
    public function select_data_edit_jenis(){
        $this->db->where('id_jenis_tutorial', $this->uri->segment(5));
        $data = $this->db->get('table_jenis_tutorial')->row_array();
        return $data;
    }
    public function insert_data_jenis(){
        $data['nama_jenis_tutorial']    = $this->input->post('nama_jenis_tutorial');
        $data['keterangan']             = $this->input->post('keterangan');
        $data['nonaktif']               = $this->input->post('nonaktif');
        $data['waktu']                  = date('Y-m-d h:i:s');
        $this->db->insert('table_jenis_tutorial',$data);
        redirect('admin/tutorial/');
    }
    public function update_data_jenis(){
        $data['nama_jenis_tutorial']    = $this->input->post('nama_jenis_tutorial');
        $data['keterangan']             = $this->input->post('keterangan');
        $data['nonaktif']               = $this->input->post('nonaktif');
        $this->db->where('id_jenis_tutorial',$this->input->post('id_jenis_tutorial'));
        $this->db->update('table_jenis_tutorial',$data);
        redirect('admin/tutorial/');
    }
    public function delete_data_jenis(){
        $this->db->where('id_jenis_tutorial',$this->input->post('id'));
        $this->db->delete('table_jenis_tutorial');
    }
}
?>