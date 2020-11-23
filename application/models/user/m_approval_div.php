<?php
Class M_approval_div extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->db2 = $this->load->database('db2',True);
        $this->load->model('user/m_send_mail');
    }


    function approval_req(){
        $dept = $this->session->userdata('dept');
        
        $divc = $this->session->userdata('divisi');
        if($divc!='FINANCE ACCOUNTING & IT DIVISION'){
        $cekapproval = $this->db->query("SELECT * FROM workflow_item where flow_name = 'Division Head'");
        }else{
            $cekapproval = $this->db->query("SELECT * FROM WORKFLOW_item ORDER BY CONVERT(SUBSTRING(step,9,3), SIGNED INTEGER) DESC limit 1 ");
        }
        $capp = $cekapproval->num_rows();
        if($capp>0){
            foreach($cekapproval->result_array() as $i):
                $step = $i['step'];
            endforeach;
        }else{
            $step = 0;
        }
        if($divc!='FINANCE ACCOUNTING & IT DIVISION'){
        $app = $this->db->query("SELECT DISTINCT(a.id_master_form),a.workflow_status,a.requestor,b.nama,substring(a.created_date,1,10) as created_date,substring(a.created_date,11,6) as jam from approval_master_item a join pegawai b on a.requestor = b.nrp join master_item c on
        a.id_master_form = c.id_master_form where b.divisi = '$dept' and c.status = '$step'");
        }else{
            $app = $this->db->query("SELECT DISTINCT(a.id_master_form),a.workflow_status,a.requestor,b.nama,substring(a.created_date,1,10) as created_date,substring(a.created_date,11,6) as jam from approval_master_item a join pegawai b on a.requestor = b.nrp join master_item c on
            a.id_master_form = c.id_master_form where c.status = '$step'");         
        }
        return $app->result();
    }
    
    function detail_item(){
        $data = array(
            "id_master_form" => $this->input->post('id_master_form'),
        );
        $hsl = $this->db->get_where('master_item',$data);
        return $hsl->result();
    }
    function approve_item(){
    $id_master_form = $this->input->post('id_master_form');
    $divc = $this->session->userdata('divisi');
    $result = array();
    $rst = array();
    $cekuser = $this->session->userdata('level');
    if($divc!='FINANCE ACCOUNTING & IT DIVISION'){
$cekappr = $this->db->query("SELECT * FROM workflow_item where flow_name = '$cekuser' and level = '$cekuser' ");
    }else{
        $cekappr = $this->db->query("SELECT * FROM workflow_item ORDER BY CONVERT(SUBSTRING(step,9,3), SIGNED INTEGER) DESC limit 1");

    }
foreach($cekappr->result_array() as $o):
        $step1 = $o['step'];
endforeach;
$steps = substr($step1,9);
$stepsi = intval($steps)+1;
$step = 'Approval'.' '.$stepsi;
if($divc!="FINANCE ACCOUNTING & IT DIVISION"){
    foreach($id_master_form AS $key => $val):
        $result[] = array(
            "id_master_form" => $_POST['id_master_form'][$key],
            "divs" => $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s'),
            "approval_status" => $step,
            "workflow_status" =>'Progress'
        );
    endforeach;
    foreach($id_master_form AS $key => $val):
        $rst[] = array(
            "id_master_form" => $_POST['id_master_form'][$key],
            "status" => $step
        );
    endforeach;
}else{
    foreach($id_master_form AS $key => $val):
        $result[] = array(
            "id_master_form" => $_POST['id_master_form'][$key],
            "it_dept" => $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s'),
            "approval_status" => 'Complete',
            "workflow_status" =>'Complete'
        );
    endforeach;
    foreach($id_master_form AS $key => $val):
        $rst[] = array(
            "id_master_form" => $_POST['id_master_form'][$key],
            "status" => 'Complete'
        );
    endforeach;

}
    $hsl = $this->db->update_batch('approval_master_item',$result,'id_master_form');
    $rtn = $this->db->update_batch('master_item',$rst,'id_master_form');
    
    $divu = $this->session->userdata('divisi');
    $cekmail = $this->db->query("SELECT * FROM pegawai where dept = 'ACCOUNTING & TAX' and level = 'Section Head' ");
    $ids = join("','",$id_master_form);   
    $cekreq = $this->db->query("SELECT a.*,b.* FROM approval_master_item a join pegawai b on a.requestor = b.nrp where a.id_master_form in ('$ids')");
    foreach($cekreq->result_array() as $r):
    $requestor = $r['requestor'];
    $namaz = $r['nama'];
    endforeach;
    foreach($cekmail->result_array() as $e):
    //$maila[] = $e->email;
    $this->m_send_mail->emailItem($namaz,$e['email']);
    endforeach;
    //$ckmaila = $maila;
    //$addemail = join(',', $ckmaila);
   
    

    }
    function get_size_d(){
    
        $id = $this->input->post('id_i');
        //$id = 'JD1300381';
    $hsl = $this->db->query("SELECT * FROM size_item where id_master_item  = '$id'");
    return $hsl->result();

}
    
}