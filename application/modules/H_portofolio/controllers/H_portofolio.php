<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_portofolio extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
    
    }
    public function index(){
        $data['navbar']='portofolio';
        $this->load_view('V_portofolio',$data);
    } 
    public function view_portofolio(){
        $data['navbar']='portofolio';
        $this->load_view('V_portofolio-desain');
    }  
}
?>