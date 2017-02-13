<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tutorial extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_tutorial(){
        $this->db->join('table_kategori_tutorial', 'table_kategori_tutorial.id_kt = table_tutorial.id_kt');
        $this->db->join('table_jenis_tutorial', 'table_jenis_tutorial.id_jenis_tutorial = table_tutorial.id_jt');
        $this->db->join('table_user', 'table_user.id_user = table_tutorial.id_user');
        $this->db->where('nonaktif_tutorial','tidak');
        $this->db->order_by('id_tutorial', 'DESC');
        $data = $this->db->get('table_tutorial')->result();
        echo json_encode($data);
    }
    public function select_data_tambah_tutorial(){
        return $this->db->get('table_tutorial')->result();
    } 

    public function select_data_edit_tutorial(){
        $id = $this->uri->segment(4);

        $this->db->where('id_tutorial',$id);
        $data = $this->db->get('table_tutorial')->row_array();

        return $data;
    }   


    public function insert_data_tutorial(){
        date_default_timezone_set("Asia/Makassar");

        $this->load->library('image_lib');
        if($_FILES['gambar_tutorial']['name']){
            
            $nmfile = "tutorial_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = './image/gambar_tutorial'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->do_upload('gambar_tutorial');
            $data_gambar   = $this->upload->data();
            $nama_gambar = $data_gambar['file_name'];

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
        }else{
            $nama_gambar='default.jpg';
        }

        $data = array(
            'judul_tutorial'    => $this->input->post('judul_tutorial'),
            'deskripsi_tutorial'=> $this->input->post('deskripsi'),
            'isi_tutorial'      => $this->input->post('content'),
            'tgl_rilis'         => date('Y-m-d h:i:s'),
            'id_user'           => $this->session->userdata('identitas'),
            'id_kt'             => $this->input->post('kategori_t'),
            'id_jt'             => $this->input->post('jenis_t'),
            'nonaktif_tutorial' => $this->input->post('nonaktif_tutorial'),
            'likers_tutorial'   => 0,
            'viewers_tutorial'  => 0,
            'gambar_tutorial'   => $nama_gambar,
        );

        $this->db->insert('table_tutorial',$data);
        redirect('admin/tutorial');
    }

    public function update_data_tutorial(){
        date_default_timezone_set("Asia/Makassar");
        $data=array();
        $this->load->library('image_lib');
        if($_FILES['gambar_tutorial']['name']){
            
            $nmfile = "tutorial_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = './image/gambar_tutorial'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->do_upload('gambar_tutorial');
            $data_gambar   = $this->upload->data();
            $nama_gambar = $data_gambar['file_name'];

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

            $gambar_lama = $this->input->post('gambar_lama');
            if($gambar_lama !='default.jpg'){
                unlink('image/gambar_tutorial/'.$gambar_lama);
                unlink('image/gambar_tutorial/thumb/'.$gambar_lama);
            }

        $data['gambar_tutorial']    = $nama_gambar;
        }
        
        $data['judul_tutorial']     = $this->input->post('judul_tutorial');
        $data['deskripsi_tutorial'] = $this->input->post('deskripsi');
        $data['isi_tutorial']       = $this->input->post('content');
        $data['id_kt']              = $this->input->post('kategori_t');
        $data['id_jt']              = $this->input->post('jenis_t');
        $data['nonaktif_tutorial']  = $this->input->post('nonaktif_tutorial');

        $this->db->where('id_tutorial',$this->input->post('id_tutorial'));
        $this->db->update('table_tutorial',$data);
        redirect('admin/tutorial');
    }

    public function delete_data_tutorial(){ //hapus data rilis
        $id = $this->input->post('id');

        $this->db->where('id_tutorial', $id);
        $this->db->delete('table_tutorial');
    }
}
?>