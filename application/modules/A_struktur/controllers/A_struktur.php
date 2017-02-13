<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_struktur extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
   
            $this->load->model('M_struktur');

    }
    /**
     |------------------------------------------------------------------------------------------------------------------
     |                                                  KATEGORI
     |------------------------------------------------------------------------------------------------------------------
     |
     */
    public function index(){
        $this->load->view('header');
        $this->load->view('V_struktur');
        $this->load->view('footer');
    }    
    

    //--------CRUD------------
        public function select_data_struktur(){
            $this->M_struktur->select_data_struktur();
        }
        public function select_data_anggota(){
            $this->M_struktur->select_data_anggota();
        }
        public function insert_data_struktur(){
            $this->M_struktur->insert_data_struktur();
        }
        public function delete_data_struktur(){
            $this->M_struktur->delete_data_struktur();
        }
        
}
?>