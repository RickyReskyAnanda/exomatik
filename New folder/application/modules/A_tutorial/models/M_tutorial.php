<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tutorial extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_tutorial(){
        $this->db->order_by('tgl_rilis', 'DESC');
//            $this->db->limit(5,0); //("jumlah data","mulai dari")
        $data = $this->db->get('table_tutorial')->result();

        for($i=0;$i<count($data);$i++){
        	$this->db->select('nama_lengkap');
        	$this->db->where('id_user',$data[$i]->id_user);
        	$val = $this->db->get('table_user')->row_array();

        	if($val){
        		$data[$i]->nama_user = $val['nama_lengkap'];
        	}else{
        		$data[$i]->nama_user = "Admin";
        	}
        }

        echo json_encode($data);
    }
    public function select_data_tambah_tutorial(){
        $this->db->distinct();
        $this->db->select('judul_utama');
        return $this->db->get('table_tutorial')->result();
    } 

    public function select_data_edit_tutorial(){
        $id_tutorial = $this->uri->segment(3);

        $this->db->where('id_tutorial',$id_tutorial);
        $data = $this->db->get('table_tutorial')->row_array();

        $this->db->distinct();
        $this->db->select('judul_utama');
        $data['judul']= $this->db->get('table_tutorial')->result_array();
        return $data;
    }   


    public function insert_data_tutorial(){
        if($this->input->post('judul_utama_lama')!="0"){
            $judul_utama=$this->input->post('judul_utama_lama');
        }else{
            $judul_utama=$this->input->post('judul_utama_baru');
        }

        $data = array(
            'judul_utama'       => $judul_utama,
            'judul_tutorial'    => $this->input->post('judul_tutorial'),
            'deskripsi'         => $this->input->post('deskripsi'),
            'isi_tutorial'      => $this->input->post('content'),
            'tgl_rilis'         => date('Y-m-d'),
            'id_user'           => $this->session->userdata('identitas')
        );
        $this->db->insert('table_tutorial',$data);
        redirect('A_tutorial');
    }

    public function update_data_tutorial(){
        
        if($this->input->post('judul_utama_lama')!="0"){
            $judul_utama=$this->input->post('judul_utama_lama');
        }else{
            $judul_utama=$this->input->post('judul_utama_baru');
        }

        $data = array(
            'judul_utama'       => $judul_utama,
            'judul_tutorial'    => $this->input->post('judul_tutorial'),
            'isi_tutorial'      => $this->input->post('content'),
            'tgl_rilis'         => date('Y-m-d'),
            'id_user'           => $this->session->userdata('identitas')
        );

        $this->db->where('id_tutorial',$this->input->post('id_tutorial'));
        $this->db->update('table_tutorial',$data);
        redirect('A_tutorial');
    }

    public function delete_data_tutorial(){ //hapus data rilis
        $val = json_decode(file_get_contents('php://input'));

        $this->db->where('id_tutorial', $val->id);
        if($this->db->delete('table_tutorial')){
            echo "Berhasil Menghapus Data";
        }else{
            echo "Gagal Menghapus Data";
        }
    }
}
?>