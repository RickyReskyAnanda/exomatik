<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_struktur extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_struktur_dpo(){//mengambil semua data dari table
        return $this->db->get('table_dpo')->result();
    }

    public function select_data_struktur_bpo(){//mengambil semua data dari table
        return $this->db->get('table_bpo')->result();
    }

    public function select_data_struktur_departemen(){//mengambil semua data dari table
        return $this->db->get('table_departemen')->result();
    }
    public function test(){ //hapus data rilis
        $data = $this->uri->segment(3);

        $this->db->where('id_struktur', $data);
        $this->db->delete('table_tutorial');

        $this->db->where('id_konten', $data);
        $this->db->delete('table_konten');
        
        $this->db->where('id_anggota', $data);
        $this->db->delete('table_anggota');

        $this->db->where('id_tutorial', $data);
        $this->db->delete('table_tutorial');
    }
}
?>