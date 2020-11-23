<?php
Class M_vend extends CI_Model{

    function review_vendor(){
        $lv = $this->session->userdata('level');
        $dept = $this->session->userdata('dept');
        $cekflow  = $this->db->query("SELECT a.* FROM workflow_vendor a join sstruktur_ymi b on a.flow_name = b.costcenter where b.dept = '$dept'");
        foreach($cekflow->result_array() as $v):
        $flown = $v['flow_name'];
        $step = $v['step'];
        endforeach;
        $hsl = $this->db->query("SELECT a.* FROM vendor a join pegawai b on a.nrp = b.nrp where a.status = '$step'");
       return $hsl->result();
    }

    function get_file(){
        $data = array(
            'id_vendor' => $this->input->post('id_vendor'),
        );
        $result = $this->db->get_where('vendor',$data);
        return $result->result();
    }

}