<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_download extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_download(){
        echo json_encode($this->db->get('table_download')->result());
    }
    public function select_jenis_download(){
        $this->db->select('jenis');
        $this->db->distinct();
        echo json_encode($this->db->get('table_download')->result());
    }

    public function insert_data_download(){
        $val = json_decode(file_get_contents('php://input'));
        $data = array(
            'nama'      => $val->data->nama,
            'link'      => $val->data->link,
            'jenis'      => $val->data->jenis,
        );
        $this->db->insert('table_download',$data);

        //mengambil id_kategori data yang barusan diinput
        $this->db->select_max('id');
        $a=$this->db->get('table_download')->row_array();
        echo $a['id'];
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
        $val = json_decode(file_get_contents('php://input'));

        $this->db->where('id', $val->id);
        if($this->db->delete('table_download')){
            echo "Berhasil Menghapus Data";
        }else{
            echo "Gagal Menghapus Data";
        }
    }

}
?>