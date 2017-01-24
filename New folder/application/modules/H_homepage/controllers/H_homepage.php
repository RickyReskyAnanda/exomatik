<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_homepage extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
   
            $this->load->model('M_homepage');
            $this->load->model('M_struktur');
            $this->load->model('M_tutorial');

    }
    public function index(){
        $this->load->view('V_home');
    }
    // public function index(){
      

    //     $data['proker'] = $this->M_homepage->select_data_proker();
    //     $umum['umum']   = $this->M_homepage->select_data_umum();
    //     $data['komentar'] = $this->M_homepage->select_data_most_comment();
    //     $data['tutorial'] = $this->M_tutorial->select_data_homepage_tutorial();
    //     $this->load->view('homepage/V_header',$umum);
    //     $this->load->view('V_home',$data);
    //     $this->load->view('homepage/V_footer',$umum);
    // }   
    /**
    |-------------------------------------------------------------------------
    |                           KONTEN
    |-------------------------------------------------------------------------
    */

    public function detail_konten(){
        $data['konten'] = $this->M_homepage->select_data_view_konten();
        $umum['umum']   = $this->M_homepage->select_data_umum();
        $data['komentar'] = $this->M_homepage->select_data_most_comment();
        $this->load->view('homepage/V_header',$umum);
        $this->load->view('V_detail_konten',$data);
        $this->load->view('homepage/V_footer',$umum);
    }


    //crud
        public function select_data_konten(){
            $this->M_homepage->select_data_konten();
        }

        public function input_komentar(){
        $this->M_homepage->input_komentar();
    }
        

    /**
    |-------------------------------------------------------------------------
    |                           STRUKTUR ORGANISASI
    |-------------------------------------------------------------------------
    */

    public function struktur_organisasi(){
        $data['dpo']        = $this->M_struktur->select_data_struktur_dpo();
        $data['bpo']        = $this->M_struktur->select_data_struktur_bpo();
        $data['departemen'] = $this->M_struktur->select_data_struktur_departemen();
        $umum['umum']   = $this->M_homepage->select_data_umum();
        $this->load->view('homepage/V_header',$umum);
        $this->load->view('V_struktur_organisasi',$data);
        $this->load->view('homepage/V_footer',$umum);
    }


    /**
    |-------------------------------------------------------------------------
    |                           PORTOFOLIO
    |-------------------------------------------------------------------------
    */

    public function portfolio(){
        $data['data'] = $this->M_homepage->select_data_portfolio();
        $umum['umum']   = $this->M_homepage->select_data_umum();
        $this->load->view('homepage/V_header',$umum);
        $this->load->view('V_portfolio',$data);
        $this->load->view('homepage/V_footer',$umum);
    }

    public function jenis_portfolio(){
        $data['data'] = $this->M_homepage->select_data_jenis_portfolio();
        $umum['umum']   = $this->M_homepage->select_data_umum();
        $this->load->view('homepage/V_header',$umum);
        $this->load->view('V_portfolio',$data);
        $this->load->view('homepage/V_footer',$umum);
    }

    /**
    |-------------------------------------------------------------------------
    |                           DOWNLOAD
    |-------------------------------------------------------------------------
    */
    public function download(){
        $data['data'] = $this->M_homepage->select_data_download();
        $umum['umum']   = $this->M_homepage->select_data_umum();
        $this->load->view('homepage/V_header',$umum);
        $this->load->view('V_download',$data);
        $this->load->view('homepage/V_footer',$umum);
    }

    /**
    |-------------------------------------------------------------------------
    |                           PROKER
    |-------------------------------------------------------------------------
    */
    public function program_kerja(){
        $data['data'] = $this->M_homepage->select_data_proker_utama();
        $umum['umum']   = $this->M_homepage->select_data_umum();
        $this->load->view('homepage/V_header',$umum);
        $this->load->view('V_proker',$data);
        $this->load->view('homepage/V_footer',$umum);
    }
    public function detail_program_kerja(){
        $data['data'] = $this->M_homepage->select_data_detail_proker_utama();
        $umum['umum']   = $this->M_homepage->select_data_umum();
        $this->load->view('homepage/V_header',$umum);
        $this->load->view('V_detail_proker',$data);
        $this->load->view('homepage/V_footer',$umum);
    }

    /**
    |-------------------------------------------------------------------------
    |                           Visi-Misi
    |-------------------------------------------------------------------------
    */

    public function visi_misi(){
        $umum['umum']   = $this->M_homepage->select_data_umum();
        $this->load->view('homepage/V_header',$umum);
        $this->load->view('V_visi_misi');
        $this->load->view('homepage/V_footer',$umum);
    }

    public function test(){
        $this->M_struktur->test();
    }

    /**
    |-------------------------------------------------------------------------
    |                           Tutorial
    |-------------------------------------------------------------------------
    */

    public function tutorial(){
        $umum['umum']   = $this->M_homepage->select_data_umum();
        $data['data'] = $this->M_tutorial->select_data_menu_tutorial();

        $this->load->view('homepage/V_header',$umum);
        $this->load->view('V_tutorial',$data);
        $this->load->view('homepage/V_footer',$umum);
    }

    public function detail_tutorial(){
        $umum['umum']   = $this->M_homepage->select_data_umum();
        $data['data'] = $this->M_tutorial->select_data_detail_tutorial();

        $this->load->view('homepage/V_header',$umum);
        $this->load->view('V_detail_tutorial',$data);
        $this->load->view('homepage/V_footer',$umum);
    }

        public function select_data_tutorial(){
            $this->M_tutorial->select_data_tutorial();
        }


    public function web_developer(){
        $umum['umum']   = $this->M_homepage->select_data_umum();

        $this->load->view('homepage/V_header',$umum);
        $this->load->view('V_web_developer');
        $this->load->view('homepage/V_footer',$umum);
    }

    public function sejarah(){
        $umum['umum']   = $this->M_homepage->select_data_umum();
        $this->load->view('homepage/V_header',$umum);
        $this->load->view('V_sejarah');
        $this->load->view('homepage/V_footer',$umum);
    }

}
?>