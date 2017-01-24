<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_donatur extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
    
    }
    public function index(){

		$data['navbar']='donatur';    	
        $this->load_view('V_donatur',$data);
    }  
}
?>