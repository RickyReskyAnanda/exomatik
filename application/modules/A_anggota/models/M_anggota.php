<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anggota extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_anggota(){
        $this->db->where('status',$this->input->post('sts'));
        $this->db->order_by('angkatan', 'desc');
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
        $this->load->library('image_lib');
    	$gambar = "";
        if($_FILES['foto']['name']){
            $nmfile = "anggota_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
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

            $config1['create_thumb']     = false;
            $config1['image_library']    = 'gd2';
            $config1['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config1['maintain_ratio']   = true;
            $config1['width']            = '300';
            $config1['height']           = '300';
            $config1['quality']          = '100';
            $this->image_lib->initialize($config1);
            $this->image_lib->resize();
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
    		'userlevel' 		=> $this->input->post('userlevel'),
            'foto'          => $gambar,
    		'konfirmasi'    => '0',
    	);

    	$this->db->insert('table_anggota',$data);

    	redirect('admin/anggota');
    }

    public function update_data_anggota(){
    	$gambar = "";
        if($_FILES['foto']['name']){
            $nmfile = "anggota_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
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

            $file = "image/gambar_anggota/".$img;
            unlink($file);

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
                'userlevel'        => $this->input->post('userlevel'),
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
                'userlevel'        => $this->input->post('userlevel'),
	    	);
        }

    	

    	$this->db->where('id_anggota',$this->input->post('id_anggota'));
    	$this->db->update('table_anggota',$data);

    	redirect('admin/anggota');
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