<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_user extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in_y');
        $role = $this->session->userdata('role');
        if($role =="admin"){
            if($logged_in != "mskmi") {
                redirect('A_login');
            }else{
                $this->load->model('M_user');
            }
        }else{
            redirect('A_login');
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
        $this->load->view('V_user');
        $this->load->view('footer');
    }    

    //-----CRUD Manajemen User-----------

        public function select_data_user(){
            $this->M_user->select_data_user();
        }
        public function select_data_user_level(){
            $this->M_user->select_data_user_level();
        }
        public function select_jumlah_user(){
            $this->M_user->select_jumlah_user();
        }
        public function insert_data_user(){
            $this->M_user->insert_data_user();
        }
        public function update_data_user(){
            $this->M_user->update_data_user();
        }
        public function delete_data_user(){
            $this->M_user->delete_data_user();
        }
    
}
?>