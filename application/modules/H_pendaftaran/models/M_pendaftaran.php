<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pendaftaran extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    // public function select_data_pendaftaran(){
    //     $data = $this->db->get('table_pendaftaran')->result_array();

    //     for ($i=0; $i < count($data); $i++) { 
    //         $data[$i]['nama_pendaftar'] = ucfirst($data['nama_pendaftar']);
    //     }
    //     return $data;
    // }

    public function insert_data_pendaftaran(){
        $data=array();
        if($_FILES['foto']['name']){
            $nmfile = "anggota_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'image/gambar_pendaftar'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $val   = $this->upload->data();
            $data['foto_profil'] = $val['file_name'];

            $this->load->library('image_lib');
            $config1['create_thumb']     = false;
            $config1['image_library']    = 'gd2';
            $config1['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config1['maintain_ratio']   = true;
            $config1['width']            = '400';
            $config1['height']           = '400';
            $config1['quality']          = '100';
            $this->image_lib->initialize($config1);
            $this->image_lib->resize();
        }


        $data['nama_lengkap']       = $this->input->post('nama_lengkap');
        $data['nama_panggilan']     = $this->input->post('nama_panggilan');
        $data['jk']                 = $this->input->post('jk');
        $data['tempat_lahir']       = $this->input->post('tempat_lahir');
        $data['tanggal_lahir']      = $this->input->post('tahun').'-'.$this->input->post('bulan').'-'.$this->input->post('tgl');
        $data['agama']              = $this->input->post('agama');
        $data['alamat']             = $this->input->post('alamat');
        $data['jurusan']            = $this->input->post('jurusan');
        $data['angkatan']           = $this->input->post('angkatan');
        $data['citacita']           = $this->input->post('citacita');
        $data['hobi']               = $this->input->post('hobi');
        $data['no_hp']              = $this->input->post('no_hp');
        $data['email']              = $this->input->post('email');
        $data['po']                 = $this->input->post('po');
        $data['alasan']             = $this->input->post('alasan');
        $this->db->insert('table_pendaftaran',$data);

        $this->db->where('nama_lengkap',$data['nama_lengkap']);
        $this->db->order_by('id_pendaftaran', 'desc');
        $this->db->limit(1);
        $hasil = $this->db->get('table_pendaftaran')->row_array();

        $this->session->set_flashdata('pesan_bio', 'Biodata berhasil disimpan !');

        redirect('pendaftaran/detail/'.$hasil['id_pendaftaran']);
    }

    public function select_data_detail_pendaftaran(){
        $this->db->where('id_pendaftaran',$this->uri->segment(3));
        $data = $this->db->get('table_pendaftaran')->row_array();
        return $data;
    }

    public function update_data_pendaftaran(){
        $id=$this->input->post('id_pendaftaran');
        $data=array();
        if($_FILES['foto']['name']){
            $nmfile = "anggota_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'image/gambar_pendaftar'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $val   = $this->upload->data();
            $data['foto_profil'] = $val['file_name'];

            $this->load->library('image_lib');
            $config1['create_thumb']     = false;
            $config1['image_library']    = 'gd2';
            $config1['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config1['maintain_ratio']   = true;
            $config1['width']            = '400';
            $config1['height']           = '400';
            $config1['quality']          = '100';
            $this->image_lib->initialize($config1);
            $this->image_lib->resize();

            unlink('image/gambar_pendaftar/'.$this->input->post('gambar_lama'));
        }


        $data['nama_lengkap']       = $this->input->post('nama_lengkap');
        $data['nama_panggilan']     = $this->input->post('nama_panggilan');
        $data['jk']                 = $this->input->post('jk');
        $data['tempat_lahir']       = $this->input->post('tempat_lahir');
        $data['tanggal_lahir']      = $this->input->post('tahun').'-'.$this->input->post('bulan').'-'.$this->input->post('tgl');
        $data['agama']              = $this->input->post('agama');
        $data['alamat']             = $this->input->post('alamat');
        $data['jurusan']            = $this->input->post('jurusan');
        $data['angkatan']           = $this->input->post('angkatan');
        $data['citacita']           = $this->input->post('citacita');
        $data['hobi']               = $this->input->post('hobi');
        $data['no_hp']              = $this->input->post('no_hp');
        $data['email']              = $this->input->post('email');
        $data['po']                 = $this->input->post('po');
        $data['alasan']             = $this->input->post('alasan');

        $this->db->where('id_pendaftaran',$id);
        $this->db->update('table_pendaftaran',$data);
 
        $this->session->set_flashdata('pesan_bio', 'Biodata berhasil diperbaharui !');

        redirect('pendaftaran/detail/'.$id);
    }

    
}
?>