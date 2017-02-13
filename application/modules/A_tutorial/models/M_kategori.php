<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_kategori_tambah_tutorial(){
        $this->db->order_by('waktu_kt', 'DESC');
        $this->db->where('id_jenis_tutorial',$_POST['id']);
        $data = $this->db->get('table_kategori_tutorial')->result();
        echo json_encode($data);
    }
    public function select_data_kategori_edit_tutorial($id){
        $this->db->order_by('waktu_kt', 'DESC');
        $this->db->where('id_jenis_tutorial',$id);
        $data = $this->db->get('table_kategori_tutorial')->result_array();
        return $data;
    }
//---------------------------------------------------------------------------------------
    public function select_data_kategori(){
        $this->db->join('table_jenis_tutorial', 'table_jenis_tutorial.id_jenis_tutorial = table_kategori_tutorial.id_jenis_tutorial');
        $this->db->order_by('waktu_kt', 'DESC');
        $data = $this->db->get('table_kategori_tutorial')->result();
        echo json_encode($data);
    }
    public function select_data_edit_kategori_tutorial(){
        $id = $this->uri->segment(5);
        $this->db->where('id_kt',$id);
        return $this->db->get('table_kategori_tutorial')->row_array();
    }
    public function select_data_jenis(){
        $this->db->select('id_jenis_tutorial,nama_jenis_tutorial');
        return $this->db->get('table_jenis_tutorial')->result_array();
    }
    public function insert_data_kategori(){
        $nama_gambar = null;
        if($_FILES['gambar_kt']['name']){
            
            $nmfile = "kt_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = './image/gambar_kt'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->do_upload('gambar_kt');
            $data_gambar   = $this->upload->data();
            $nama_gambar = $data_gambar['file_name'];

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '250';
            $config['height']           = '250';
            $config['quality']          = '100';
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
        }else{
            $nama_gambar='default.png';
        }

        $data['nama_kt']            = $this->input->post('nama_kt');
        $data['gambar_kt']          = $nama_gambar;
        $data['waktu_kt']           = date('Y-m-d h:i:s');
        $data['keterangan_kt']      = $this->input->post('keterangan_kt');
        $data['id_jenis_tutorial']  = $this->input->post('id_jenis_tutorial');
        $data['nonaktif_kt']        = $this->input->post('nonaktif_kt');
        $this->db->insert('table_kategori_tutorial',$data);
        redirect('admin/tutorial');
    }
    public function update_data_kategori(){
        $nama_gambar = null;
        $data= array();
        $gambar_kt = $this->input->post('gambar_kt_lama');
        if($_FILES['gambar_kt']['name']){
            
            $nmfile = "kt_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = './image/gambar_kt'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->do_upload('gambar_kt');
            $data_gambar   = $this->upload->data();
            $nama_gambar = $data_gambar['file_name'];

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '250';
            $config['height']           = '250';
            $config['quality']          = '100';
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            if($gambar_kt != 'default.png'){
                unlink('image/gambar_kt/'.$gambar_kt);
            }

            $data['gambar_kt'] = $nama_gambar;
        }

        $data['nama_kt']            = $this->input->post('nama_kt');
        $data['keterangan_kt']      = $this->input->post('keterangan_kt');
        $data['id_jenis_tutorial']  = $this->input->post('id_jenis_tutorial');
        $data['nonaktif_kt']        = $this->input->post('nonaktif_kt');

        $this->db->where('id_kt',$this->input->post('id_kt'));
        $this->db->update('table_kategori_tutorial',$data);
        redirect('admin/tutorial');
    }
    public function delete_data_kategori(){
        $this->db->where('id_kt',$this->input->post('id'));
        $this->db->delete('table_kategori_tutorial');
    }
}
?>