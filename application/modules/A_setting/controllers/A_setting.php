<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_setting extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in_y');
        if($logged_in != "mskmi") {
            redirect('A_login');
        }else{
            $this->load->model('M_setting');
        }

    }
    /**
     |------------------------------------------------------------------------------------------------------------------
     |                                                  KATEGORI
     |------------------------------------------------------------------------------------------------------------------
     |
     */
    public function index(){
        $data['data']       = $this->M_setting->select_data_setting();
        $this->load->view('header');
        $this->load->view('V_setting',$data);
        $this->load->view('footer');
    }    


    //------crud-----

        public function update_data_setting(){
            $this->M_setting->update_data_setting();
        }

        public function select_data_partners(){
            $this->M_setting->select_data_partners();
        }
        public function insert_data_partners(){
            $this->M_setting->insert_data_partners();
        }
        public function update_data_partners(){
            $this->M_setting->update_data_partners();
        }
        public function delete_data_partners(){
            $this->M_setting->delete_data_partners();
        }

}
?>