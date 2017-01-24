<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tutorial extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_tutorial(){//mengambil semua data dari table

        $val = json_decode(file_get_contents('php://input'));
        $this->db->select('id_tutorial,judul_tutorial,deskripsi,judul_utama,tgl_rilis');
        $this->db->order_by('tgl_rilis', 'DESC');
        $this->db->limit($val->level);
        $data = $this->db->get('table_tutorial')->result();

        for ($i=0; $i < count($data); $i++){ 
            $data[$i]->link = str_replace(" ","-",$data[$i]->judul_tutorial);
        }

        echo json_encode($data);
    }
    public function select_data_view_tutorial(){
        $id     = $this->uri->segment(2);
        $this->db->where('id_tutorial',$id);
        $data   = $this->db->get('table_tutorial')->row_array();

        if($data['tag']){
            $data['tag'] = explode(',',$data['tag']);
        }
        
        $this->db->select('nama_lengkap');
        $this->db->where('id_user',$data['id_user']);
        $user = $this->db->get('table_user')->row_array();
        

        if($user){
            $data['penulis'] = strtoupper($user['nama_lengkap']);
        }else{
            $data['penulis'] = "ADMIN";
        }

        return $data;
    }

    public function select_data_menu_tutorial(){
        $this->db->distinct();
        $this->db->select('judul_utama');
        $data['judul'] = $this->db->get('table_tutorial')->result_array();

        $this->db->select('id_tutorial,judul_tutorial,judul_utama');
        $data['menu']=$this->db->get('table_tutorial')->result_array();

        for ($i=0; $i < count($data['menu']); $i++){ 
            $data['menu'][$i]['link']= str_replace(" ","-",$data['menu'][$i]['judul_tutorial']);
        }

        return $data;
    }

    public function select_data_detail_tutorial(){
        $id = $this->uri->segment(2);
        $this->db->where('id_tutorial',$id);
        $data = $this->db->get('table_tutorial')->row_array();
        
        $this->db->select('nama_lengkap');
        $this->db->where('id_user',$data['id_user']);
        $user = $this->db->get('table_user')->row_array();
        

        if($user){
            $data['penulis'] = strtoupper($user['nama_lengkap']);
        }else{
            $data['penulis'] = "ADMIN";
        }

        $this->db->select('id_tutorial,judul_tutorial,judul_utama');
        $this->db->where('judul_utama',$data['judul_utama']);
        $data['menu'] = $this->db->get('table_tutorial')->result_array();

        for ($i=0; $i < count($data['menu']); $i++){ 
            $data['menu'][$i]['link']= str_replace(" ","-",$data['menu'][$i]['judul_tutorial']);
        }
        return $data;
    }

// fungsi di menu tutorial homepage
    public function select_data_homepage_tutorial(){//mengambil semua data dari table

        $this->db->select('id_tutorial,judul_tutorial');
        $this->db->order_by('tgl_rilis', 'DESC');
        $this->db->limit(7);
        $data = $this->db->get('table_tutorial')->result();

        for ($i=0; $i < count($data); $i++){ 
            $data[$i]->link = str_replace(" ","-",$data[$i]->judul_tutorial);
        }

        return $data;
    }
}
?>