<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beranda extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_konten($order,$limit){//mengambil semua data dari table

        $this->db->select('id_konten,judul_konten,deskripsi,gambar,tag,tgl_rilis,id_user,komentar');
        $this->db->order_by($order, 'DESC');
        $this->db->limit($limit,0);
        $this->db->where('status','rilis');
        $data = $this->db->get('table_konten')->result_array();

        for ($i=0; $i < count($data); $i++){ 
            $data[$i]['link'] = base_url().'konten/'.$data[$i]['id_konten'].'/'.str_replace(" ","-",preg_replace('/[^A-Z a-z0-9\-]/','', strtolower($data[$i]['judul_konten'])));

            $data[$i]['tgl_rilis'] = date_format(date_create($data[$i]['tgl_rilis']), "d M Y, h:m ");

        }

        return $data;
    }

    public function insert_komentar(){
        $data=array(
            'nama'      => $this->input->post('nama'),
            'email'     => $this->input->post('email'),
            'komentar'  => $this->input->post('isi'),
            'status'    =>  'menunggu',
            'waktu'     => date('Y-m-d h:i:s'),
            );
        $this->db->insert('table_komentar',$data);
    }
   
}
?>