<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_portofolio extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_portofolio(){
        $seleksi = $this->uri->segment(2);
        if($seleksi !=''){
            $this->db->where('jenis_p',$seleksi);
        }
        $this->db->order_by('id_portofolio','DESC');
        $this->db->limit(12);
        $data = $this->db->get('table_portofolio')->result_array();

        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['foto_dp_p']  = base_url().'image/gambar_portofolio/dp/'.$data[$i]['foto_dp_p'];
             $link = preg_replace('/[^A-Z a-z0-9\-]/','', $data[$i]['nama_portofolio']);
            $data[$i]['link']       = base_url().'portofolio/'.str_replace(" ","-",$link).'/'.$data[$i]['id_portofolio'];
        }
        return $data;
    }

    public function select_data_load_portofolio(){

        $seleksi = $this->uri->segment(3);
        if($seleksi !='semua'){
            $this->db->where('jenis_p',$seleksi);
        }
        $this->db->order_by('id_portofolio','DESC');
        $this->db->limit(4,$this->uri->segment(4));
        $data = $this->db->get('table_portofolio')->result_array();

        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['foto_dp_p']  = base_url().'image/gambar_portofolio/dp/'.$data[$i]['foto_dp_p'];
            $link = preg_replace('/[^A-Z a-z0-9\-]/','', $data[$i]['nama_portofolio']);
            $data[$i]['link']       = base_url().'portofolio/'.str_replace(" ","-",$link).'/'.$data[$i]['id_portofolio'];
        }
        return $data;
    }

    public function select_data_detail_portofolio(){

        $id = $this->uri->segment(3);
        $this->db->where('id_portofolio',$id);
        $data = $this->db->get('table_portofolio')->row_array();

        $this->db->where('id_back',$id);
        $this->db->where('jenis','portofolio');
        $data['gambar'] = $this->db->get('table_foto')->result_array();

        for ($i=0; $i < count($data['gambar']); $i++){ 
            $data['gambar'][$i]['nama_foto']  = base_url().'image/gambar_portofolio/'.$data['gambar'][$i]['nama_foto'];
        }

        return $data;

    }

    public function select_data_portofolio_terkait($jenis){
        $this->db->where('jenis_p',$jenis);
        $this->db->order_by('id_portofolio','DESC');
        $this->db->limit(5);
        $data = $this->db->get('table_portofolio')->result_array();

        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['foto_dp_p']  = base_url().'image/gambar_portofolio/dp/'.$data[$i]['foto_dp_p'];
            $data[$i]['link']       = base_url().'portofolio/detail/'.$data[$i]['id_portofolio'];
        }
        return $data;
    }
    public function select_data_portofolio_terbaru(){
        $this->db->order_by('id_portofolio','DESC');
        $this->db->limit(4);
        $data = $this->db->get('table_portofolio')->result_array();

        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['foto_dp_p']  = base_url().'image/gambar_portofolio/dp/'.$data[$i]['foto_dp_p'];
            $link = preg_replace('/[^A-Z a-z0-9\-]/','', $data[$i]['nama_portofolio']);
            $data[$i]['link']       = base_url().'portofolio/'.str_replace(" ","-",$link).'/'.$data[$i]['id_portofolio'];
        }
        return $data;   
    }
    

}
?>