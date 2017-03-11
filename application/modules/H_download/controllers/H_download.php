<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_download extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_download');
    
    }
    public function index(){
        $data['seo']['title_h']        = 'Download - Exomatik';
        $data['seo']['link_h']         = 'http://exomatik.com/download';
        $data['seo']['gambar_thumb_h'] = base_url().'sets/img/exo/Logo.png';
        $data['seo']['penjelasan_h']   = 'Download file pendukung di link download Exomatik.com';

		$data['navbar']='download'; 
		$data['data'] = $this->M_download->select_data_download();   	
        $this->load_view('V_download',$data);
    }  
}
?>