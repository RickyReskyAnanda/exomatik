<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_user(){//mengambil semua data dari table
        echo json_encode($this->db->get('table_user')->result());
    }

    public function select_data_user_level(){//mengambil data berdasarkan divisi

        $val = json_decode(file_get_contents('php://input'));
        $this->db->where('level',$val->level);
        echo json_encode($this->db->get('table_user')->result());
    }

    public function select_jumlah_user(){
        $data[1]        = $this->db->query("SELECT count(*) as jumlah FROM table_user")->row_array();
        $data[2]        = $this->db->query("SELECT count(*) as jumlah FROM table_user  WHERE level='admin'")->row_array();
        $data[3]        = $this->db->query("SELECT count(*) as jumlah FROM table_user  WHERE level='user'")->row_array();

        $val['semua']   = $data[1]['jumlah'];
        $val['admin']   = $data[2]['jumlah'];
        $val['user']    = $data[3]['jumlah'];

        echo json_encode($val);
    }

    public function insert_data_user(){
        $val = json_decode(file_get_contents('php://input'));

        $data = array(
            'nama_lengkap'  => $val->user->nama_lengkap, 
            'password'      => md5($val->user->ps),
            'email'         => $val->user->email,
            'no_hp'         => $val->user->no_hp,
            'level'         => $val->user->level,
            );
        $this->db->insert('table_user',$data);

        $this->db->select_max('id_user');
        $a=$this->db->get('table_user')->row_array();
        echo $a['id_user'];
    }

    public function update_data_user(){
        $val = json_decode(file_get_contents('php://input'));
        $data = array(
            'nama_lengkap'  => $val->user->nama_lengkap, 
            'password'      => md5($val->user->ps),
            'email'         => $val->user->email,
            'no_hp'         => $val->user->no_hp,
            'level'         => $val->user->level,
            );

        $this->db->where('id_user',$val->id);
        if($this->db->update('table_user',$data)){
            echo "Berhasil Mengedit Data";
        }else{
            echo "Gagal Mengedit Data";
        }
    }

    public function delete_data_user(){ //hapus data rilis
        $val = json_decode(file_get_contents('php://input'));

        $this->db->where('id_user', $val->id);
        if($this->db->delete('table_user')){
            echo "Berhasil Menghapus Data";
        }else{
            echo "Gagal Menghapus Data";
        }
    }


}
?>