<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_download extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
    
    }
    public function index(){
		$data['navbar']='download';    	
        $this->load_view('V_download',$data);
    }  
}
?>