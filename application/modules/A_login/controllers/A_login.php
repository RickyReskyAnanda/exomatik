<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_login');
    }

    public function index(){
        $logged_in = $this->session->userdata('logged_in_y');
        if($logged_in=="mskmi") {
            redirect('admin');
        }
        else {
            $this->load->view('V_login');
        }
    }

    public function login(){
        $this->M_login->login();
        $logged_in = $this->session->userdata('logged_in_y');
        if($logged_in=="mskmi"){
            redirect('admin');
        }else{
            redirect('akses/masuk');
        }
    }

    public function keluar() {
        $newdata = array('email','role','identitas');
        $this->session->unset_userdata($newdata);
        $this->session->unset_userdata('logged_in_y');

        redirect('akses/masuk');
    }
}
?>