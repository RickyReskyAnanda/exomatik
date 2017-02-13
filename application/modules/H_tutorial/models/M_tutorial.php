<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tutorial extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_tutorial_jenis_kategori(){
        $this->db->where('nonaktif','tidak');
        $jenis = $this->db->get('table_jenis_tutorial')->result_array();

        for ($i=0; $i < count($jenis); $i++) { 
            $this->db->where('nonaktif_kt','tidak');
            $this->db->where('id_jenis_tutorial',$jenis[$i]['id_jenis_tutorial']);
            $kategori = $this->db->get('table_kategori_tutorial')->result_array();
            for ($a=0; $a < count($kategori); $a++) { 
                $link = preg_replace('/[^A-Z a-z0-9\-]/','', $kategori[$a]['nama_kt']);
                $kategori[$a]['link'] = base_url()."tutorial/kategori/".str_replace(" ","-",$link)."/".$kategori[$a]['id_kt'];
                $kategori[$a]['nama_kt'] = ucfirst($kategori[$a]['nama_kt']);
            }
            $jenis[$i]['data_kategori']=$kategori;

        }
        return $jenis;
    }
    public function select_data_tutorial_terbaru(){
        $this->db->join('table_user', 'table_user.id_user = table_tutorial.id_user');
        $this->db->order_by('id_tutorial','DESC');
        $this->db->limit(10);
        $data = $this->db->get('table_tutorial')->result_array();

        for ($i=0; $i < count($data); $i++) { 
            $link = preg_replace('/[^A-Z a-z0-9\-]/','', $data[$i]['judul_tutorial']);
            $data[$i]['link']           = "tutorial/".str_replace(" ","-",$link)."/".$data[$i]['id_tutorial'];
            $data[$i]['judul_tutorial'] = ucfirst($data[$i]['judul_tutorial']);
            $data[$i]['tgl_rilis']      = date_format(date_create($data[$i]['tgl_rilis']), "d F Y");
            $data[$i]['gambar_thumb']   = base_url()."image/gambar_tutorial/thumb/".$data[$i]['gambar_tutorial'];
        }

        return $data;
    }
    //--------- kategori --------------------

    public function select_data_tutorial_kategori(){
        $this->db->join('table_user', 'table_user.id_user = table_tutorial.id_user');
        $this->db->where('id_kt',$this->uri->segment(4));
        $data = $this->db->get('table_tutorial')->result_array();

        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['judul_tutorial'] = ucfirst($data[$i]['judul_tutorial']);
            $data[$i]['gambar_thumb']   = base_url()."image/gambar_tutorial/thumb/".$data[$i]['gambar_tutorial'];
            $link = preg_replace('/[^A-Z a-z0-9\-]/','', $data[$i]['judul_tutorial']);
            $data[$i]['link']           = base_url()."tutorial/".str_replace(" ","-",$link)."/".$data[$i]['id_tutorial'];
            $data[$i]['tgl_rilis']      = date_format(date_create($data[$i]['tgl_rilis']), "F d, Y");
        }
        return $data;
    }

    //----detail tutorial-----
    public function select_data_detail_tutorial(){
        $this->db->join('table_user', 'table_user.id_user = table_tutorial.id_user');
        $this->db->where('id_tutorial',$this->uri->segment(3));
        $data = $this->db->get('table_tutorial')->row_array();

        $data['judul_tutorial']=ucfirst($data['judul_tutorial']);
        return $data;
    }
    public function select_data_tutorial_terpopuler(){
        $this->db->join('table_user', 'table_user.id_user = table_tutorial.id_user');
        if($this->uri->segment(2)!='kategori'){
            $this->db->where('id_tutorial !=',$this->uri->segment(3));
        }
        $this->db->order_by('viewers_tutorial','DESC');
        $this->db->limit(10);
        $data = $this->db->get('table_tutorial')->result_array();

        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['judul_tutorial']     = ucfirst($data[$i]['judul_tutorial']);
            $data[$i]['gambar_thumb']       = base_url()."image/gambar_tutorial/thumb/".$data[$i]['gambar_tutorial'];
            $data[$i]['gambar_tutorial']    = base_url()."image/gambar_tutorial/".$data[$i]['gambar_tutorial'];
            $link = preg_replace('/[^A-Z a-z0-9\-]/','', $data[$i]['judul_tutorial']);
            $data[$i]['link']               = base_url()."tutorial/".str_replace(" ","-",$link)."/".$data[$i]['id_tutorial'];
        }
        return $data;
    }
    public function select_data_tutorial_terkait(){
        $this->db->select('id_kt');
        $this->db->where('id_tutorial',$this->uri->segment(3));
        $val = $this->db->get('table_tutorial')->row_array();


        $this->db->join('table_user', 'table_user.id_user = table_tutorial.id_user');
        $this->db->order_by('id_tutorial','DESC');
        $this->db->where('id_kt',$val['id_kt']);
        $this->db->where('id_tutorial !=',$this->uri->segment(3));
        $this->db->limit(5);
        $data = $this->db->get('table_tutorial')->result_array();

        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['judul_tutorial']     = ucfirst($data[$i]['judul_tutorial']);
            $data[$i]['gambar_thumb']       = base_url()."image/gambar_tutorial/thumb/".$data[$i]['gambar_tutorial'];
            $link = preg_replace('/[^A-Z a-z0-9\-]/','', $data[$i]['judul_tutorial']);
            $data[$i]['link']               = base_url()."tutorial/".str_replace(" ","-",$link)."/".$data[$i]['id_tutorial'];
        }
        return $data;
    }
    public function select_data_kategori_jenis(){
        $this->db->select('id_jt');
        $this->db->where('id_tutorial',$this->uri->segment(3));
        $val = $this->db->get('table_tutorial')->row_array();

        $this->db->where('id_jenis_tutorial',$val['id_jt']);
        $data = $this->db->get('table_kategori_tutorial')->result_array();

            for ($i=0; $i < count($data); $i++) { 
                $link = preg_replace('/[^A-Z a-z0-9\-]/','', $data[$i]['nama_kt']);
                $data[$i]['link']       = base_url()."tutorial/kategori/".str_replace(" ","-",$link)."/".$data[$i]['id_kt'];
                $data[$i]['nama_kt']    = ucfirst($data[$i]['nama_kt']);
            }
        return $data;
    }

}
?>