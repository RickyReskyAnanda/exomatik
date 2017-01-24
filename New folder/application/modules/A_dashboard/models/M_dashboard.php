<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_jumlah_widget(){
        $data[1]            =$this->db->query("SELECT count(*) as jumlah FROM table_konten  WHERE status='rilis'")->row_array();
        $data[2]            =$this->db->query("SELECT count(*) as jumlah FROM table_anggota")->row_array();
        $data[3]            =$this->db->query("SELECT count(*) as jumlah FROM table_proker")->row_array();
        $data[4]            =$this->db->query("SELECT count(*) as jumlah FROM table_portofolio")->row_array();
        $data[5]            =$this->db->query("SELECT count(*) as jumlah FROM table_proker where status='terlaksana'")->row_array();

        $val['konten']      = $data[1]['jumlah'];
        $val['anggota']     = $data[2]['jumlah'];
        $val['proker']      = $data[3]['jumlah'];
        $val['portofolio']  = $data[4]['jumlah'];
        $val['pro']         = $data[5]['jumlah'];

        echo json_encode($val);
    }
}
?>