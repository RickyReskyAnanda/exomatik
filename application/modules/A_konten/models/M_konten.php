<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_konten extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_konten(){
    	$this->db->select('id_konten,judul_konten,tgl_rilis,id_user');
        $this->db->order_by('id_konten', 'DESC');
//            $this->db->limit(5,0); //("jumlah data","mulai dari")
        $data = $this->db->get('table_konten')->result();

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

    public function select_data_edit_konten(){
        $id_konten = $this->uri->segment(3);

        $this->db->where('id_konten',$id_konten);
        return $this->db->get('table_konten')->row_array();
    }


    public function insert_data_konten(){
        $gambar = null;
        if($_FILES['gambar']['name']){
            
            $nmfile = "konten_".date("Ymdhms"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = './gambar_konten/'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px
           

            $this->load->library('upload', $config);
            $this->upload->do_upload('gambar');
            $data   = $this->upload->data();
            $gambar = $data['file_name'];

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '800';
            $config['height']           = '450';
            $config['quality']          = '100';
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();




        }  

        $data = array(
            'judul_konten'  => $this->input->post('judul_konten'),
            'deskripsi'     => $this->input->post('deskripsi'),
            'isi_konten'    => $this->input->post('content'),
            'gambar'        => $gambar, 
            'status'        => "rilis",
            'tgl_rilis'     => date('Y-m-d'),
            'tag'           => $this->input->post('tag'),
            'id_user'       => $this->session->userdata('identitas')
        );

        $this->db->insert('table_konten',$data);
        redirect('A_konten');
    }

    public function update_data_konten(){
        $gambar = null;
        if($_FILES['gambar']['name']){
            $nmfile = "konten_".date("Ymdhms"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'gambar_konten'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->do_upload('gambar');
            $data   = $this->upload->data();
            $gambar = $data['file_name'];

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '350';
            $config['height']           = '200';
            $config['quality']          = '100';
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $img=$this->input->post('gambar_lama');

            if($img != "empty.png"){
                $file = "gambar_konten/".$img;
                unlink($file);
            }

        }else{
            $gambar = $this->input->post('gambar_lama');
        }

        $data = array(
            'judul_konten'  => $this->input->post('judul_konten'),
            'deskripsi'     => $this->input->post('deskripsi'),
            'isi_konten'    => $this->input->post('content'),
            'gambar'        => $gambar, 
            'status'        => "rilis",
            'tgl_rilis'     => date('Y-m-d'),
            'tag'           => $this->input->post('tag'),
            'id_user'       => $this->session->userdata('identitas')
        );

        $this->db->where('id_konten',$this->input->post('id_konten'));
        $this->db->update('table_konten',$data);
        redirect('A_konten');
    }

    public function delete_data_konten(){ //hapus data rilis
        $val = json_decode(file_get_contents('php://input'));
        $this->db->select('gambar');
        $this->db->where('id_konten',$val->id);
        $data = $this->db->get('table_konten')->row_array();

        if($data['gambar'] != "empty.png"){
                $file = "gambar_konten/".$data['gambar'];
                if(!unlink($file)){echo "tidak ada file";}
            }

        $this->db->where('id_konten', $val->id);
        if($this->db->delete('table_konten')){
            echo "Berhasil Menghapus Data";
        }else{
            echo "Gagal Menghapus Data";
        }
    }
}
?>