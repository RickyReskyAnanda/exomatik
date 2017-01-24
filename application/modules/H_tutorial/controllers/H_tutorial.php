<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_tutorial extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
    
    }
    public function index(){
        $data['navbar']='tutorial';
        $this->load_view('V_tutorial',$data);
    } 
    public function view_tutorial(){
        $data['navbar']='tutorial';
        $this->load_view('V_tutorial-kategori-webprogramming',$data);
    } 
    public function view_tutorial_isi(){
        $data['navbar']='tutorial';
        $this->load_view('V_tutorial-kategori-isi',$data);
    }  
}


?>