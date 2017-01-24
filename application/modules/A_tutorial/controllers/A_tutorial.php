<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_tutorial extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in_y');
        if($logged_in != "mskmi") {
            redirect('A_login');
        }else{
            $this->load->model('M_tutorial');
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
        $this->load->view('V_tutorial');
        $this->load->view('footer');
    }    
    public function tambah_data_tutorial(){
        $data['data'] = $this->M_tutorial->select_data_tambah_tutorial();
        $this->load->view('header');
        $this->load->view('V_tambah_tutorial',$data);
        $this->load->view('footer');
    }
    public function edit_data_tutorial(){
        $data['data'] = $this->M_tutorial->select_data_edit_tutorial();
        $this->load->view('header');
        $this->load->view('V_edit_tutorial',$data);
        $this->load->view('footer');
    }


    //-----CRUD tutorial------
        public function select_data_tutorial(){
            $this->M_tutorial->select_data_tutorial();
        }
        public function insert_data_tutorial(){
            $this->M_tutorial->insert_data_tutorial();
        }
        public function update_data_tutorial(){
            $this->M_tutorial->update_data_tutorial();
        }
        public function delete_data_tutorial(){
            $this->M_tutorial->delete_data_tutorial();
        }

    
}
?>