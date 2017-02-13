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

    public function insert_data_download(){
        $data = array(
            'nama'      => $this->input->post('nama'),
            'link'      => $this->input->post('link'),
            'nonaktif'  => $this->input->post('nonaktif'),
            'tgl_input' => date('Y-m-d h:i:s'),
        );
        $this->db->insert('table_download',$data);
    }

    public function update_data_download(){
        $val = json_decode(file_get_contents('php://input'));
        $data = array(
            'nama'      => $val->data->nama,
            'link'      => $val->data->link
        );

        $this->db->where('id',$val->id);
        if($this->db->update('table_download',$data)){
            echo "Berhasil Mengedit Data";
        }else{
            echo "Gagal Mengedit Data";
        }
    }

    public function delete_data_download(){ //hapus data rilis

        $this->db->where('id', $this->input->post('id'));
        $this->db->delete('table_download');
    }

}
?>