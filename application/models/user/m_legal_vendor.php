<?php
Class M_legal_vendor extends CI_Model{

function legal_vendor(){
    $lv = $this->session->userdata('level');
    $dept = $this->session->userdata('dept');
    if($lv=='Division Head'){
    $cekflow = $this->db->query("SELECT a.* FROM workflow_vendor a join sstruktur_ymi b on a.flow_name = b.costcenter where b.divs = '$dept'
    and a.level = '$lv' ");
    }else{
    $cekflow  = $this->db->query("SELECT a.* FROM workflow_vendor a join sstruktur_ymi b on a.flow_name = b.costcenter where b.dept = '$dept'
    and a.level = '$lv' ");
    }
    foreach($cekflow->result_array() as $v):
    $flown = $v['flow_name'];
    $step = $v['step'];
    endforeach;
    $hsl = $this->db->query("SELECT a.* FROM vendor a join pegawai b on a.nrp = b.nrp where a.status = '$step'");
   return $hsl->result();
}

function legal_aprv(){
    $lv = $this->session->userdata('level');
    $dept = $this->session->userdata('dept');
    $cekflow  = $this->db->query("SELECT a.* FROM workflow_vendor a join sstruktur_ymi b on a.flow_name = b.costcenter where b.dept = '$dept'
    and a.level = '$lv' ");
    foreach($cekflow->result_array() as $v):
    $flown = $v['flow_name'];
    $step = $v['step'];
    endforeach;
    $hsl = $this->db->query("SELECT a.* FROM vendor a join pegawai b on a.nrp = b.nrp where a.status = '$step'");
   return $hsl->result();
}

}