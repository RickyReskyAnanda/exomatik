<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_beranda extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
    
    }
    public function index(){
        $this->load->model('M_beranda');

        $data = array();
        $data['navbar']='beranda';
        $data['konten']=$this->M_beranda->select_data_konten('id_konten',10);
        $data['populer']=$this->M_beranda->select_data_konten('viewers',3);
        $data['terkomentari']=$this->M_beranda->select_data_konten('komentar',3);
        $this->load_view('V_beranda',$data);
    }  
    public function view_web_dev(){
        $data = array('navbar' => 'beranda');
        $this->load_view('V_developer',$data);
    }  
}?>