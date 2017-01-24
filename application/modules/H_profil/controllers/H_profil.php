<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_profil extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
    
    }
    public function view_sejarah(){
        $data['navbar']='profil';
        $this->load_view('V_sejarah',$data);
    }  
    public function view_struktur(){
        $data['navbar']='profil';
        $this->load_view('V_struktur',$data);
    }  
    public function view_proker(){
        $data['navbar']='profil';
        $this->load_view('V_proker',$data);
    } 
    public function view_vm(){
        $data['navbar']='profil';
        $this->load_view('V_vm',$data);
    } 
}
?>