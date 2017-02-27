<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_portofolio extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_portofolio');
    
    }
    public function index(){
        $data['navbar']='portofolio';
        $data['data'] = $this->M_portofolio->select_data_portofolio();
        $this->load_view('V_portofolio',$data);
    } 
    public function view_portofolio(){
        $data['navbar']='portofolio';
        $data['data'] = $this->M_portofolio->select_data_detail_portofolio();
        $data['terkait'] = $this->M_portofolio->select_data_portofolio_terkait($data['data']['jenis_p']);
        $data['terbaru'] = $this->M_portofolio->select_data_portofolio_terbaru();
        $this->load_view('V_portofolio-desain',$data);
    }  
        public function load_data(){
            $data['data'] = $this->M_portofolio->select_data_load_portofolio();
            $this->load->view('V_data_load',$data);
        }
}
?>