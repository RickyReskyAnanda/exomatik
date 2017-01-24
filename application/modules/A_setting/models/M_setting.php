<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_setting extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_setting(){//mengambil semua data dari table
        $this->db->where('id',1);
        return $this->db->get('table_setting')->row_array();
    }

    public function update_data_setting(){
        $data = array(
            'no_telp'   => $this->input->post('no_telp'),
            'email'     => $this->input->post('email'),
            'facebook'  => $this->input->post('facebook'),
            'twitter'   => $this->input->post('twitter'), 
            'instagram' => $this->input->post('instagram'),
            'line'      => $this->input->post('line')
            );

        $this->db->where('id',1);
        $this->db->update('table_setting',$data);
        redirect('A_setting');
    }

    public function select_data_partners(){//mengambil semua data dari table
        echo json_encode($this->db->get('table_partners')->result());
    }
    public function insert_data_partners(){
        $val = json_decode(file_get_contents('php://input'));
        $data = array(
            'nama'      => $val->data->nama,
            'link'      => $val->data->link
        );
        $this->db->insert('table_partners',$data);

        //mengambil id_kategori data yang barusan diinput
        $this->db->select_max('id');
        $a=$this->db->get('table_partners')->row_array();
        echo $a['id'];
    }

    public function update_data_partners(){
        $val = json_decode(file_get_contents('php://input'));
        $data = array(
            'nama'      => $val->data->nama,
            'link'      => $val->data->link
        );

        $this->db->where('id',$val->id);
        if($this->db->update('table_partners',$data)){
            echo "Berhasil Mengedit Data";
        }else{
            echo "Gagal Mengedit Data";
        }
    }

    public function delete_data_partners(){ //hapus data rilis
        $val = json_decode(file_get_contents('php://input'));

        $this->db->where('id', $val->id);
        if($this->db->delete('table_partners')){
            echo "Berhasil Menghapus Data";
        }else{
            echo "Gagal Menghapus Data";
        }
    }
}
?>