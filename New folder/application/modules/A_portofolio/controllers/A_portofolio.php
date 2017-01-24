<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_portofolio extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in_y');
        if($logged_in != "mskmi") {
            redirect('A_login');
        }else{
            $this->load->model('M_portofolio');
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
        $this->load->view('V_portofolio');
        $this->load->view('footer');
    }    

    // --- view CRUD ---
    public function tambah_data_portofolio(){
        $data['data']=$this->M_portofolio->select_max_angkatan();

        $this->load->view('header');
        $this->load->view('V_tambah_portofolio',$data);
        $this->load->view('footer');
    }

    public function edit_data_portofolio(){
        $this->load->view('header');
        $this->load->view('V_edit_portofolio');
        $this->load->view('footer');

    }

    //----CRUD ---------
        public function select_data_portofolio(){
            $this->M_portofolio->select_data_portofolio();
        }
        public function select_data_nama_anggota(){
            $this->M_portofolio->select_data_nama_anggota();
        }
        public function select_data_edit_anggota(){
            $this->M_portofolio->select_data_edit_anggota();
        }
        public function insert_data_portofolio(){
            $this->M_portofolio->insert_data_portofolio();
        }
        public function update_data_portofolio(){
            $this->M_portofolio->update_data_portofolio();
        }
        public function delete_data_portofolio(){
            $this->M_portofolio->delete_data_portofolio();
        }
    
}
?>