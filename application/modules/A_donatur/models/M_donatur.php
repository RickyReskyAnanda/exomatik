<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_donatur extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_donatur(){
        $this->db->where('status',$this->input->post('sts'));
        $data = $this->db->get('table_donatur')->result_array();

        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['foto'] = base_url()."image/gambar_donatur/".$data[$i]['foto'];
            $data[$i]['edit'] = base_url()."admin/donatur/edit/".$data[$i]['id_donatur'];
        }
        echo json_encode($data);
    }

    public function insert_data_donatur(){
    	print_r($_POST);die;
        $data=array();

        $data['nama_donatur']   = $this->input->post('nama_donatur');
        $data['tgl_lahir']      = $this->input->post('tgl_lahir');
        $data['pekerjaan']      = $this->input->post('pekerjaan');
        $data['jk']             = $this->input->post('jk');
        $data['no_hp']          = $this->input->post('no_hp');
        $data['alamat']         = $this->input->post('alamat');
    }

    public function update_data_donatur(){
    	$gambar = "";
        if($_FILES['foto']['name']){
            $nmfile = "donatur_".date("Ymdhms"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'image/gambar_donatur'; //path folder
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
                $file = "image/gambar_donatur/".$img;
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

    	

    	$this->db->where('id_donatur',$this->input->post('id_donatur'));
    	$this->db->update('table_donatur',$data);

    	redirect('A_donatur');
    }

    public function delete_data_donatur(){ //hapus data rilis

        $this->db->select('foto');
        $this->db->where('id_donatur',$this->input->post('id'));
        $data = $this->db->get('table_donatur')->row_array();

        if($data['foto'] != "empty.png"){
                $file = "image/gambar_donatur/".$data['foto'];
                if(!unlink($file)){echo "tidak ada file";}
            }

        $this->db->where('id_donatur', $this->input->post('id'));
        $this->db->delete('table_donatur');
        
        $this->db->where('id_donatur',$this->input->post('id'));
        $this->db->delete('table_struktur');
    }

}
?>