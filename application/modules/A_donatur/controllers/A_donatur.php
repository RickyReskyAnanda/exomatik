<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_donatur extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in_y');
        if($logged_in != "mskmi") {
            redirect('A_login');
        }else{
            $this->load->model('M_donatur');
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
        $this->load->view('V_donatur');
        $this->load->view('footer');
    }    

    public function tambah_data_donatur(){

        $this->load->view('header');
        $this->load->view('V_tambah_donatur');
        $this->load->view('footer');
    }    

    public function edit_data_donatur(){
        $data['data']       = $this->M_donatur->select_edit_data_donatur();
        $this->load->view('header');
        $this->load->view('V_edit_donatur',$data);
        $this->load->view('footer');
    }   


    //---------- CRUD --------------

        public function select_data_donatur(){
            $this->M_donatur->select_data_donatur();
        }
        public function status_data_donatur(){
            $this->M_donatur->status_data_donatur();
        }

        public function insert_data_donatur(){
            $this->M_donatur->insert_data_donatur();
        }

        public function update_data_donatur(){
            $this->M_donatur->update_data_donatur();
        }
        
        public function delete_data_donatur(){
            $this->M_donatur->delete_data_donatur();
        }
}
?>