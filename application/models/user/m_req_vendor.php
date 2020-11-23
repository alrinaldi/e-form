<?php
Class M_req_vendor extends CI_Model{

    function __construct(){
        parent::__construct();
      
        $this->load->model('user/m_send_mail');
    }

    public function view(){
        $lv = $this->session->userdata('level');
        $dept = $this->session->userdata('dept');
        $divu = $this->session->userdata('divisi');
        if($lv!='Division Head'){  
         $cekflow  = $this->db->query("SELECT a.* FROM workflow_vendor a join sstruktur_ymi b on a.flow_name = b.costcenter where b.dept = '$dept'
        and a.level = '$lv' ");
        foreach($cekflow->result_array() as $v):
        $flown = $v['flow_name'];
        $step = $v['step'];
        endforeach;
        $hsl = $this->db->query("SELECT a.* FROM vendor a join pegawai b on a.nrp = b.nrp where a.status = '$step' and b.dept = '$dept'");
    }else{
        $cekflow  = $this->db->query("SELECT a.* FROM workflow_vendor a join sstruktur_ymi b on a.flow_name = b.costcenter where b.divs = '$dept'
        and a.level = '$lv' ");
        foreach($cekflow->result_array() as $v):
        $flown = $v['flow_name'];
        $step = $v['step'];
        endforeach;
        $hsl = $this->db->query("SELECT a.* FROM vendor a join pegawai b on a.nrp = b.nrp where a.status = '$step' and b.divisi = '$dept'");
    }
       return $hsl->result();
       
}

public function approve_vend(){
    $id_number = $this->input->post('id_number');
    $deptu = $this->session->userdata('dept');
    $levelu = $this->session->userdata('level');
    $nrp = $this->session->userdata('nrp');
    if($levelu!='Division Head'){
    $cekflw = $this->db->query("SELECT a.* FROM workflow_vendor a  join sstruktur_ymi b on a.flow_name = b.costcenter where b.dept = '$deptu'
    and a.level = '$levelu'");
    }else{
        $cekflw = $this->db->query("SELECT a.* FROM workflow_vendor a  join sstruktur_ymi b on a.flow_name = b.costcenter where b.divs = '$deptu'
        and a.level = '$levelu'");
    }
    foreach($cekflw->result_array() as $f):
        $flow = $f['flow_name'];
        $step1 = $f['step'];
        $lvlu = $f['level'];
    endforeach;

    $steps = substr($step1,9);
    $stepsi = intval($steps)+1;
    $step = 'Approval'.' '.$stepsi;

    $cekum = $this->db->query("SELECT * FROM workflow_vendor where step = '$step'");
    
    foreach($cekum->result_array() as $ck):
    $lvlum = $ck['level'];
    $flowm = $ck['flow_name'];
    endforeach;
    if($lvlum!='Division Head'){
    $cekmail = $this->db->query("SELECT a.* FROM pegawai a join workflow_vendor b on (a.wct = b.flow_name and a.level = b.level) join sstruktur_ymi c
    on c.costcenter = b.flow_name where b.step = '$step'
    and b.level = '$lvlum'");
    }else{
        $cekmail = $this->db->query("SELECT a.* FROM pegawai a join workflow_vendor b on (a.wct = b.flow_name and a.level = b.level) join sstruktur_ymi c
        on c.costcenter = b.flow_name where b.step = '$step'
        and b.level = '$lvlum'");
    }


    foreach($cekmail->result() as $e):
    $maila[] = $e->email;
    endforeach;
    $ckmaila = $maila;
    $addemail = join(',', $ckmaila);


    $result = array();
    $idc = array();
    foreach($id_number AS $key => $val){
        $result[] = array(
            "id_vendor" => $_POST['id_number'][$key], 
            "status" => $step,
            "workflow_status" => 'On Progress'
        );
    }

    foreach($id_number AS $key => $val){
        $idc[] = array(
            $_POST['id_number'][$key]
        );
    }
    
    $idcc = $id_number;
    $idin = join(',',$idcc);
    $nrpc = $this->db->query("SELECT a.*,b.nrp as nrpp,b.nama as nm FROM vendor a join pegawai b on a.nrp = b.nrp where  id_vendor in ('$idin')");
    foreach($nrpc->result() as $nr):
    $addnrp[] = $nr->nrpp;

    endforeach;
    $addnrpc = $addnrp;
    $addnrpu = join(',',$addnrpc);
    
    $data = array();
    foreach($id_number AS $key => $val){
        $data[] = array(
            "id_master_vendor" => $_POST['id_number'][$key], 
            "status" => $step,
            "approval" => $nrp,
            "tanggal" => date('Y-m-d H:i:s')
        );
    }

    $hsl = $this->db->update_batch('vendor',$result,'id_vendor');
    $this->db->insert_batch('approval_master_vendor',$data);

    $this->m_send_mail->sendEmail($addnrpu,$addemail);

}

}