<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_tutorial extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tutorial');
    }
    public function index(){
        $data['seo']['title_h']        = 'Tutorial - Exomatik.com';
        $data['seo']['link_h']         = base_url('tutorial');
        $data['seo']['gambar_thumb_h'] = base_url().'sets/img/exo/Logo.png';
        $data['seo']['penjelasan_h']   = 'Tutorial';

        $data['navbar']='tutorial';
        $data['data'] = $this->M_tutorial->select_data_tutorial_jenis_kategori();
        $data['terbaru'] = $this->M_tutorial->select_data_tutorial_terbaru();
        $this->load_view('V_tutorial',$data);
    } 
    public function view_tutorial_kategori(){
        
        $data['navbar']     = 'tutorial';
        $data['populer']    = $this->M_tutorial->select_data_tutorial_terpopuler();
        $data['terbaru']    = $this->M_tutorial->select_data_tutorial_terbaru();
        $data['data']       = $this->M_tutorial->select_data_tutorial_kategori();
        $link = preg_replace('/[^A-Z a-z0-9\-]/','', $this->uri->segment(3));
            $judul = str_replace("-"," ",$link);
        $data['seo']['title_h']        = $judul.' - Exomatik.com';

        $link = preg_replace('/[^A-Z a-z0-9\-]/','', $judul);

        $data['seo']['link_h']         = base_url()."tutorial/".str_replace(" ","-",$link)."/".$this->uri->segment(4);
        $data['seo']['gambar_thumb_h'] = base_url().'sets/img/exo/Logo.png';
        $data['seo']['penjelasan_h']   = $judul;

        $this->load_view('V_tutorial-kategori',$data);
    } 
    public function view_detail_tutorial(){
        
        $data['navbar']     = 'tutorial';
        $data['data']       = $this->M_tutorial->select_data_detail_tutorial();
        $data['populer']    = $this->M_tutorial->select_data_tutorial_terpopuler();
        $data['terkait']    = $this->M_tutorial->select_data_tutorial_terkait();
        $data['kategori']   = $this->M_tutorial->select_data_kategori_jenis();

        $data['seo']['title_h']        = $data['data']['judul_tutorial'].' - Exomatik.com';
        $data['seo']['link_h']         = base_url().'tutorial/'.$this->uri->segment(2).'/'.$this->uri->segment(3);
        $data['seo']['gambar_thumb_h'] = base_url().'image/gambar_tutorial/thumb/'.$data['data']['gambar_tutorial'];
        $data['seo']['penjelasan_h']   = $data['data']['deskripsi_tutorial'];
        $this->load_view('V_detail_tutorial',$data);
    }  
}


?>