<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_struktur extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_struktur(){
        $this->db->join('table_anggota', 'table_anggota.id_anggota = table_struktur.id_anggota');
        $this->db->where('departemen',$this->input->post('dpt'));
        $data = $this->db->get('table_struktur')->result_array();
        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['foto'] = base_url()."image/gambar_anggota/".$data[$i]['foto'];
        }
        echo json_encode($data);
    }
     public function select_data_anggota(){

        $this->db->where('konfirmasi',0);
        $this->db->where('status','pengurus');
        $data = $this->db->get('table_anggota')->result_array();
        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['foto'] = base_url()."image/gambar_anggota/".$data[$i]['foto'];
        }
        echo json_encode($data);
    }
    public function insert_data_struktur(){
        $data['jabatan']    = $this->input->post('jbt');
        $data['departemen'] = $this->input->post('dpt');
        $data['id_anggota'] = $this->input->post('idg');
        $this->db->insert('table_struktur',$data);

        $val['konfirmasi'] = '1';
        $this->db->where('id_anggota',$this->input->post('idg'));
        $this->db->update('table_anggota',$val);
    }
    public function delete_data_struktur(){
        $this->db->where('id_struktur',$this->input->post('ids'));
        $this->db->delete('table_struktur');

        $data['konfirmasi'] = "0";
        $this->db->where('id_anggota',$this->input->post('idg'));
        $this->db->update('table_anggota',$data);

    }

}
?>