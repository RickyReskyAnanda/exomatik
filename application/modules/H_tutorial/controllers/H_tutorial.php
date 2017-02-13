<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_tutorial extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tutorial');
    }
    public function index(){
        $data['navbar']='tutorial';
        $data['data'] = $this->M_tutorial->select_data_tutorial_jenis_kategori();
        $data['terbaru'] = $this->M_tutorial->select_data_tutorial_terbaru();

        $this->load_view('V_tutorial',$data);
    } 
    public function view_tutorial_kategori(){
        $data['navbar']='tutorial';
        $data['populer']    = $this->M_tutorial->select_data_tutorial_terpopuler();
        $data['terbaru'] = $this->M_tutorial->select_data_tutorial_terbaru();
        $data['data'] = $this->M_tutorial->select_data_tutorial_kategori();
        $this->load_view('V_tutorial-kategori',$data);
    } 
    public function view_detail_tutorial(){
        $data['navbar']     = 'tutorial';
        $data['data']       = $this->M_tutorial->select_data_detail_tutorial();
        $data['populer']    = $this->M_tutorial->select_data_tutorial_terpopuler();
        $data['terkait']    = $this->M_tutorial->select_data_tutorial_terkait();
        $data['kategori']   = $this->M_tutorial->select_data_kategori_jenis();
        $this->load_view('V_detail_tutorial',$data);
    }  
}


?>