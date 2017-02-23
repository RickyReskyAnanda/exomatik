<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anggota extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_anggota(){
        $this->db->where('status',$this->input->post('sts'));
        $data = $this->db->get('table_anggota')->result_array();

        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['foto'] = base_url()."image/gambar_anggota/".$data[$i]['foto'];
            $data[$i]['edit'] = base_url()."admin/anggota/edit/".$data[$i]['id_anggota'];
        }
        echo json_encode($data);
    }
    public function select_data_admin(){
        $this->db->where('userlevel','admin');
        $data = $this->db->get('table_anggota')->result_array();

        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['foto'] = base_url()."image/gambar_anggota/".$data[$i]['foto'];
        }
        echo json_encode($data);
    }

    public function status_data_anggota(){
        $data['status'] = $this->input->post('sts');
        $this->db->where('id_anggota',$this->input->post('id'));
        $this->db->update('table_anggota',$data);

        if($data['status']=='anggota'){
            $this->db->where('id_anggota',$this->input->post('id'));
            $this->db->delete('table_struktur');
        }
    }
    
    public function select_edit_data_anggota(){
    	$id = $this->uri->segment(4);

    	$this->db->where('id_anggota',$id);
    	return $this->db->get('table_anggota')->row_array();
    }

    public function insert_data_anggota(){

    	$gambar = "";
        if($_FILES['foto']['name']){
            $nmfile = "anggota_".date("Ymdhms"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'image/gambar_anggota'; //path folder
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
            'status'        => $this->input->post('status'),
            'email_anggota' => $this->input->post('email_user'),
            'pass_anggota'  => md5('anggota'),
    		'status' 		=> $this->input->post('userlevel'),
            'foto'          => $gambar,
    		'konfirmasi'    => '0',
    	);

    	$this->db->insert('table_anggota',$data);

    	redirect('A_anggota');
    }

    public function update_data_anggota(){
    	$gambar = "";
        if($_FILES['foto']['name']){
            $nmfile = "anggota_".date("Ymdhms"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'image/gambar_anggota'; //path folder
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
                $file = "image/gambar_anggota/".$img;
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
                'email_anggota' => $this->input->post('email_user'),
                'status'        => $this->input->post('userlevel'),
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
	    		'status' 		=> $this->input->post('status'),
                'email_anggota' => $this->input->post('email_user'),
                'status'        => $this->input->post('userlevel'),
	    	);
        }

    	

    	$this->db->where('id_anggota',$this->input->post('id_anggota'));
    	$this->db->update('table_anggota',$data);

    	redirect('A_anggota');
    }

    public function delete_data_anggota(){ //hapus data rilis

        $this->db->select('foto');
        $this->db->where('id_anggota',$this->input->post('id'));
        $data = $this->db->get('table_anggota')->row_array();

        if($data['foto'] != "empty.png"){
                $file = "image/gambar_anggota/".$data['foto'];
                if(!unlink($file)){echo "tidak ada file";}
            }

        $this->db->where('id_anggota', $this->input->post('id'));
        $this->db->delete('table_anggota');
        
        $this->db->where('id_anggota',$this->input->post('id'));
        $this->db->delete('table_struktur');
    }

}
?>