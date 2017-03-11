<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_profil extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        
    }
    public function view_sejarah(){
        $data['seo']['title_h']        = 'Tentang Exomatik Study Club - Exomatik.com';
        $data['seo']['link_h']         = base_url('tentang-kami');
        $data['seo']['gambar_thumb_h'] = base_url().'sets/img/exo/Logo.png';
        $data['seo']['penjelasan_h']   = 'Tentang Exomatik Study Club';
        $data['navbar']='profil';
        $this->load_view('V_sejarah',$data);
    }  
    public function view_struktur(){
        $data['seo']['title_h']        = 'Struktur Organisasi Exomatik Study Club - Exomatik.com';
        $data['seo']['link_h']         = base_url('struktur-organisasi');
        $data['seo']['gambar_thumb_h'] = base_url().'sets/img/exo/Logo.png';
        $data['seo']['penjelasan_h']   = 'Struktur organisasi Exomatik Study Club';
        $this->load->model('M_profil');
        $data['navbar']='profil';
        $data['data']=$this->M_profil->select_data_struktur();
        $this->load_view('V_struktur',$data);
    }  
    public function view_proker(){
        $data['seo']['title_h']        = 'Program Kerja Exomatik Study Club - Exomatik.com';
        $data['seo']['link_h']         = base_url('portofolio');
        $data['seo']['gambar_thumb_h'] = base_url().'sets/img/exo/Logo.png';
        $data['seo']['penjelasan_h']   = 'Program Kerja Exomatik Study Club';
        $data['navbar']='profil';
        $this->load_view('V_proker',$data);
    } 
    public function view_vm(){
        $data['seo']['title_h']        = 'Visi dan Misi Exomatik Study Club - Exomatik.com';
        $data['seo']['link_h']         = base_url('portofolio');
        $data['seo']['gambar_thumb_h'] = base_url().'sets/img/exo/Logo.png';
        $data['seo']['penjelasan_h']   = 'Visi dan Misi Exomatik Study Club';
        $data['navbar']='profil';
        $this->load_view('V_vm',$data);
    } 
}
?>