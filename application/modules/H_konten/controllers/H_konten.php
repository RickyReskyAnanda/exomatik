<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_konten extends MY_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_konten');
    }
    public function index(){
        $data['navbar']  = 'beranda';
        $data['terbaru'] = $this->M_konten->select_data_konten('id_konten',7);
        $data['populer'] = $this->M_konten->select_data_konten('viewers',7);
        $data['terkomentari'] = $this->M_konten->select_data_konten('komentar',7);
        $this->load_view('V_konten',$data);
    } 
    public function view_detail_konten(){
        $data['navbar']  = 'beranda';
        $data['konten'] = $this->M_konten->select_data_detail_konten();
        $this->load_view('V_detail_konten',$data);
    }   
}


?>