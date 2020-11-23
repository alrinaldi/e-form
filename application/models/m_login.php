<?php
Class M_login extends CI_Model{

    function cek_user($data){
        $hsl = $this->db->get_where('user',$data);
        return $hsl;
    }
    function pegawai($data){
        $hsl = $this->db->get_where('pegawai',$data);
        return $hsl;
    }


}


?>