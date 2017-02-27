<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_dashboard extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in_y');
        if($logged_in != "mskmi") {
            redirect('akses/masuk');
        }else{
            $this->load->model('M_dashboard');
        }

    }
    /**
     |------------------------------------------------------------------------------------------------------------------
     |                                                  KATEGORI
     |------------------------------------------------------------------------------------------------------------------
     |
     */

    public function index(){
        $this->load->view('header');
        $this->load->view('dashboard');
        $this->load->view('footer');
    }  

    //-------- CRUD DASHBOARD ------------
        public function select_jumlah_widget(){
            $this->M_dashboard->select_jumlah_widget();
        }
        public function select_data_saran(){
            $this->M_dashboard->select_data_saran();
        }
        public function update_data_saran(){
            $this->M_dashboard->update_data_saran();
        }
        public function delete_data_saran(){
            $this->M_dashboard->delete_data_saran();
        }
    
}
?>