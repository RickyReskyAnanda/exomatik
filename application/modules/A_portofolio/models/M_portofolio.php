<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_portofolio extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_portofolio(){//mengambil semua data dari table
        $data = $this->db->get('table_portofolio')->result();
        for ($i=0; $i <count($data) ; $i++) {
            $nama_anggota   = array();
            $id_anggota     = explode(',',$data[$i]->id_anggota);
                $this->db->select('nama');
                $this->db->where_in('id_anggota',$id_anggota); /// ini mau di ganti dengan where in, jadi tidak perlu looping
                $nama = $this->db->get('table_anggota')->result();
                
            $data[$i]->nama_anggota = $nama;


            //mencari gambar utama
            $gambar_utama = explode(',',$data[$i]->foto);
            $data[$i]->gambar_utama = $gambar_utama[0];

        }
        echo json_encode($data);
    }

    public function select_data_nama_anggota(){
        $val = json_decode(file_get_contents('php://input'));
        $this->db->where('angkatan',$val->data->angkatan);
        $this->db->where('jk',$val->data->jk);
        echo json_encode($this->db->get('table_anggota')->result());
    }

    public function select_max_angkatan(){
        $this->db->select_max('angkatan');
        return $this->db->get('table_anggota')->row_array();
    }

    public function select_data_edit_portofolio(){
        $val = json_decode(file_get_contents('php://input'));

        $this->db->where('id_portofolio',$val->id);
        $data = $this->db->get('table_portofolio')->row_array();

        $data['foto']=explode(",",$data['foto']);

        $hasil=explode(",",$data['id_anggota']);
        $this->db->select('id_anggota,nama');
        $this->db->where_in('id_anggota',$hasil);
        $data['nama_anggota'] = $this->db->get('table_anggota')->result();

        echo json_encode($data);
    }

    // public function select_data_proker_divisi(){//mengambil data berdasarkan divisi

    //     $val = json_decode(file_get_contents('php://input'));
    //     $this->db->where('divisi',$val->divisi);
    //     echo json_encode($this->db->get('table_proker')->result());
    // }

    public function insert_data_portofolio(){
        
        $data = json_decode($this->input->post('id_anggota'));
        $id_anggota=[];
        for($i=0;$i<count($data);$i++){
            $id_anggota[$i]=$data[$i]->id_anggota;
        }
        $imp=implode(",",$id_anggota);

        //proses upload banyak foto
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
                        $config['file_name']            = 'tambahan_'.date('Ymdhms');
                        $config['upload_path']          = 'gambar_project';
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


        $val = array(
            'nama_portofolio'   => $this->input->post('nama_portofolio'), 
            'jenis'             => $this->input->post('jenis'),
            'id_anggota'        => $imp,
            'keterangan'        => $this->input->post('keterangan'),
            'tgl_pembuatan'     => $this->input->post('tgl_pembuatan'),
            'foto'              => $userfile
            );

        $this->db->insert('table_portofolio',$val);

        redirect('A_portofolio');
    }

    public function update_data_portofolio(){
        $data = json_decode($this->input->post('id_anggota'));
        $id_anggota=[];
        for($i=0;$i<count($data);$i++){
            $id_anggota[$i]=$data[$i]->id_anggota;
        }
        $imp=implode(",",$id_anggota);

        //proses upload banyak foto
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
                        $config['file_name']            = 'tambahan_'.date('Ymdhms');
                        $config['upload_path']          = 'gambar_project';
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
                    $file = "gambar_project/".$img[$i];
                    unlink($file);
                }
            }
        }else{
            $userfile=$this->input->post('img');
        }


        $val = array(
            'nama_portofolio'   => $this->input->post('nama_portofolio'), 
            'jenis'             => $this->input->post('jenis'),
            'id_anggota'        => $imp,
            'keterangan'        => $this->input->post('keterangan'),
            'tgl_pembuatan'     => $this->input->post('tgl_pembuatan'),
            'foto'              => $userfile
            );

        $this->db->where('id_portofolio',$this->input->post('id'));
        $this->db->update('table_portofolio',$data);
        
        
    }

    public function delete_data_portofolio(){ //hapus data rilis
        $val = json_decode(file_get_contents('php://input'));
        $this->db->select('foto');
        $this->db->where('id_portofolio',$val->id);
        $data = $this->db->get('table_portofolio')->row_array();

        $img = explode(",", $data['foto']);

        for ($i=0; $i < count($img); $i++) { 
            if($img[$i] != "empty.png"){
                $file = "gambar_project/".$img[$i];
                if(!unlink($file)){echo "tidak ada file";}
            }
        }

        $this->db->where('id_portofolio', $val->id);
        if($this->db->delete('table_portofolio')){
            echo "Berhasil Menghapus Data";
        }else{
            echo "Gagal Menghapus Data";
        }
    }


}
?>