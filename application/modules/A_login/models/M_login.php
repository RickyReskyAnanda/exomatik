<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function login(){
        $eml        = $this->input->POST('email', TRUE);
        $keyword    = md5($this->input->POST('pass', TRUE));
        $data       = $this->db->query("SELECT * from table_anggota where email_anggota='$eml' and pass_anggota='$keyword' LIMIT 1");

        if ($data->num_rows() > 0) {
            $row = $data->row_array();
            if($row['userlevel']!='blokir'){

                $newdata = array(
                    'email'         => $row['email_anggota'],
                    'identitas'     => $row['id_anggota'],
                    'role'          => $row['userlevel'],
                    'logged_in_y'   => "mskmi",
                    'konfirmasi'    => $row['konfirmasi'],
                    'nama'          => $row['nama'],
                    'foto'          => $row['foto'],

                );
                $this->session->set_userdata($newdata);
            }else{
                $this->session->set_flashdata('a_pesan', 'Akun diblokir !');
            }
        }else{
            $this->session->set_flashdata('a_pesan', 'Email atau Password salah !');
        }

    }
}
?>