<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_konten extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_konten(){
        
        $mulai = $this->input->post('mulai');
        if($mulai!=0){
            $mulai=$mulai*10;
        }
        $this->db->select('id_konten,judul_konten,table_konten.status,viewers,table_konten.id_anggota,likers,viewers,tgl_rilis,nama');
        $this->db->join('table_anggota', 'table_anggota.id_anggota = table_konten.id_anggota');
        $this->db->order_by('id_konten', 'DESC');
        $this->db->limit(10,$mulai);
        $data = $this->db->get('table_konten')->result();

        echo json_encode($data);
    }
    public function select_data_jumlah_konten(){
        echo $this->db->get('table_konten')->num_rows();
    }

    public function select_data_edit_konten(){
        $id_konten = $this->uri->segment(4);

        $this->db->where('id_konten',$id_konten);
        return $this->db->get('table_konten')->row_array();
    }


    public function insert_data_konten(){
        $gambar = null;
        if($_FILES['gambar']['name']){
            $this->load->library('image_lib');
            
            $nmfile = "konten_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'image/gambar_konten/'; //path folder
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
            $config['height']           = '800';
            $config['quality']          = '95';
            $this->image_lib->initialize($config);
            $this->image_lib->resize();

            $config['create_thumb']     = true;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '250';
            $config['height']           = '250';
            $config['quality']          = '90';
            $config['new_image']        = $this->upload->upload_path.'/thumb/'.$this->upload->file_name;
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
        }  

        $data = array(
            'judul_konten'  => $this->input->post('judul_konten'),
            'deskripsi'     => $this->input->post('deskripsi'),
            'isi_konten'    => $this->input->post('content'),
            'gambar'        => $gambar, 
            'status'        => "rilis",
            'tgl_rilis'     => date('Y-m-d h:i:s'),
            'tag'           => $this->input->post('tag'),
            'id_anggota'       => $this->session->userdata('identitas'),
            'viewers'       => 0,
            'likers'        => 0,
        );

        $this->db->insert('table_konten',$data);
        redirect('admin/konten');
    }

    public function update_data_konten(){
        $val = array();
        if($_FILES['gambar']['name']){
            $this->load->library('image_lib');
            
            $nmfile = "konten_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'image/gambar_konten/'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px
           

            $this->load->library('upload', $config);
            $this->upload->do_upload('gambar');
            $data   = $this->upload->data();
            $val['gambar'] = $data['file_name'];

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '800';
            $config['height']           = '800';
            $config['quality']          = '95';
            $this->image_lib->initialize($config);
            $this->image_lib->resize();

            $config['create_thumb']     = true;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '250';
            $config['height']           = '250';
            $config['quality']          = '90';
            $config['new_image']        = $this->upload->upload_path.'/thumb/'.$this->upload->file_name;
            $this->image_lib->initialize($config);
            $this->image_lib->resize();

            unlink('image/gambar_konten/'.$this->input->post('gambar_lama'));
            unlink('image/gambar_konten/thumb/'.$this->input->post('gambar_lama'));
        }


        
        $val['judul_konten']    = $this->input->post('judul_konten');
        $val['deskripsi']       = $this->input->post('deskripsi');
        $val['isi_konten']      = $this->input->post('content');
        $val['status']          = $this->input->post('status');
        $val['tag']             = $this->input->post('tag');

        $this->db->where('id_konten',$this->input->post('id_konten'));
        $this->db->update('table_konten',$val);
        redirect('admin/konten');
    }

    public function delete_data_konten(){ //hapus data rilis
        $id=$this->input->post('id');
        $this->db->select('gambar');
        $this->db->where('id_konten',$id);
        $data = $this->db->get('table_konten')->row_array();
        
        unlink("image/gambar_konten/".$data['gambar']);
        unlink("image/gambar_konten/thumb/".$data['gambar']);

        $this->db->where('id_konten', $id);
        $this->db->delete('table_konten');
    }
}
?>