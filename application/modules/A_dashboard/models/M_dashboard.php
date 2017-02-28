<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_jumlah_widget(){
        $data[1]            =$this->db->query("SELECT count(*) as jumlah FROM table_konten  WHERE status='rilis'")->row_array();
        $data[2]            =$this->db->query("SELECT count(*) as jumlah FROM table_anggota")->row_array();
        $data[3]            =$this->db->query("SELECT count(*) as jumlah FROM table_proker")->row_array();
        $data[4]            =$this->db->query("SELECT count(*) as jumlah FROM table_portofolio")->row_array();

        $val['konten']      = $data[1]['jumlah'];
        $val['anggota']     = $data[2]['jumlah'];
        $val['proker']      = $data[3]['jumlah'];
        $val['portofolio']  = $data[4]['jumlah'];

        return $val;
    }


    public function select_data_saran(){
        $this->db->order_by('id_saran', 'desc');
        $this->db->limit(5,0);
        $this->db->where('status',$this->input->post('status'));
        $data=$this->db->get('table_saran')->result_array();
        
        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['nama'] = ucfirst($data[$i]['nama']);
            $data[$i]['waktu'] = date_format(date_create($data[$i]['waktu']), "h:m - d M Y");
        }
        echo json_encode($data);
    }
    public function update_data_saran(){
        $status = $this->input->post('status');
        if($status=='rilis'){
            $status='draft';
        }elseif($status=='draft'){
            $status='rilis';
        }

        $data['status'] = $status;
        $this->db->where('id_saran',$this->input->post('idsaran'));
        $this->db->update('table_saran',$data);
    }
    public function delete_data_saran(){
        $this->db->where('id_saran',$this->input->post('idsaran'));
        $this->db->delete('table_saran');
    }
}
?>