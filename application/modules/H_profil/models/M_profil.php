<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_struktur(){
        $this->db->join('table_anggota', 'table_anggota.id_anggota = table_struktur.id_anggota');
        $data =  $this->db->get('table_struktur')->result_array();
        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['foto'] = base_url()."image/gambar_anggota/".$data[$i]['foto'];
        }
        return $data;
    }
   
}
?>