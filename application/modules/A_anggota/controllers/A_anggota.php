<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_anggota extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in_y');
        if($logged_in != "mskmi") {
            redirect('A_login');
        }else{
            $this->load->model('M_anggota');
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
        $this->load->view('V_anggota');
        $this->load->view('footer');
    }    

    public function tambah_data_anggota(){

        $this->load->view('header');
        $this->load->view('V_tambah_anggota');
        $this->load->view('footer');
    }    

    public function edit_data_anggota(){
        $data['data']       = $this->M_anggota->select_edit_data_anggota();
        $this->load->view('header');
        $this->load->view('V_edit_anggota',$data);
        $this->load->view('footer');
    }   


    //---------- CRUD --------------

        public function select_data_anggota(){
            $this->M_anggota->select_data_anggota();
        }
        public function select_data_admin(){
            $this->M_anggota->select_data_admin();
        }
        public function status_data_anggota(){
            $this->M_anggota->status_data_anggota();
        }

        public function insert_data_anggota(){
            $this->M_anggota->insert_data_anggota();
        }

        public function update_data_anggota(){
            $this->M_anggota->update_data_anggota();
        }
        
        public function delete_data_anggota(){
            $this->M_anggota->delete_data_anggota();
        }
}
?>