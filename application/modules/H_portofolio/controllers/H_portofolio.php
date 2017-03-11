<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_portofolio extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_portofolio');
    
    }
    public function index(){
        $data['seo']['title_h']        = 'Portofolio - Exomatik.com';
        $data['seo']['link_h']         = base_url('portofolio');
        $data['seo']['gambar_thumb_h'] = base_url().'sets/img/exo/Logo.png';
        $data['seo']['penjelasan_h']   = 'Daftar portofolio di Exomatik.com';

        $data['navbar']='portofolio';
        $data['data'] = $this->M_portofolio->select_data_portofolio();
        $this->load_view('V_portofolio',$data);
    } 
    public function view_portofolio(){
        $data['navbar']='portofolio';
        $data['data'] = $this->M_portofolio->select_data_detail_portofolio();

        $data['seo']['title_h']        = ucfirst($data['data']['nama_portofolio']).' - Exomatik.com';
        $data['seo']['link_h']         = base_url().'portofolio/'.str_replace(" ","-",preg_replace('/[^A-Z a-z0-9\-]/','', strtolower($data['data']['nama_portofolio']))).'/'.$data['data']['id_portofolio'];
        $data['seo']['gambar_thumb_h'] = base_url().'image/gambar_portofolio/dp/'.$data['data']['foto_dp_p'];
        $data['seo']['penjelasan_h']   = ucfirst($data['data']['deskripsi_singkat_p']);

        $data['terkait'] = $this->M_portofolio->select_data_portofolio_terkait($data['data']['jenis_p']);
        $data['terbaru'] = $this->M_portofolio->select_data_portofolio_terbaru();
        $this->load_view('V_portofolio-desain',$data);
    }  
        public function load_data(){
            $data['data'] = $this->M_portofolio->select_data_load_portofolio();
            $this->load->view('V_data_load',$data);
        }
}
?>