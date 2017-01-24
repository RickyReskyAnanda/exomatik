<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_dashboard extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in_y');
        if($logged_in != "mskmi") {
            redirect('A_login');
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
        $this->load->view('dashboard');
    }  

    //-------- CRUD DASHBOARD ------------
        public function select_jumlah_widget(){
            $this->M_dashboard->select_jumlah_widget();
        }
    
}
?>