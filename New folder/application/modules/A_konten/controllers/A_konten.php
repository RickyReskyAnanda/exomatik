<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_konten extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in_y');
        if($logged_in != "mskmi") {
            redirect('A_login');
        }else{
            $this->load->model('M_konten');
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
        $this->load->view('V_konten');
        $this->load->view('footer');
    }    
    public function tambah_data_konten(){
        $this->load->view('header');
        $this->load->view('V_tambah_konten');
        $this->load->view('footer');
    }
    public function edit_data_konten(){
        $data['data'] = $this->M_konten->select_data_edit_konten();
        $this->load->view('header');
        $this->load->view('V_edit_konten',$data);
        $this->load->view('footer');
    }


    //-----CRUD KONTEN------
        public function select_data_konten(){
            $this->M_konten->select_data_konten();
        }
        public function insert_data_konten(){
            $this->M_konten->insert_data_konten();
        }
        public function update_data_konten(){
            $this->M_konten->update_data_konten();
        }
        public function delete_data_konten(){
            $this->M_konten->delete_data_konten();
        }

    
}
?>