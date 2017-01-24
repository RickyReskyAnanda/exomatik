<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function login()
    {
        $eml        = $this->input->POST('email', TRUE);
        $keyword    = md5($this->input->POST('pass', TRUE));
        $data       = $this->db->query("SELECT * from table_user where email='$eml' and password='$keyword' LIMIT 1");


        if ($data->num_rows() > 0) {
            $row = $data->row_array();


            $newdata = array(
                'email'         => $row['email'],
                'identitas'     => $row['id_user'],
                'role'          => $row['level'],
                'logged_in_y'   => "mskmi",

            );
            $this->session->set_userdata($newdata);
            return TRUE;
        }

    }
}
?>