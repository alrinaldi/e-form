<?php
Class M_complete extends CI_Model{

    public $db2;
    function __construct(){
        parent::__construct();
        $this->db2 = $this->load->database('db2',True);
        $this->load->model('admin/m_send_mail');
    }
 
public function item_complete (){
    $cekdept = $this->session->userdata('dept');
    $ceklevel = $this->session->userdata('level');

        $app = $this->db->query("SELECT DISTINCT(id_master_form),requestor from approval_master_item where approval_status = 'Complete'");
        return $app->result();
    

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

function size_complete(){
    $maxapr = $this->db->query("SELECT * FROM WORKFLOW_FORM where type = 'Master Size' ORDER BY (CONVERT(SUBSTRING(step,9,3), SIGNED INTEGER)) DESC LIMIT 1");
    foreach($maxapr->result() as $appr):
    $max = $appr->step;
    endforeach;
    $hsl = $this->db->query("SELECT DISTINCT(c.nama) as nama,a.* FROM approval_master a join master_size b on a.id_master_form = b.id_master_form  join pegawai c on b.requestor = c.nrp
    where a.status = '$max' and a.type = 'Master Size'");
    return $hsl->result();
}
function detail_size(){
        $id = $this->input->post('id_master_form');
        $hsl = $this->db->query("SELECT * FROM master_size where id_master_form = '$id'");
        return $hsl->result();
}
function get_size(){
    $id = $this->input->post('idi');
    $hsl = $this->db->query("SELECT * FROM size_list where id_master = '$id'");
    return $hsl->result();
}
function uploaded_size(){
    $id = $this->input->post('id_master_form');
    $maxapr = $this->db->query("SELECT * FROM WORKFLOW_FORM where type = 'Master Size' ORDER BY (CONVERT(SUBSTRING(step,9,3), SIGNED INTEGER)) DESC LIMIT 1");
    foreach($maxapr->result() as $appr):
    $max = $appr->step;
    endforeach;
    $cekmail = $this->db->query("SELECT a.*,b.* FROM approval_master a join pegawai b on a.approval = b.nrp where a.id_master_form = '$id'  and a.status = 'Submited'");
    foreach($cekmail->result_array() as $c):
        $nama = $c['nama'];
        $email = $c['email'];
    endforeach;

    $this->db->query("UPDATE master_size set status = 'Completed' where id_master_form = '$id'");
  $hsl = $this->db->query("UPDATE approval_master set status = 'Completed' where id_master_form = '$id' and status = '$max' and type='Master Size'");
  $this->m_send_mail->emailCompltSize($nama,$email,$id);

  
}
function uploaded_item(){
    $id = $this->input->post('id_master_form');
    $cekmail = $this->db->query("SELECT a.*,b.* FROM approval_master_item a join pegawai b on a.requestor = b.nrp where a.id_master_form = '$id' ");
    foreach($cekmail->result_array() as $c):
        $nama = $c['nama'];
        $email = $c['email'];
    endforeach;

    $this->db->query("UPDATE master_item set status = 'Uploaded' where id_master_form = '$id'");
    $this->db->query("UPDATE approval_master_item set approval_status = 'Uploaded' where id_master_form = '$id'");
    $this->m_send_mail->emailCompltItem($nama,$email,$id);
}
function complete_vend(){
    $hsl = $this->db->query("SELECT * FROM VENDOR WHERE status = 'Approval Complete'");
    return $hsl->result();
}
function uploaded_vend(){
    $id = $this->input->post('id_vendor');
    $hsl = $this->db->query("UPDATE vendor set status = 'Completed' where id_vendor = '$id'");
}


}