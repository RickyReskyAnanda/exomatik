<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_struktur extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_pilihan_jabatan(){//mengambil semua data dari table
        $table = $this->uri->segment(3);
        $table="table_".$table; $field="jabatan";
        $type = $this->db->query( "SHOW COLUMNS FROM {$table} WHERE Field = '{$field}'" )->row( 0 )->Type;
        preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
        $enum = explode("','", $matches[1]);
        return $enum;
    }

    
    //----select data------
    public function select_data_struktur_dpo(){
        echo json_encode($this->db->get('table_dpo')->result());
    }
    public function select_data_struktur_bpo(){
        echo json_encode($this->db->get('table_bpo')->result());
    }
    public function select_data_struktur_departemen(){
        $departemen = $this->uri->segment(3);
        $this->db->where('departemen',$departemen);
        echo json_encode($this->db->get('table_departemen')->result());
    }

    public function select_data_edit_struktur(){
        $tbl    = $this->uri->segment(3);
        $id     = $this->uri->segment(4);
        
        $this->db->where('id_struktur',$id);
        return $this->db->get('table_'.$tbl)->row_array();
    }

    //-------insert data-------
    public function insert_data_struktur_inti(){
        $tbl=$this->input->post('tbl');
        $gambar = null;
        if($_FILES['foto']['name']){
            $nmfile = "struktur_".date("Ymdhms"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'gambar_struktur'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2Ms
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $data   = $this->upload->data();
            $gambar = $data['file_name'];

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '200';
            $config['height']           = '200';
            $config['quality']          = '100';
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
        }
        $data = array(
            'nama'          => $this->input->post('nama'),
            'jabatan'       => $this->input->post('jabatan'),
            'angkatan'      => $this->input->post('angkatan'),
            'jurusan'       => $this->input->post('jurusan'),
            'keterangan'    => $this->input->post('keterangan'),
            'foto'          => $gambar, 
            );

        $this->db->insert('table_'.$tbl,$data);
        redirect('A_struktur');
    }

    public function insert_data_struktur_departemen(){

        $gambar = null;
        if($_FILES['foto']['name']){
            $nmfile = "struktur_".date("Ymdhms"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'gambar_struktur'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2Ms
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $data   = $this->upload->data();
            $gambar = $data['file_name'];

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '200';
            $config['height']           = '200';
            $config['quality']          = '100';
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
        }  

        $data = array(
            'nama'          => $this->input->post('nama'),
            'jabatan'       => $this->input->post('jabatan'),
            'angkatan'      => $this->input->post('angkatan'),
            'jurusan'       => $this->input->post('jurusan'),
            'departemen'    => $this->input->post('departemen'),
            'keterangan'    => $this->input->post('keterangan'),
            'foto'          => $gambar, 
            );

        $this->db->insert('table_departemen',$data);
        redirect('A_struktur');
    }



    //------update data -------
    public function update_data_struktur_inti(){

        $gambar = null;
        if($_FILES['foto']['name']){
            $nmfile = "struktur_".date("Ymdhms"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'gambar_struktur'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2Ms
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $data   = $this->upload->data();
            $gambar = $data['file_name'];

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '200';
            $config['height']           = '200';
            $config['quality']          = '100';
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $data = array(
                'nama'          => $this->input->post('nama'),
                'jabatan'       => $this->input->post('jabatan'),
                'angkatan'      => $this->input->post('angkatan'),
                'jurusan'       => $this->input->post('jurusan'),
                'keterangan'    => $this->input->post('keterangan'),
                'foto'          => $gambar, 
            );

            $img=$this->input->post('img');
            if($img != "empty.png"){
                $file = "gambar_struktur/".$img;
                unlink($file);
            }
            
        }else{
            $data = array(
            'nama'          => $this->input->post('nama'),
            'jabatan'       => $this->input->post('jabatan'),
            'angkatan'      => $this->input->post('angkatan'),
            'jurusan'       => $this->input->post('jurusan'),
            'keterangan'    => $this->input->post('keterangan'),
            );
        }
        $tbl = $this->input->post('tbl');
        
        $this->db->where('id_struktur',$this->input->post('id'));
        $this->db->update('table_'.$tbl,$data);
        redirect('A_struktur');
    }

    public function update_data_struktur_departemen(){

        $gambar = null;
        if($_FILES['foto']['name']){
            $nmfile = "struktur_".date("Ymdhms"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'gambar_struktur'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2Ms
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $data   = $this->upload->data();
            $gambar = $data['file_name'];

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '200';
            $config['height']           = '200';
            $config['quality']          = '100';
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $data = array(
                'nama'          => $this->input->post('nama'),
                'jabatan'       => $this->input->post('jabatan'),
                'angkatan'      => $this->input->post('angkatan'),
                'jurusan'       => $this->input->post('jurusan'),
                'departemen'    => $this->input->post('departemen'),
                'keterangan'    => $this->input->post('keterangan'),
                'foto'          => $gambar 
            );

            $file = "gambar_struktur/".$this->input->post('img');
            unlink($file);
        }else{
            $data = array(
            'nama'          => $this->input->post('nama'),
            'jabatan'       => $this->input->post('jabatan'),
            'angkatan'      => $this->input->post('angkatan'),
            'jurusan'       => $this->input->post('jurusan'),
            'departemen'    => $this->input->post('departemen'),
            'keterangan'    => $this->input->post('keterangan'),
            );
        }

        $this->db->where('id_struktur',$this->input->post('id'));
        $this->db->update('table_departemen',$data);
        redirect('A_struktur');
    }
    

    //---delete data
    public function delete_data_struktur(){ //hapus data rilis
        $val = json_decode(file_get_contents('php://input'));

        $this->db->select('foto');
        $this->db->where('id_struktur',$val->id);
        $data = $this->db->get('table_'.$val->tbl)->row_array();

        if($data['foto'] != "empty.png"){
                $file = "gambar_struktur/".$data['foto'];
                if(!unlink($file)){echo "tidak ada file";}
            }

        $this->db->where('id_struktur', $val->id);
        if($this->db->delete('table_'.$val->tbl)){
            echo "Berhasil Menghapus Data";
        }else{
            echo "Gagal Menghapus Data1";
        }
    }

}
?>