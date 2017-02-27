<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_portofolio extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_portofolio(){//mengambil semua data dari table
        $this->db->order_by('id_portofolio','DESC');
        $data= $this->db->get('table_portofolio')->result_array();

        for ($i=0; $i <count($data) ; $i++) { 
            $data[$i]['image'] = base_url()."image/gambar_portofolio/dp/".$data[$i]['foto_dp_p'];
            $data[$i]['link'] = base_url()."admin/portofolio/edit/".$data[$i]['id_portofolio'];
            $data[$i]['delete'] = base_url()."admin/portofolio/hapus/".$data[$i]['id_portofolio'];
        }
        return $data;
    }

    public function select_data_edit_portofolio(){
        $id = $this->uri->segment(4);

        $this->db->where('id_portofolio',$id);
        $data = $this->db->get('table_portofolio')->row_array();

        $this->db->where('id_back',$data['id_portofolio']);
        $data['gambar'] = $this->db->get('table_foto')->result_array();

        for ($i=0; $i < count($data['gambar']); $i++) { 
            $data['gambar'][$i]['nama_foto'] =base_url().'image/gambar_portofolio/'.$data['gambar'][$i]['nama_foto']; 
        }
        return $data;
    }

    public function insert_data_portofolio(){
       if($_FILES['gambar_dp']['name']){
            $nmfile = "dp_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'image/gambar_portofolio/dp'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '7000'; //lebar maksimum 1288 px
            $config['max_height']       = '7000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('gambar_dp');
            $gbr   = $this->upload->data();
            $gambar_dp = $gbr['file_name'];
            
            $this->load->library('image_lib');

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '400';
            $config['height']           = '400';
            $config['quality']          = '100';
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
        }
        //---batas upload gambar DP--

        //---- proses upload foto lokasi ---
        $datafile['gambar']=$_FILES['gambar'];
        $name_array = array();
        if($_FILES['gambar']['size'][0] > 0){
            //---- proses mengupload foto----
            $count = count($_FILES['gambar']['size']);
            $batasloop=0;
            $this->load->library('image_lib');

            foreach($datafile as $key=>$value){ // proses meng-upload foto
                for($s=0; $s<$count; $s++) {
                    if($batasloop<$count){
                        $_FILES['gambar']['name']     = $value['name'][$s];
                        $_FILES['gambar']['type']     = $value['type'][$s];
                        $_FILES['gambar']['tmp_name'] = $value['tmp_name'][$s];
                        $_FILES['gambar']['error']    = $value['error'][$s];
                        $_FILES['gambar']['size']     = $value['size'][$s];
                        $config1['file_name']            = 'portofolio_'.date('Ymdhis');
                        $config1['upload_path']          = 'image/gambar_portofolio';
                        $config1['allowed_types']        = 'gif|jpg|png';
                        $config1['max_size']             = '10000';
                        $config1['max_width']            = '7000';
                        $config1['max_height']           = '7000';
                        $this->load->library('upload', $config1);
                        $this->upload->initialize($config1);
                        $this->upload->do_upload('gambar');
                        $data = $this->upload->data();
                        $name_array[]=$data['file_name'];

                        $batasloop++;

                        $config1['create_thumb']     = false;
                        $config1['image_library']    = 'gd2';
                        $config1['source_image']     = $this->upload->upload_path.$this->upload->file_name;
                        $config1['maintain_ratio']   = true;
                        $config1['width']            = '700';
                        $config1['height']           = '600';
                        $config1['quality']          = '100';
                        $this->image_lib->initialize($config1);
                        $this->image_lib->resize();
                    }
                }
            }
        }

        $val['nama_portofolio']     = $this->input->post('nama_portofolio');
        $val['jenis_p']             = $this->input->post('jenis');
        $val['deskripsi_singkat_p'] = $this->input->post('deskripsi');
        $val['penjelasan_p']        = $this->input->post('content');
        $val['tahun_p']             = $this->input->post('tahun');
        $val['foto_dp_p']           = $gambar_dp;

        $this->db->insert('table_portofolio',$val);

        $this->db->where('nama_portofolio',$this->input->post('nama_portofolio'));
        $this->db->limit(1);
        $this->db->order_by('id_portofolio','DESC');
        $hasil = $this->db->get('table_portofolio')->row_array();

        for ($i=0; $i < count($name_array); $i++) { 
            $data_gambar['nama_foto']   = $name_array[$i];
            $data_gambar['jenis']       = 'portofolio';
            $data_gambar['id_back']     = $hasil['id_portofolio'];

            $this->db->insert('table_foto',$data_gambar);
        }

        redirect('admin/portofolio');
    }

    public function update_data_portofolio(){
        if($_FILES['gambar_dp']['name']){
            $nmfile = "dp_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'image/gambar_portofolio/dp'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '7000'; //lebar maksimum 1288 px
            $config['max_height']       = '7000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('gambar_dp');
            $gbr   = $this->upload->data();
            $gambar_dp = $gbr['file_name'];
            
            $this->load->library('image_lib');

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '400';
            $config['height']           = '400';
            $config['quality']          = '100';
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
        }
        //---batas upload gambar DP--

        //---- proses upload foto lokasi ---
        $datafile['gambar']=$_FILES['gambar'];
        $name_array = array();
        if($_FILES['gambar']['size'][0] > 0){
            //---- proses mengupload foto----
            $count = count($_FILES['gambar']['size']);
            $batasloop=0;
            $this->load->library('image_lib');

            foreach($datafile as $key=>$value){ // proses meng-upload foto
                for($s=0; $s<$count; $s++) {
                    if($batasloop<$count){
                        $_FILES['gambar']['name']     = $value['name'][$s];
                        $_FILES['gambar']['type']     = $value['type'][$s];
                        $_FILES['gambar']['tmp_name'] = $value['tmp_name'][$s];
                        $_FILES['gambar']['error']    = $value['error'][$s];
                        $_FILES['gambar']['size']     = $value['size'][$s];
                        $config1['file_name']            = 'portofolio_'.date('Ymdhis');
                        $config1['upload_path']          = 'image/gambar_portofolio';
                        $config1['allowed_types']        = 'gif|jpg|png';
                        $config1['max_size']             = '10000';
                        $config1['max_width']            = '7000';
                        $config1['max_height']           = '7000';
                        $this->load->library('upload', $config1);
                        $this->upload->initialize($config1);
                        $this->upload->do_upload('gambar');
                        $data = $this->upload->data();
                        $name_array[]=$data['file_name'];

                        $batasloop++;

                        $config1['create_thumb']     = false;
                        $config1['image_library']    = 'gd2';
                        $config1['source_image']     = $this->upload->upload_path.$this->upload->file_name;
                        $config1['maintain_ratio']   = true;
                        $config1['width']            = '700';
                        $config1['height']           = '600';
                        $config1['quality']          = '100';
                        $this->image_lib->initialize($config1);
                        $this->image_lib->resize();
                    }
                }
            }
        }

        $val['nama_portofolio']     = $this->input->post('nama_portofolio');
        $val['jenis_p']             = $this->input->post('jenis');
        $val['deskripsi_singkat_p'] = $this->input->post('deskripsi');
        $val['penjelasan_p']        = $this->input->post('content');
        $val['tahun_p']             = $this->input->post('tahun');
        $val['foto_dp_p']           = $gambar_dp;

        $this->db->insert('table_portofolio',$val);

        $this->db->where('nama_portofolio',$this->input->post('nama_portofolio'));
        $this->db->limit(1);
        $this->db->order_by('id_portofolio','DESC');
        $hasil = $this->db->get('table_portofolio')->row_array();

        for ($i=0; $i < count($name_array); $i++) { 
            $data_gambar['nama_foto']   = $name_array[$i];
            $data_gambar['jenis']       = 'portofolio';
            $data_gambar['id_back']     = $hasil['id_portofolio'];

            $this->db->insert('table_foto',$data_gambar);
        }

        redirect('admin/portofolio');
        
        
    }

    public function delete_data_portofolio(){ //hapus data rilis
        $id = $this->uri->segment(4);
        $this->db->where('id_portofolio',$id);
        $data = $this->db->get('table_portofolio')->row_array();

        unlink('image/gambar_portofolio/dp/'.$data['foto_dp_p']);

        $this->db->where('id_back',$id);
        $this->db->where('jenis','portofolio');
        $foto = $this->db->get('table_foto')->result_array();

        for ($i=0; $i < count($foto); $i++) { 
            unlink('image/gambar_portofolio/'.$foto[$i]['nama_foto']);
        }

        $this->db->where('id_back',$id);
        $this->db->where('jenis','portofolio');
        $this->db->delete('table_foto');

        $this->db->where('id_portofolio',$id);
        $this->db->delete('table_portofolio');

        redirect('admin/portofolio');
    }


}
?>