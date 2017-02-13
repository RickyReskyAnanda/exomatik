<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_download extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in_y');
        if($logged_in != "mskmi") {
            redirect('A_login');
        }else{
            $this->load->model('M_download');
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
        $this->load->view('V_download');
        $this->load->view('footer');
    }    

    //---------- CRUD --------------

        public function select_data_download(){
            echo json_encode($this->M_download->select_data_download());
        }
        // public function select_jenis_download(){
        //     $this->M_download->select_jenis_download();
        // }

        public function insert_data_download(){
            $this->M_download->insert_data_download();
        }

        public function update_data_download(){
            $this->M_download->update_data_download();
        }
        
        public function delete_data_download(){
            $this->M_download->delete_data_download();
        }
}
?>