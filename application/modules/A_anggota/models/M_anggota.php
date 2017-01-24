<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anggota extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_anggota(){
        echo json_encode($this->db->get('table_anggota')->result());
    }

    public function select_data_anggota_status(){
    	$val = json_decode(file_get_contents('php://input'));

    	$this->db->where('status',$val->status);
        echo json_encode($this->db->get('table_anggota')->result());
    }

    public function select_jumlah_anggota(){
    	$data[1]        =$this->db->query("SELECT count(*) as jumlah FROM table_anggota")->row_array();
        $data[2]        =$this->db->query("SELECT count(*) as jumlah FROM table_anggota WHERE status='pengurus'")->row_array();
        $data[3]        =$this->db->query("SELECT count(*) as jumlah FROM table_anggota WHERE status='anggota'")->row_array();

        $val['semua']   = $data[1]['jumlah'];
        $val['pengurus']= $data[2]['jumlah'];
        $val['anggota'] = $data[3]['jumlah'];

        echo json_encode($val);
    }

    public function select_jumlah_angkatan(){
    	$this->db->select_max('angkatan');
    	$angkatan = $this->db->get('table_anggota')->row_array();

    	return $angkatan['angkatan'];
    }

    public function select_edit_data_anggota(){
    	$id = $this->uri->segment(3);

    	$this->db->where('id_anggota',$id);
    	return $this->db->get('table_anggota')->row_array();
    }

    public function insert_data_anggota(){

    	$gambar = "";
        if($_FILES['foto']['name']){
            $nmfile = "anggota_".date("Ymdhms"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'gambar_anggota'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $data   = $this->upload->data();
            $gambar = $data['file_name'];
        }else{
        	$gambar = "empty.png";
        }

    	$data = array(
    		'nik' 			=> $this->input->post('nik'), 
    		'nama' 			=> $this->input->post('nama_lengkap'),
    		'jk' 			=> $this->input->post('jk'),
    		'tempat_lahir' 	=> $this->input->post('tempat_lahir'),
    		'tgl_lahir' 	=> $this->input->post('tgl_lahir'),
    		'no_hp' 		=> $this->input->post('no_hp'),
    		'angkatan' 		=> $this->input->post('angkatan'),
    		'status' 		=> $this->input->post('status'),
    		'foto' 			=> $gambar,
    	);

    	$this->db->insert('table_anggota',$data);

    	redirect('A_anggota');
    }

    public function update_data_anggota(){
    	$gambar = "";
        if($_FILES['foto']['name']){
            $nmfile = "anggota_".date("Ymdhms"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'gambar_anggota'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $data   = $this->upload->data();
            $gambar = $data['file_name'];

            $img=$this->input->post('img');

            if($img != "empty.png"){
                $file = "gambar_anggota/".$img;
                unlink($file);
            }

            $data = array(
	    		'nik' 			=> $this->input->post('nik'), 
	    		'nama' 			=> $this->input->post('nama_lengkap'),
	    		'jk' 			=> $this->input->post('jk'),
	    		'tempat_lahir' 	=> $this->input->post('tempat_lahir'),
	    		'tgl_lahir' 	=> $this->input->post('tgl_lahir'),
	    		'no_hp' 		=> $this->input->post('no_hp'),
	    		'angkatan' 		=> $this->input->post('angkatan'),
	    		'status' 		=> $this->input->post('status'),
	    		'foto' 			=> $gambar
	    	);
        }else{
        	$data = array(
	    		'nik' 			=> $this->input->post('nik'), 
	    		'nama' 			=> $this->input->post('nama_lengkap'),
	    		'jk' 			=> $this->input->post('jk'),
	    		'tempat_lahir' 	=> $this->input->post('tempat_lahir'),
	    		'tgl_lahir' 	=> $this->input->post('tgl_lahir'),
	    		'no_hp' 		=> $this->input->post('no_hp'),
	    		'angkatan' 		=> $this->input->post('angkatan'),
	    		'status' 		=> $this->input->post('status')
	    	);
        }

    	

    	$this->db->where('id_anggota',$this->input->post('id_anggota'));
    	$this->db->update('table_anggota',$data);

    	redirect('A_anggota');
    }

    public function delete_data_anggota(){ //hapus data rilis
        $val = json_decode(file_get_contents('php://input'));

        $this->db->select('foto');
        $this->db->where('id_anggota',$val->id);
        $data = $this->db->get('table_anggota')->row_array();

        if($data['foto'] != "empty.png"){
                $file = "gambar_anggota/".$data['foto'];
                if(!unlink($file)){echo "tidak ada file";}
            }

        $this->db->where('id_anggota', $val->id);
        if($this->db->delete('table_anggota')){
            echo "Berhasil Menghapus Data";
        }else{
            echo "Gagal Menghapus Data";
        }
    }

}
?>