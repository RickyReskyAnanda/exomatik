<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_proker extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in_y');
        if($logged_in != "mskmi") {
            redirect('A_login');
        }else{
            $this->load->model('M_proker');
        }

    }
    
    public function index(){
        $this->load->view('header');
        $this->load->view('V_proker');
        $this->load->view('footer');
    }   
    public function tambah_data_proker(){
        $this->load->view('header');
        $this->load->view('V_tambah_proker');
        $this->load->view('footer');
    } 
    public function edit_data_proker(){
        $data['data'] = $this->M_proker->select_data_edit_proker();
        $this->load->view('header');
        $this->load->view('V_edit_proker',$data);
        $this->load->view('footer');
    } 


    //-----CRUD PROKER------

        public function select_data_proker(){
            $this->M_proker->select_data_proker();
        }
        public function select_data_proker_divisi(){
            $this->M_proker->select_data_proker_divisi();
        }

        public function insert_data_proker(){
            $this->M_proker->insert_data_proker();
        }
        public function update_data_proker(){
            $this->M_proker->update_data_proker();
        }
        public function delete_data_proker(){
            $this->M_proker->delete_data_proker();
        }
    
}
?>