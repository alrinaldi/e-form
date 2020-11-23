<?php
Class M_workflow extends CI_Model{


function view(){
//$hsl = $this->db->query
}
function submit(){
    $type = $this->input->post("type");
}
function approve(){
    $type = $this->input->post("type");
    $id_number = $this->input->post('id_number');
    $deptu = $this->session->userdata('dept');
    $levelu = $this->session->userdata('level');
    $nrp = $this->session->userdata('nrp');
    if($levelu!='Division Head'){
    $cekflw = $this->db->query("SELECT a.* FROM workflow_form a  join sstruktur_ymi b on a.flow_name = b.costcenter where b.dept = '$deptu'
    and a.level = '$levelu' and type = '$type'");
    if($cekflw->num_rows() > 0 ){
        foreach($cekflw->result_array() as $f):
            $flow = $f['flow_name'];
            $step1 = $f['step'];
            $lvlu = $f['level'];
        endforeach;
    }else{
        $flownm = $this->db->query("SELECT * FROM workflow_form where level = '$levelu' and flow_name = '$levelu' and type = '$type'");
        foreach($flownm->result_array() as $f):
            $flow = $f['flow_name'];
            $step1 = $f['step'];
            $lvlu = $f['level'];
        endforeach;
    }
    }else{
        $cekflw = $this->db->query("SELECT a.* FROM workflow_form a  join sstruktur_ymi b on a.flow_name = b.costcenter where b.divs = '$deptu'
        and a.level = '$levelu' and type = '$type'");
        if($cekflw->num_rows() > 0){
            foreach($cekflw->result_array() as $f):
                $flow = $f['flow_name'];
                $step1 = $f['step'];
                $lvlu = $f['level'];
            endforeach;
        }else{
            $flownm = $this->db->query("SELECT * FROM workflow_form where level = '$levelu' and flow_name = '$levelu' and type = '$type'");
            foreach($flownm->result_array() as $f):
                $flow = $f['flow_name'];
                $step1 = $f['step'];
                $lvlu = $f['level'];
            endforeach;
        }
    }
  

    $steps = substr($step1,9);
    $stepsi = intval($steps)+1;
    $step = 'Approval'.' '.$stepsi;

    $data = array();
    foreach($id_number AS $key => $val){
        $data[] = array(
            "id_master_form" => $_POST['id_number'][$key], 
            "status" => $step1,
            "approval" => $nrp,
            "tanggal" => date('Y-m-d H:i:s'),
            "type" => $type
        );
    }

    //$hsl = $this->db->update_batch('vendor',$result,'id_vendor');
    $this->db->insert_batch('approval_master',$data);

  //  $this->m_send_mail->sendEmail($addnrpu,$addemail); 
}


}