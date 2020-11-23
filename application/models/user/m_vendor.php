<?php
Class M_vendor extends CI_Model{



    public function view($data){
        $lv = $this->session->userdata('level');
        $dept = $this->session->userdata('dept');
        $cekflow  = $this->db->query("SELECT a.* FROM workflow_vendor a join sstruktur_ymi b on a.flow_name = b.costcenter where b.dept = '$dept'
        and a.level = '$lv' ");
        foreach($cekflow->result_array() as $v):
        $flown = $v['flow_name'];
        $step = $v['step'];
        endforeach;
        $hsl = $this->db->query("SELECT * FROM vendor where status = '$step'");
       return $hsl->result();
       
}

}