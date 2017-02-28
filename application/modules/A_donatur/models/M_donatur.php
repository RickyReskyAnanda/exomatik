<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_donatur extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_donatur(){
        $donatur = $this->db->get('table_donatur')->result_array();
        for ($i=0; $i < count($donatur); $i++) { 
            $this->db->where('id_donatur',$donatur[$i]['id_donatur']);
            $this->db->where('tahun',date('Y'));
            $donatur[$i]['donasi'] = $this->db->get('table_donasi')->result_array();
            if(count($donatur[$i]['donasi'])>0){
                for ($a=0; $a < 12; $a++) {
                    for ($b=0; $b < count($donatur[$i]['donasi']); $b++) { 
                        if($donatur[$i]['donasi'][$b]['bulan']==$a+1){
                            $donatur[$i]['hasil'][$a+1]='fa-check-square-o';
                            break;
                        }else{
                            $donatur[$i]['hasil'][$a+1]='fa-minus-square-o';
                        }
                    } 
                }
            }elseif(count($donatur[$i]['donasi'])<1){
                for ($x=1; $x <= 12; $x++) { 
                    $donatur[$i]['hasil'][$x]='fa-minus-square-o';
                }
            }
            
        }
        // print_r($donatur);die;
        return $donatur;
    }

    public function select_data_detail_donatur(){
        $id=$this->uri->segment(4);

        $this->db->where('id_donatur', $id);
        $data =  $this->db->get('table_donatur')->row_array();

        $data['foto'] = base_url().'image/gambar_donatur/'.$data['foto_donatur'];
        $data['tgl_lahir_donatur'] = date_format(date_create($data['tgl_lahir_donatur']), "d M Y");

        return $data;
    }

    public function insert_data_donatur(){
        $data=array();
        $gambar = "";
        if($_FILES['foto']['name']){
            $this->load->library('image_lib');
            $nmfile = "donatur_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'image/gambar_donatur'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $val   = $this->upload->data();
            $data['foto_donatur'] = $val['file_name'];
        

            $config1['create_thumb']     = false;
            $config1['image_library']    = 'gd2';
            $config1['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config1['maintain_ratio']   = true;
            $config1['width']            = '250';
            $config1['height']           = '250';
            $config1['quality']          = '90';
            $this->image_lib->initialize($config1);
            $this->image_lib->resize();
        }

        $data['nama_donatur']           = $this->input->post('nama_donatur');
        $data['tgl_lahir_donatur']      = $this->input->post('tgl_lahir');
        $data['pekerjaan_donatur']      = $this->input->post('pekerjaan');
        $data['jk_donatur']             = $this->input->post('jk');
        $data['no_hp_donatur']          = $this->input->post('no_hp');
        $data['alamat_donatur']         = $this->input->post('alamat');
        $data['nominal_donatur']        = $this->input->post('nominal');
        $this->db->insert('table_donatur',$data);
        redirect('admin/donatur');
    }

    public function insert_data_donasi(){
        $data['id_donatur']     = $this->input->post('id_donatur');
        $data['tanggal']        = $this->input->post('tanggal');
        $data['bulan']          = $this->input->post('bulan');
        $data['tahun']          = $this->input->post('tahun');

        $this->db->insert('table_donasi',$data);
        redirect('admin/donatur/detail/'.$data['id_donatur']);
    }

}
?>