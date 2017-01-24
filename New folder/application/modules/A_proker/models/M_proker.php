<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_proker extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_proker(){//mengambil semua data dari table
        echo json_encode($this->db->get('table_proker')->result());
    }

    public function select_data_proker_divisi(){//mengambil data berdasarkan divisi

        $val = json_decode(file_get_contents('php://input'));
        $this->db->where('divisi',$val->divisi);
        echo json_encode($this->db->get('table_proker')->result());
    }

    public function select_data_edit_proker(){
        $id = $this->uri->segment(3);
        $this->db->where('id_proker',$id);
        return $this->db->get('table_proker')->row_array();
    }

    public function insert_data_proker(){
        $count = count($_FILES['userfile']['size']);
        if($_FILES['userfile']['size'][0] > 0){
            //---- proses mengupload foto----
            $name_array = array();
            
            $batasloop=0;
            foreach($_FILES as $key=>$value){ // proses meng-upload foto
                for($s=0; $s<=$count-1; $s++) {
                    if($batasloop<$count){
                        $_FILES['userfile']['name']     = $value['name'][$s];
                        $_FILES['userfile']['type']     = $value['type'][$s];
                        $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
                        $_FILES['userfile']['error']    = $value['error'][$s];
                        $_FILES['userfile']['size']     = $value['size'][$s];
                        $config['file_name']            = 'proker_'.date('Ymdhms');
                        $config['upload_path']          = 'gambar_proker';
                        $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
                        $config['max_size']             = '10000';
                        $config['max_width']            = '5000';
                        $config['max_height']           = '3000';
                        $this->load->library('upload', $config);
                        $this->upload->do_upload('userfile');
                        $data1 = $this->upload->data();
                        $name_array[] = $data1['file_name'];
                        $batasloop++;
                    }
                }
            }//---./Batas proses mengupload foto ----
            $userfile= implode(',', $name_array);
        }

        $data = array(
            'nama_kegiatan'     => $this->input->post('nama_kegiatan'), 
            'divisi'            => $this->input->post('divisi'),
            'status'            => $this->input->post('status'),
            'tujuan_kegiatan'   => $this->input->post('tujuan_kegiatan'),
            'sasaran_kegiatan'  => $this->input->post('sasaran_kegiatan'),
            'waktu'             => $this->input->post('waktu'),
            'sumber_dana'       => $this->input->post('sumber_dana'),
            'tgl_update'        => date('Y-m-d h:m:s'),
            'foto'              => $userfile
            );
        $this->db->insert('table_proker',$data);
        redirect('A_proker');
    }

    public function update_data_proker(){
        $count = count($_FILES['userfile']['size']);
        if($_FILES['userfile']['size'][0] > 0){
            //---- proses mengupload foto----
            $name_array = array();
            
            $batasloop=0;
            foreach($_FILES as $key=>$value){ // proses meng-upload foto
                for($s=0; $s<=$count-1; $s++) {
                    if($batasloop<$count){
                        $_FILES['userfile']['name']     = $value['name'][$s];
                        $_FILES['userfile']['type']     = $value['type'][$s];
                        $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
                        $_FILES['userfile']['error']    = $value['error'][$s];
                        $_FILES['userfile']['size']     = $value['size'][$s];
                        $config['file_name']            = 'proker_'.date('Ymdhms');
                        $config['upload_path']          = 'gambar_proker';
                        $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
                        $config['max_size']             = '10000';
                        $config['max_width']            = '5000';
                        $config['max_height']           = '3000';
                        $this->load->library('upload', $config);
                        $this->upload->do_upload('userfile');
                        $data1 = $this->upload->data();
                        $name_array[] = $data1['file_name'];
                        $batasloop++;
                    }
                }
            }//---./Batas proses mengupload foto ----
            $userfile= implode(',', $name_array);

            $img=$this->input->post('img');
            $img = explode(",", $img);

            for ($i=0; $i < count($img); $i++) { 
                if($img[$i] != "empty.png"){
                    $file = "gambar_proker/".$img[$i];
                    unlink($file);
                }
            }


            $data = array(
                'nama_kegiatan'     => $this->input->post('nama_kegiatan'), 
                'divisi'            => $this->input->post('divisi'),
                'status'            => $this->input->post('status'),
                'tujuan_kegiatan'   => $this->input->post('tujuan_kegiatan'),
                'sasaran_kegiatan'  => $this->input->post('sasaran_kegiatan'),
                'waktu'             => $this->input->post('waktu'),
                'sumber_dana'       => $this->input->post('sumber_dana'),
                'tgl_update'        => date('Y-m-d h:m:s'),
                'foto'              => $userfile
            );
        }else{
           $data = array(
                'nama_kegiatan'     => $this->input->post('nama_kegiatan'), 
                'divisi'            => $this->input->post('divisi'),
                'status'            => $this->input->post('status'),
                'tujuan_kegiatan'   => $this->input->post('tujuan_kegiatan'),
                'sasaran_kegiatan'  => $this->input->post('sasaran_kegiatan'),
                'waktu'             => $this->input->post('waktu'),
                'sumber_dana'       => $this->input->post('sumber_dana'),
                'tgl_update'        => date('Y-m-d h:m:s'),
            ); 
        }
        
        $this->db->where('id_proker',$this->input->post('id'));
        $this->db->update('table_proker',$data);
        
        redirect('A_proker');
    }

    public function delete_data_proker(){ //hapus data rilis
        $val = json_decode(file_get_contents('php://input'));
        
        $this->db->select('foto');
        $this->db->where('id_proker',$val->id);
        $data = $this->db->get('table_proker')->row_array();

        $img = explode(",", $data['foto']);

        for ($i=0; $i < count($img); $i++) { 
            if($img[$i] != "empty.png"){
                $file = "gambar_proker/".$img[$i];
                unlink($file);
            }
        }

        $this->db->where('id_proker', $val->id);
        if($this->db->delete('table_proker')){
            echo "Berhasil Menghapus Data";
        }else{
            echo "Gagal Menghapus Data";
        }
    }


}
?>