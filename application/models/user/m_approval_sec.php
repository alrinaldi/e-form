<?php
Class M_approval_sec extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->db2 = $this->load->database('db2',True);
        $this->load->model('user/m_send_mail');
    }


function approval_req(){
    $dept = $this->session->userdata('dept');
    $lv  = $this->session->userdata('level');
    $cekapproval = $this->db->query("SELECT * FROM workflow_item where flow_name = 'Section Head'");
    $capp = $cekapproval->num_rows();
    if($capp>0){
        foreach($cekapproval->result_array() as $i):
            $step = $i['step'];
        endforeach;
        $app = $this->db->query("SELECT DISTINCT(a.id_master_form),a.requestor,b.nama,substring(a.created_date,1,10) as created_date,substring(a.created_date,11,6) as jam,a.workflow_status from approval_master_item a join pegawai b on a.requestor = b.nrp join master_item c on
        a.id_master_form = c.id_master_form where b.dept = '$dept' and c.status = '$step'");
    }else{
       $flw =  $this->db->query("SELECT a.* FROM workflow_item a join sstruktur_ymi b on a.flow_name = b.costcenter where b.dept = '$dept'
    and a.level = '$lv' ");
        foreach($flw->result_array() as $f):
        $step = $f['step'];
        endforeach;
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
$result = array();
$rst = array();
$deptu = $this->session->userdata('dept');

$cekuser = $this->session->userdata('level');
$cekappr = $this->db->query("SELECT * FROM workflow_item where flow_name = '$cekuser' and level = '$cekuser' ");
foreach($cekappr->result_array() as $o):
        $step1 = $o['step'];
endforeach;
$steps = substr($step1,9);
$stepsi = intval($steps)+1;
$step = 'Approval'.' '.$stepsi;
foreach($id_master_form AS $key => $val):
    $result[] = array(
        "id_master_form" => $_POST['id_master_form'][$key],
        "sec" => $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s'),
        "approval_status"=>$step,
        "workflow_status" =>'Progress'
    );
endforeach;
foreach($id_master_form AS $key => $val):
    $rst[] = array(
        "id_master_form" => $_POST['id_master_form'][$key],
        "status" => $step
    );
endforeach;

$cekmail = $this->db->query("SELECT * FROM pegawai where dept = '$deptu' and level = 'Department Head' ");
$cekreq = $this->db->query("SELECT a.*,b.* FROM approval_master_item a join pegawai b on a.requestor = b.nrp where id_master_form = '$id_master_form'");
foreach($cekreq->result_array() as $r):
$requestor = $r['requestor'];
$namar = $r['nama'];
//$deptq = $r['dept'];
endforeach;

//$ceknama = $this->db->query("SELECT * FROM ")

foreach($cekmail->result_array() as $e):
$maila = $e['email'];
$namal = $e['nama'];
endforeach;
/*
$ckmaila = $maila;
$addemail = join(',', $ckmaila);

$cknm = $namal;
$namar = join(',', $cknm);
*/
$this->m_send_mail->emailItem($namar,$maila);

$hsl = $this->db->update_batch('approval_master_item',$result,'id_master_form');
$rtn = $this->db->update_batch('master_item',$rst,'id_master_form');


}
function get_size_d(){
    
        $id = $this->input->post('id_i');
        //$id = 'JD1300381';
    $hsl = $this->db->query("SELECT * FROM size_item where id_master_item  = '$id'");
    return $hsl->result();

}


}