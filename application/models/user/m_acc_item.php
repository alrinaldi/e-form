<?php
Class M_acc_item extends CI_Model{

    public $db2;
    function __construct(){
        parent::__construct();
        $this->db2 = $this->load->database('db2',True);
    }

public function acc_assign(){
    $cekdept = $this->session->userdata('dept');
    $ceklevel = $this->session->userdata('level');
    $cekflow  = $this->db->query("SELECT a.* FROM workflow_item a join sstruktur_ymi b on a.flow_name = b.costcenter where b.dept = '$cekdept'
    and a.level = '$ceklevel' ");
    $ccekflow = $cekflow->num_rows();
    if($ccekflow>0){
        foreach($cekflow->result_array() as $i):
            $step = $i['step'];
        endforeach;
        $app = $this->db->query("SELECT DISTINCT(a.id_master_form),a.requestor,b.nama,substring(a.created_date,1,10) as date,substring(a.created_date,11,6) as jam 
        ,a.workflow_status from approval_master_item a join pegawai b on a.requestor = b.nrp join master_item c on
        a.id_master_form = c.id_master_form where  c.status = '$step'");
        return $app->result();
    }

}

public function item_detail(){
    $data = array(
        "id_master_form" => $this->input->post('idapp'),
    );
    $cek = $this->db->get_where('master_item',$data);
    return $cek->result();
}
public function list_group(){
    $hsl = $this->db2->get('INVENTITEMGROUP');
    return $hsl;
}

function edit_group(){

    $data = array(
        'item_group' => $this->input->post('item_group'),
    );
    $this->db->where('item_id',$this->input->post('item_id'));
    $this->db->update('master_item',$data);
    if($this->session->userdata('wct')=='3201'){
        $data1 = array(
                'acc_sec_expense' => $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s'),
        );
        $this->db->where('id_master_form',$this->input->post('id_master_form'));
        $this->db->update('approval_master_item',$data1);
    }else if($this->session->userdata('wct')=='3202'){
        $data2 = array(
            'acc_sec_asset' => $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s'),
    );
    $this->db->where('id_master_form',$this->input->post('id_master_form'));
    $this->db->update('approval_master_item',$data2,'id_master_form');
    }else if($this->session->userdata('wct')=='3203'){
        $data3 = array(
            'acc_sec_inventory' => $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s'),
    );
    $this->db->where('id_master_form',$this->input->post('id_master_form'));
    $this->db->update('approval_master_item',$data3,'id_master_form');
    }
}
function get_sizes(){
      $id = $this->input->post('idmid');
      $hsl = $this->db->query("SELECT * FROM size_item where id_master_item = '$id'");
      return $hsl->result();  
}

public function edit_item(){    
    $data = array(
        'item_group' => $this->input->post('item_group'),
        'status' =>'Approval 5'
    );
    $this->db->where('item_id',$this->input->post('item_id'));
    $this->db->update('master_item',$data);
    if($this->session->userdata('wct')=='3201'){
        $data1 = array(
                'acc_sec_expense' => $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s'),
        );
        $this->db->where('id_master_form',$this->input->post('id_master_form'));
        $this->db->update('approval_master_item',$data1);
    }else if($this->session->userdata('wct')=='3202'){
        $data2 = array(
            'acc_sec_asset' => $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s'),
    );
    $this->db->where('id_master_form',$this->input->post('id_master_form'));
    $this->db->update('approval_master_item',$data2,'id_master_form');
    }else if($this->session->userdata('wct')=='3203'){
        $data3 = array(
            'acc_sec_inventory' => $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s'),
    );
    $this->db->where('id_master_form',$this->input->post('id_master_form'));
    $this->db->update('approval_master_item',$data3,'id_master_form');
    }
}

function approve_item(){
    $id_master_form = $this->input->post('id_master_form');
$result = array();
$rst = array();
$cekdept = $this->session->userdata('dept');
$cekuser = $this->session->userdata('level');
$cekappr  = $this->db->query("SELECT a.* FROM workflow_item a join sstruktur_ymi b on a.flow_name = b.costcenter where b.dept = '$cekdept'
and a.level = '$cekuser'");
foreach($cekappr->result_array() as $o):
        $step1 = $o['step'];
endforeach;
$steps = substr($step1,9);
$stepsi = intval($steps)+1;
$step = 'Approval'.' '.$stepsi;
foreach($id_master_form AS $key => $val):
    $result[] = array(
        "id_master_form" => $_POST['id_master_form'][$key],
        "acc_dept" => $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s')
    );
endforeach;
foreach($id_master_form AS $key => $val):
    $rst[] = array(
        "id_master_form" => $_POST['id_master_form'][$key],
        "status" => $step
    );
endforeach;
$hsl = $this->db->update_batch('approval_master_item',$result,'id_master_form');
$rtn = $this->db->update_batch('master_item',$rst,'id_master_form');


$cekmail = $this->db->query("SELECT * FROM pegawai where dept = 'FINANCIAL PLANNING & ANALYSIS' and level = 'Section Head' ");
$cekreq = $this->db->query("SELECT * FROM approval_master_item where id_master_form = '$id_master_form'");
foreach($cekreq->result_array() as $r):
$requestor = $r['requestor'];
endforeach;
foreach($cekmail->result() as $e):
$maila[] = $e->email;
endforeach;
$ckmaila = $maila;
$addemail = join(',', $ckmaila);
$this->m_send_mail->emailItem($requestor,$addemail);

}

function get_fix($val){
    $hsl = $this->db2->query("SELECT TOP 5 * FROM ASSETGROUP where GROUPID like '%$val%'");
    return $hsl->result();
}
function get_igroup($val){
    $hsl = $this->db2->query("SELECT TOP 5 * FROM INVENTITEMGROUP where ITEMGROUPID like '%$val%' ");
    return $hsl->result();
}

function addgroup(){
    $item_id = $this->input->post('id1');
    $group = $this->input->post('val1');
    $idimid = $this->input->post('id_master_form');
    //echo $this->session->userdata('wct');
    if($this->session->userdata('wct')=='3201'){
        $data1 = array(
                'acc_sec_expense' => $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s'),
        );
        $this->db->where('id_master_form',$this->input->post('id_master_form'));
        $this->db->update('approval_master_item',$data1);

    }else if($this->session->userdata('wct')=='3202'){
       $apv =  $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s');
        $this->db->query("UPDATE approval_master_item set acc_sec_asset = '$apv' where id_master_form  = '$idimid' ");
        // $this->session->userdata('wct');

        //$data2 = array(
          //  'acc_sec_asset' => $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s'),
   // );
    //$this->db->where('id_master_form',$this->input->post('id_master_form'));
    //$this->db->update('approval_master_item',$data2,'id_master_form');
    }else if($this->session->userdata('wct')=='3203'){
        $data3 = array(
            'acc_sec_inventory' => $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s'),
    );
    $this->db->where('id_master_form',$this->input->post('id_master_form'));
    $this->db->update('approval_master_item',$data3,'id_master_form');
    }
    $this->db->query("UPDATE master_item set item_group = '$group' where item_id = '$item_id'");

}

function addfixa(){
    $item_id = $this->input->post('id');
    $fixa = $this->input->post('val');
    $idimid = $this->input->post('id_master_form');

    $this->db->query("UPDATE master_item set fixed_asset_group = '$fixa' where item_id = '$item_id'");
    if($this->session->userdata('wct')=='3201'){
        $data1 = array(
                'acc_sec_expense' => $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s'),
        );
        $this->db->where('id_master_form',$this->input->post('id_master_form'));
        $apv =  $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s');
        $this->db->query("UPDATE approval_master_item set acc_sec_asset = '$apv' where id_master_form  = '$idimid' ");
    }else if($this->session->userdata('wct')=='3203'){
        $data3 = array(
            'acc_sec_inventory' => $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s'),
    );
    $this->db->where('id_master_form',$this->input->post('id_master_form'));
    $this->db->update('approval_master_item',$data3,'id_master_form');
    }
}

function modal_item(){
$data = array(
    "id_master_form" => $this->input->post('id_master_form')
);
$hsl = $this->db->get_where("master_item",$data);
return $hsl->result();
}

function cekfix(){
$id = $this->input->post('id_master_form');
$hsl = $this->db->query("SELECT * FROM master_item where id_master_form = '$id' and item_group = ''");
return $hsl;
}
function cekgroup(){
$id = $this->input->post('id_master_form');
$hsl = $this->db->query("SELECT * FROM master_item where id_master_form  = '$id' and category = 'Asset' and fixed_asset_group = ''");
return $hsl;
}
}