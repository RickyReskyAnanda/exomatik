<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_download extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_download');
    
    }
    public function index(){
		$data['navbar']='download'; 

		$data['data'] = $this->M_download->select_data_download();   	
		$data['jenis'] = $this->M_download->select_jenis_download();   	
        $this->load_view('V_download',$data);
    }  
}
?>