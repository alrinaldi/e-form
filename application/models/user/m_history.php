<?php
Class M_history extends CI_Model{

    function tampil_apv_vend(){
        $id_vend = $this->input->post('id_vend');
        $cekaprv = $this->db->query("SELECT * FROM approval_master_vendor");
        return $cekaprv->result();

    }
    function dtl_aprv(){
        $idapr = $this->input->post('idapr');
        $hsl = $this->db->query("SELECT * FROM approval_master where id_approval = '$idapr' ");
        return $hsl;
    }
    function dtl_aprv_vnd(){
        $idapr = $this->input->post('idapr');
        $hsl = $this->db->query("SELECT * FROM approval_master");
    }
}