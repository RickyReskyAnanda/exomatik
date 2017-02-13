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
            $this->load->model('M_kategori');
            $this->load->model('M_jenis');
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
        $data['jenis'] = $this->M_kategori->select_data_jenis();
        $this->load->view('header');
        $this->load->view('V_tambah_tutorial',$data);
        $this->load->view('footer');
    }
    public function edit_data_tutorial(){
        $data['data'] = $this->M_tutorial->select_data_edit_tutorial();
        $data['jenis'] = $this->M_kategori->select_data_jenis();
        $data['kategori'] = $this->M_kategori->select_data_kategori_edit_tutorial($data['data']['id_jt']);
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


    public function tambah_data_kategori(){
        $data['jenis'] = $this->M_kategori->select_data_jenis();
        $this->load->view('header');
        $this->load->view('V_tambah_kategori_tutorial',$data);
        $this->load->view('footer');
    }
    public function edit_data_kategori(){
        $data['data'] = $this->M_kategori->select_data_edit_kategori_tutorial();
        $data['jenis'] = $this->M_kategori->select_data_jenis();
        $this->load->view('header');
        $this->load->view('V_edit_kategori_tutorial',$data);
        $this->load->view('footer');
    }
//-----crud kategori---
        public function select_data_kategori_tambah_tutorial(){
            $this->M_kategori->select_data_kategori_tambah_tutorial();
        }
        public function select_data_kategori(){
            $this->M_kategori->select_data_kategori();
        }
        public function insert_data_kategori(){
            $this->M_kategori->insert_data_kategori();
        }
        public function update_data_kategori(){
            $this->M_kategori->update_data_kategori();
        }
        public function delete_data_kategori(){
            $this->M_kategori->delete_data_kategori();
        }
    

    public function tambah_data_jenis(){
        $this->load->view('header');
        $this->load->view('V_tambah_jenis_tutorial');
        $this->load->view('footer');
    }
    public function edit_data_jenis(){
        $data['data']=$this->M_jenis->select_data_edit_jenis();
        $this->load->view('header');
        $this->load->view('V_edit_jenis_tutorial',$data);
        $this->load->view('footer');
    }
    //-----crud jenis---
        public function select_data_jenis(){
            $this->M_jenis->select_data_jenis();
        }
        public function insert_data_jenis(){
            $this->M_jenis->insert_data_jenis();
        }
        public function update_data_jenis(){
            $this->M_jenis->update_data_jenis();
        }
        public function delete_data_jenis(){
            $this->M_jenis->delete_data_jenis();
        }

    
}
?>