<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_konten extends MY_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_konten');
    }
    public function index(){
        $data['seo']['title_h']        = 'Konten - Exomatik.com';
        $data['seo']['link_h']         = 'http://exomatik.com/konten';
        $data['seo']['gambar_thumb_h'] = base_url().'sets/img/exo/Logo.png';
        $data['seo']['penjelasan_h']   = 'Daftar konten di Exomatik.com';

        $data['navbar']  = 'konten';
        $data['terbaru'] = $this->M_konten->select_data_konten('id_konten',7);
        $data['populer'] = $this->M_konten->select_data_konten('viewers',7);
        $data['terkomentari'] = $this->M_konten->select_data_konten('komentar',7);
        $this->load_view('V_konten',$data);
    } 
    public function view_detail_konten(){

        $data['navbar']  = 'konten';
        $data['terbaru'] = $this->M_konten->select_data_konten('id_konten',7);
        $data['populer'] = $this->M_konten->select_data_konten('viewers',7);
        $data['konten'] = $this->M_konten->select_data_detail_konten();

        $data['seo']['title_h']        = ucfirst($data['konten']['judul_konten']).' - Exomatik.com';
        $data['seo']['link_h']         = base_url().'konten/'.str_replace(" ","-",preg_replace('/[^A-Z a-z0-9\-]/','', strtolower($data['konten']['judul_konten']))).'/'.$data['konten']['id_konten'];
        $data['seo']['gambar_thumb_h'] = base_url().'image/gambar_konten/'.$data['konten']['gambar'];
        $data['seo']['penjelasan_h']   = ucfirst($data['konten']['deskripsi']);

        $this->load_view('V_detail_konten',$data);
    }   
}


?>