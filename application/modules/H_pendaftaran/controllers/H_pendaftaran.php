<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_pendaftaran extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pendaftaran');
    
    }
    public function index(){
        $data['seo']['title_h']        = 'Exomatik';
        $data['seo']['link_h']         = 'http://exomatik.com';
        $data['seo']['gambar_thumb_h'] = base_url().'sets/img/exo/Logo.png';
        $data['seo']['penjelasan_h']   = 'Explorasi Solidaritas Mahasiswa Teknik Informatika';

        $data['navbar']='pendaftaran';
        $this->load_view('V_pendaftaran',$data);
    }
    public function  detail_pendaftaran(){
        $data['seo']['title_h']        = 'Exomatik';
        $data['seo']['link_h']         = 'http://exomatik.com';
        $data['seo']['gambar_thumb_h'] = base_url().'sets/img/exo/Logo.png';
        $data['seo']['penjelasan_h']   = 'Explorasi Solidaritas Mahasiswa Teknik Informatika';

        $data['navbar'] = 'pendaftaran';
        $data['profil'] = $this->M_pendaftaran->select_data_detail_pendaftaran();
        $this->load_view('V_pendaftaran_detail',$data);
    }
    public function edit_pendaftaran(){
        $data['seo']['title_h']        = 'Exomatik';
        $data['seo']['link_h']         = 'http://exomatik.com';
        $data['seo']['gambar_thumb_h'] = base_url().'sets/img/exo/Logo.png';
        $data['seo']['penjelasan_h']   = 'Explorasi Solidaritas Mahasiswa Teknik Informatika';

        $data['navbar'] = 'pendaftaran';
        $data['profil'] = $this->M_pendaftaran->select_data_detail_pendaftaran();
        $data['profil']['tgl'] = date_format(date_create($data['profil']['tanggal_lahir']), "d");
        $data['profil']['bln'] = date_format(date_create($data['profil']['tanggal_lahir']), "m");
        $data['profil']['thn'] = date_format(date_create($data['profil']['tanggal_lahir']), "Y");
        $this->load_view('V_pendaftaran_edit',$data);
    }
        public function insert_data_pendaftaran(){
            $this->M_pendaftaran->insert_data_pendaftaran();
        }
        public function update_data_pendaftaran(){
            $this->M_pendaftaran->update_data_pendaftaran();
        } 
}
?>