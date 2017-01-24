<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_struktur extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    //     $logged_in = $this->session->userdata('logged_in');
    //     if(!$logged_in) {
    //         redirect('A_admin');
    //     }else{
            $this->load->model('M_struktur');
    //     }

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
    public function tambah_data_struktur(){
        $data['jabatan'] = $this->M_struktur->select_pilihan_jabatan();
        
        $opsi = $this->uri->segment(3);

        $this->load->view('header');
        if($opsi=="dpo" || $opsi =="bpo"){
            $this->load->view('V_tambah_struktur',$data);    
        }else{
            $this->load->view('V_tambah_struktur_2',$data);
        }
        $this->load->view('footer');
    }
    public function edit_data_struktur(){
        $data['jabatan'] = $this->M_struktur->select_pilihan_jabatan();
        $data['data']    = $this->M_struktur->select_data_edit_struktur();
        $opsi = $this->uri->segment(3);

        $this->load->view('header');
        if($opsi=="dpo" || $opsi =="bpo"){
            $this->load->view('V_edit_struktur',$data);    
        }else{
            $this->load->view('V_edit_struktur_2',$data);
        }
        $this->load->view('footer');
    }

    public function test(){
        $file = "gambar_struktur/struktur_20161004031000.jpg";
        if (!unlink($file))
          {
          echo ("Error deleting $file");
          }
        else
          {
          echo ("Deleted $file");
          }
    }


    //--------CRUD------------
        public function select_data_struktur_dpo(){
            $this->M_struktur->select_data_struktur_dpo();
        }
        public function select_data_struktur_bpo(){
            $this->M_struktur->select_data_struktur_bpo();
        }
        public function select_data_struktur_departemen(){
            $this->M_struktur->select_data_struktur_departemen();
        }

        public function insert_data_struktur_inti(){
            $this->M_struktur->insert_data_struktur_inti();
        }
        public function insert_data_struktur_departemen(){
            $this->M_struktur->insert_data_struktur_departemen();
        }

        public function update_data_struktur_inti(){
            $this->M_struktur->update_data_struktur_inti();
        }
        public function update_data_struktur_departemen(){
            $this->M_struktur->update_data_struktur_departemen();
        }

        public function delete_data_struktur(){
            $this->M_struktur->delete_data_struktur();
        }
}
?>