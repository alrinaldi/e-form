<?php
Class M_item_it extends CI_Model{

    public $db2;
    function __construct(){
        parent::__construct();
        $this->db2 = $this->load->database('db2',True);
    }
 
public function it_assign(){
    $cekdept = $this->session->userdata('dept');
    $ceklevel = $this->session->userdata('level');
    if($ceklevel=='Sys Admin'){
        $ceklevel = 'Section Head';
    }else{
        $ceklevel;
    }
    $cekflow  = $this->db->query("SELECT a.* FROM workflow_item a join sstruktur_ymi b on a.flow_name = b.costcenter where b.dept = '$cekdept'
    and a.level = '$ceklevel'");
    $ccekflow = $cekflow->num_rows();
    if($ccekflow>0){
        foreach($cekflow->result_array() as $i):
            $step = $i['step'];
        endforeach;
        $app = $this->db->query("SELECT DISTINCT(a.id_master_form),a.requestor,b.nama,substring(a.created_date,1,10) as created_date,substring(a.created_date,11,6) as jam 
        from approval_master_item a join pegawai b on a.requestor = b.nrp join master_item c on
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
public function list_category(){
    $hsl = $this->db2->get('ECORESCATEGORY');
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

function treev(){
//    $query = "SELECT * FROM country_state_city";
$query = $this->db2->query("SELECT * FROM ECORESCATEGORY where PARENTCATEGORY <> 0 ");


foreach($query->result_array() as $row):
$sub_data["id"] = $row["RECID"];
$sub_data["name"] = $row["NAME"];
$sub_data["text"] = $row["NAME"];
$sub_data["parent_id"] = $row["PARENTCATEGORY"];
$data[] = $sub_data;
endforeach;



/*
$result = mysqli_query($connect, $query);

while($row = mysqli_fetch_array($result)){

 $sub_data["id"] = $row["id"];

 $sub_data["name"] = $row["name"];

 $sub_data["text"] = $row["name"];

 $sub_data["parent_id"] = $row["parent_id"];

 $data[] = $sub_data;

}
*/

foreach($data as $key => &$value){

 $output[$value["id"]] = &$value;

}

foreach($data as $key => &$value){

 if($value["parent_id"] && isset($output[$value["parent_id"]])){

  $output[$value["parent_id"]]["nodes"][] = &$value;

 }

}

foreach($data as $key => &$value){

 if($value["parent_id"] && isset($output[$value["parent_id"]])){

  unset($data[$key]);

 }

}

echo json_encode($data);
}

function tree_all() {
    $result = $this->db2->query("SELECT  RECID as id, NAME as name,NAME as text, PARENTCATEGORY as parent_id FROM ECORESCATEGORY  ")->result_array();
        foreach ($result as $row) {
            $data[] = $row;
        }
        return $data;
}

function detail_itemit(){
    $id = $this->input->post('id_master_form');
    $hsl = $this->db->query("SELECT * FROM master_item where id_master_form = '$id'");
    return $hsl->result();
}
function get_sized(){
    $id = $this->input->post('idmid');
    $hsl = $this->db->query("SELECT * FROM size_item where id_master_item = '$id'");
    return $hsl->result();
}
function add_prodc(){
    $prodc = $this->input->post('prodc');
    $id = $this->input->post('item_id');
    $hsl = $this->db->query("UPDATE master_item set product_category = '$prodc' where item_id = '$id'");
}

}