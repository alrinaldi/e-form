<?php
Class M_user extends CI_Model{


    function tampil_user(){

        $hsl = $this->db->get('pegawai');
        return $hsl->result();

    }

    function cek_user(){
        $nrp = $this->input->post('a_nrp');
        $hsl = $this->db->query("SELECT * FROM pegawai where nrp = '$nrp'");
        return $hsl->result();
    }
    function get_ymi(){
        $hsl = $this->db->get("sstruktur_ymi");
        return $hsl;
    }

}