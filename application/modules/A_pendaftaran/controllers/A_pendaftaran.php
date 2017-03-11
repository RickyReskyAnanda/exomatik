<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_pendaftaran extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in_y');
        if($logged_in != "mskmi") {
            redirect('akses/masuk');
        }else{
            $this->load->model('M_pendaftaran');
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
        $this->load->view('V_pendaftaran');
        $this->load->view('footer');
    }    
    public function select_data_pendaftaran(){
        $this->M_pendaftaran->select_data_pendaftaran();
    }
    public function delete_data_pendaftaran(){
        $this->M_pendaftaran->delete_data_pendaftaran();
    }
    
}
?>