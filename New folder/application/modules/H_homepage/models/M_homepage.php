<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_homepage extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_konten(){//mengambil semua data dari table

        $val = json_decode(file_get_contents('php://input'));
        $this->db->select('id_konten,judul_konten,deskripsi,gambar,tag,tgl_rilis');
        $this->db->order_by('id_konten', 'DESC');
        $this->db->limit($val->level);
        $this->db->where('status','rilis');
        $data = $this->db->get('table_konten')->result();

        for ($i=0; $i < count($data); $i++){ 
            $data[$i]->tag  = explode(',', $data[$i]->tag);
            $data[$i]->link = str_replace(" ","-",$data[$i]->judul_konten);
        }

        echo json_encode($data);
    }
    public function select_data_view_konten(){
        $id = $this->uri->segment(2);
        $this->db->where('id_konten',$id);
        $data = $this->db->get('table_konten')->row_array();

        if($data['tag']){
            $data['tag'] = explode(',', $data['tag']);
        }
        
        $this->db->select('nama_lengkap');
        $this->db->where('id_user',$data['id_user']);
        $user = $this->db->get('table_user')->row_array();
        

        if($user){
            $data['penulis'] = strtoupper($user['nama_lengkap']);
        }else{
            $data['penulis'] = "ADMIN";
        }

        return $data;
    }

    public function select_data_portfolio(){
        $data = $this->db->get('table_portofolio')->result_array();

        for($i=0;$i<count($data);$i++){

            $foto           = explode(',', $data[$i]->foto);
            $data[$i]->foto = $foto[0];

            $data[$i]->link = str_replace(" ","-",$data[$i]->nama_portofolio);

            $id_anggota     = explode(',', $data[$i]->id_anggota);

            $this->db->select('nama');
            $this->db->where_in('id_anggota',$id_anggota);
            $data[$i]->nama_anggota = $this->db->get('table_anggota')->result();
        }
        return $data;
    }

    public function select_data_jenis_portfolio(){
        $jenis = $this->uri->segment(2);
        $this->db->where('jenis',$jenis);
        $data = $this->db->get('table_portofolio')->result();

        for($i=0;$i<count($data);$i++){

            $foto           = explode(',', $data[$i]->foto);
            $data[$i]->foto = $foto[0];

            $data[$i]->link = str_replace(" ","-",$data[$i]->nama_portofolio);

            $id_anggota     = explode(',', $data[$i]->id_anggota);

            $this->db->select('nama');
            $this->db->where_in('id_anggota',$id_anggota);
            $data[$i]->nama_anggota = $this->db->get('table_anggota')->result();
        }
        return $data;

    }

    public function select_data_proker(){
        $this->db->order_by('tgl_update', 'DESC');
        $this->db->limit(5);
        $this->db->where('status','terlaksana');
        $data = $this->db->get('table_proker')->result();

        for($i=0;$i<count($data);$i++){
            $data[$i]->link = str_replace(" ","-",$data[$i]->nama_kegiatan);

            $foto = explode(",", $data[$i]->foto);
            $data[$i]->foto = $foto[0];
        }

        return $data;
    }

    public function select_data_proker_utama(){
        $this->db->select('id_proker,nama_kegiatan,divisi,status');
        $data = $this->db->get('table_proker')->result();

        for($i=0;$i<count($data);$i++){
            $data[$i]->link = str_replace(" ","-",$data[$i]->nama_kegiatan);
        }
        return $data;
    }

    public function select_data_detail_proker_utama(){
        $id = $this->uri->segment(2);
        $this->db->where('id_proker',$id);
        $data = $this->db->get('table_proker')->row_array();
        
        $data['foto']= explode(",", $data['foto']);

        $this->db->where('divisi',$data['divisi']);
        $data['menu'] = $this->db->get('table_proker')->result_array();
        for($i=0;$i<count($data['menu']);$i++){
            $data['menu'][$i]['link']=str_replace(" ","-",$data['menu'][$i]['nama_kegiatan']);
        }

        if($data['divisi']=="ki"){
            $data['divisi']="Kreatif & Inovatif";
        }elseif($data['divisi']=="humas"){
            $data['divisi']="Hubungan Masyarakat";
        }elseif($data['divisi']=="kesekretariatan"){
            $data['divisi']="Kesekretariatan";
        }elseif($data['divisi']=="pendidikan"){
            $data['divisi']="Pendidikan";
        }elseif($data['divisi']=="keuangan"){
            $data['divisi']="Keuangan";
        }

        
        return $data;
    }

     public function select_data_download(){
        $this->db->order_by('id','DESC');
        return $this->db->get('table_download')->result();
    }

    public function input_komentar(){
        $data['nama']       = $this->input->post('nama');
        $data['email']      = $this->input->post('email');
        $data['komentar']   = $this->input->post('komentar');
        $data['id_konten']  = $this->input->post('id_konten');
        $this->db->insert('table_komentar',$data);
        redirect($this->input->post('pindah'));
    }

    public function select_data_umum(){
        $this->db->where('id',1);
        $data = $this->db->get('table_setting')->row_array();

        $data['partners']=$this->db->get('table_partners')->result_array();
        return $data;

    }

    public function select_data_most_comment(){
        $this->db->distinct();
        $this->db->select('id_konten');
        $query = $this->db->get('table_komentar')->result_array();
        for($i=0;$i<count($query);$i++){
            $data[$i]=$query[$i]['id_konten'];
        }

        $this->db->select('id_konten,judul_konten,');
        $this->db->limit(7);
        $this->db->where_in('id_konten',$data);
        $query = $this->db->get('table_konten')->result();


        for($i=0;$i<count($query);$i++){
            $query[$i]->link=str_replace(" ","-",$query[$i]->judul_konten);
        }

        return $query;
    }
}
?>