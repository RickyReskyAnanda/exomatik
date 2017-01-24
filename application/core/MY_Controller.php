<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    
    }
    public function load_view($page_isi,$data){
        $this->load->view('H_beranda/V_header',$data);
        $this->load->view($page_isi,$data);
        $this->load->view('H_beranda/V_footer');
    } 
}


?>