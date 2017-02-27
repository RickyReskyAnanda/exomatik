<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_proker extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_proker(){//mengambil semua data dari table
        $divisi = $this->input->post('dpt');
        $this->db->where('divisi_kegiatan',$divisi);
        $data = $this->db->get('table_proker')->result_array();

        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['foto_dp_k'] = base_url().'image/gambar_proker/dp/'.$data[$i]['foto_dp_k']; 
            $data[$i]['edit'] = base_url().'admin/proker/edit/'.$data[$i]['id_proker']; 
        }

        echo json_encode($data);
    }

    public function select_data_edit_proker(){
        $id = $this->uri->segment(4);
        $this->db->where('id_proker',$id);
        $data = $this->db->get('table_proker')->row_array();

        $data['foto_dp'] = base_url().'image/gambar_proker/dp/'.$data['foto_dp_k'];

        $this->db->where('id_back',$id);
        $this->db->where('jenis','proker');
        $data['gambar']=$this->db->get('table_foto')->result_array();

        for ($i=0; $i < count($data['gambar']); $i++) { 
            $data['gambar'][$i]['nama_foto'] = base_url().'image/gambar_proker/'.$data['gambar'][$i]['nama_foto'];
        }

        return $data;
    }

    public function insert_data_proker(){
        // print_r($_FILES);die;
        $data = array();
        $val = array();
        $gambar = null;
        if($_FILES['foto_dp']['name']){
            $this->load->library('image_lib');
            
            $nmfile = "proker_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'image/gambar_proker/dp'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px
           

            $this->load->library('upload', $config);
            $this->upload->do_upload('foto_dp');
            $val   = $this->upload->data();
            $gambar = $val['file_name'];

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '450';
            $config['height']           = '450';
            $config['quality']          = '95';
            $this->image_lib->initialize($config);
            $this->image_lib->resize();

        }
        //---- proses upload foto lokasi ---
        $datafile['gambar']=$_FILES['foto_k'];
        $name_array = array();
        if($_FILES['foto_k']['size'][0] > 0){
            //---- proses mengupload foto----
            $count = count($_FILES['foto_k']['size']);
            $batasloop=0;
            $this->load->library('image_lib');

            foreach($datafile as $key=>$value){ // proses meng-upload foto
                for($s=0; $s<$count; $s++) {
                    if($batasloop<$count){
                        $_FILES['foto_k']['name']     = $value['name'][$s];
                        $_FILES['foto_k']['type']     = $value['type'][$s];
                        $_FILES['foto_k']['tmp_name'] = $value['tmp_name'][$s];
                        $_FILES['foto_k']['error']    = $value['error'][$s];
                        $_FILES['foto_k']['size']     = $value['size'][$s];
                        $config1['file_name']            = 'portofolio_'.date('Ymdhis');
                        $config1['upload_path']          = 'image/gambar_proker';
                        $config1['allowed_types']        = 'gif|jpg|png';
                        $config1['max_size']             = '10000';
                        $config1['max_width']            = '7000';
                        $config1['max_height']           = '7000';
                        $this->load->library('upload', $config1);
                        $this->upload->initialize($config1);
                        $this->upload->do_upload('foto_k');
                        $hasil = $this->upload->data();
                        $name_array[]=$hasil['file_name'];

                        $batasloop++;

                        $config1['create_thumb']     = false;
                        $config1['image_library']    = 'gd2';
                        $config1['source_image']     = $this->upload->upload_path.$this->upload->file_name;
                        $config1['maintain_ratio']   = true;
                        $config1['width']            = '550';
                        $config1['height']           = '550';
                        $config1['quality']          = '100';
                        $this->image_lib->initialize($config1);
                        $this->image_lib->resize();
                    }
                }
            }
        }
        

        $data['foto_dp_k']        = $gambar;
        $data['nama_kegiatan']    = $this->input->post('nama_kegiatan'); 
        $data['tujuan_kegiatan']  = $this->input->post('tujuan_kegiatan');
        $data['sasaran_kegiatan'] = $this->input->post('sasaran_kegiatan');
        $data['waktu_kegiatan']   = $this->input->post('waktu_kegiatan');
        $data['sumber_dana']      = $this->input->post('sumber_dana');
        $data['status_kegiatan']  = $this->input->post('status');
        $data['divisi_kegiatan']  = $this->input->post('divisi');
        $data['tgl_update']       = date('Y-m-d h:i:s');

        $this->db->insert('table_proker',$data);

        $this->db->where('tgl_update',$data['tgl_update']);
        $this->db->limit(1);
        $this->db->order_by('id_proker','DESC');
        $hasil = $this->db->get('table_proker')->row_array();

        for ($i=0; $i < count($name_array); $i++) { 
            $data_gambar['nama_foto']   = $name_array[$i];
            $data_gambar['jenis']       = 'proker';
            $data_gambar['id_back']     = $hasil['id_proker'];

            $this->db->insert('table_foto',$data_gambar);
        }
        $this->session->set_flashdata('pesan_sukses', 'Berhasil menginput data !');

        redirect('admin/proker');
    }

    public function update_data_proker(){
        $id_proker = $this->input->post('id_proker');
        $data = array();
        $val = array();
        if($_FILES['foto_dp']['name']){
            $this->load->library('image_lib');
            
            $nmfile = "proker_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'image/gambar_proker/dp'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px
           

            $this->load->library('upload', $config);
            $this->upload->do_upload('foto_dp');
            $val   = $this->upload->data();
            $data['foto_dp_k'] = $val['file_name'];

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '450';
            $config['height']           = '450';
            $config['quality']          = '95';
            $this->image_lib->initialize($config);
            $this->image_lib->resize();

            unlink('image/gambar_proker/dp/'.$this->input->post('foto_dp_lama'));
        }

        //---- proses upload foto lokasi ---
        $name_array = array();
        if($_FILES['foto_k']['size'][0] > 0){
            $datafile['gambar']=$_FILES['foto_k'];
            //---- proses mengupload foto----
            $count = count($_FILES['foto_k']['size']);
            $batasloop=0;
            $this->load->library('image_lib');

            foreach($datafile as $key=>$value){ // proses meng-upload foto
                for($s=0; $s<$count; $s++) {
                    if($batasloop<$count){
                        $_FILES['foto_k']['name']     = $value['name'][$s];
                        $_FILES['foto_k']['type']     = $value['type'][$s];
                        $_FILES['foto_k']['tmp_name'] = $value['tmp_name'][$s];
                        $_FILES['foto_k']['error']    = $value['error'][$s];
                        $_FILES['foto_k']['size']     = $value['size'][$s];
                        $config1['file_name']            = 'portofolio_'.date('Ymdhis');
                        $config1['upload_path']          = 'image/gambar_proker';
                        $config1['allowed_types']        = 'gif|jpg|png';
                        $config1['max_size']             = '10000';
                        $config1['max_width']            = '7000';
                        $config1['max_height']           = '7000';
                        $this->load->library('upload', $config1);
                        $this->upload->initialize($config1);
                        $this->upload->do_upload('foto_k');
                        $hasil = $this->upload->data();
                        $name_array[]=$hasil['file_name'];

                        $batasloop++;

                        $config1['create_thumb']     = false;
                        $config1['image_library']    = 'gd2';
                        $config1['source_image']     = $this->upload->upload_path.$this->upload->file_name;
                        $config1['maintain_ratio']   = true;
                        $config1['width']            = '550';
                        $config1['height']           = '550';
                        $config1['quality']          = '100';
                        $this->image_lib->initialize($config1);
                        $this->image_lib->resize();
                    }
                }
            }

            $this->db->where('id_back',$id_proker);
            $this->db->where('jenis','proker');
            $foto = $this->db->get('table_foto')->result_array();

            //menghapus
            for ($i=0; $i < count($foto); $i++) { 
                unlink('image/gambar_proker/'.$foto[$i]['nama_foto']);
            }
            $this->db->where('id_back',$id_proker);
            $this->db->where('jenis','proker');
            $this->db->delete('table_foto');

            for ($i=0; $i < count($name_array); $i++) { 
                $data_gambar['nama_foto']   = $name_array[$i];
                $data_gambar['jenis']       = 'proker';
                $data_gambar['id_back']     = $id_proker;

                $this->db->insert('table_foto',$data_gambar);
            }
        }
        

        $data['nama_kegiatan']    = $this->input->post('nama_kegiatan'); 
        $data['tujuan_kegiatan']  = $this->input->post('tujuan_kegiatan');
        $data['sasaran_kegiatan'] = $this->input->post('sasaran_kegiatan');
        $data['waktu_kegiatan']   = $this->input->post('waktu_kegiatan');
        $data['sumber_dana']      = $this->input->post('sumber_dana');
        $data['status_kegiatan']  = $this->input->post('status');
        $data['divisi_kegiatan']  = $this->input->post('divisi');
        $data['tgl_update']       = date('Y-m-d h:i:s');


        $this->db->where('id_proker',$id_proker);
        $this->db->update('table_proker',$data);

        // pesan berhasil
        $this->session->set_flashdata('pesan_sukses', 'Berhasil memperbaharui data !');
        redirect('admin/proker');
    }

    public function delete_data_proker(){ //hapus data rilis
        $id_proker=$this->input->post('id');
        
        $this->db->where('id_proker',$id_proker);
        $data = $this->db->get('table_proker')->row_array();

        $this->db->where('id_back',$id_proker);
        $this->db->where('jenis','proker');
        $foto = $this->db->get('table_foto')->result_array();

        unlink('image/gambar_proker/dp/'.$data['foto_dp_k']);

        for ($i=0; $i < count($foto); $i++) { 
            unlink('image/gambar_proker/'.$foto[$i]['nama_foto']);
        }
        $this->db->where('id_proker', $id_proker);
        $this->db->delete('table_proker');

        $this->db->where('id_back',$id_proker);
        $this->db->where('jenis','proker');
        $this->db->delete('table_foto');
    }


}
?>