<?php
 Class M_req_size extends CI_Model{
    
    public $db2;
    function __construct(){
        parent::__construct();
        $this->db2 = $this->load->database('db2',True);
        $this->load->model('user/m_send_mail');
    }

  function get_form(){
    $lv = $this->session->userdata('level');
    $dept = $this->session->userdata('dept');
    $divu = $this->session->userdata('divisi');
   
    if($lv!='Division Head'){
     $cekflow  = $this->db->query("SELECT a.* FROM workflow_form a join sstruktur_ymi b on a.flow_name = b.costcenter where b.dept = '$dept'
    and a.level = '$lv' and a.type = 'Master Size' ");
    if($cekflow->num_rows() >0){
    foreach($cekflow->result_array() as $v):
    $flown = $v['flow_name'];
    $step = $v['step'];
    endforeach;
    if($dept!='INFORMATION TECHNOLOGY'){
    $hsl = $this->db->query("SELECT DISTINCT(id_master_form) as id,b.nama,substring(a.created_date,1,10) as created_date,substring(a.created_date,11,6) as jam 
    FROM master_size a join pegawai b on a.requestor = b.nrp where a.status = '$step' and b.dept = '$dept'");
    }else{
        $hsl = $this->db->query("SELECT DISTINCT(id_master_form) as id,b.nama,substring(a.created_date,1,10) as created_date,substring(a.created_date,11,6) as jam 
        FROM master_size a join pegawai b on a.requestor = b.nrp where a.status = '$step'");
    }
    }else{
        $flownm = $this->db->query("SELECT * FROM workflow_form where level = '$lv' and flow_name = '$lv'");
        foreach($flownm->result_array() as $v):
        $flown = $v['flow_name'];
        $step = $v['step'];
        endforeach;
        if($dept!='INFORMATION TECHNOLOGY'){
            $hsl = $this->db->query("SELECT DISTINCT(id_master_form) as id,b.nama,substring(a.created_date,1,10) as created_date,substring(a.created_date,11,6) as jam 
         FROM master_size a join pegawai b on a.requestor = b.nrp where a.status = '$step' and b.dept = '$dept'");
           }else{
            $hsl = $this->db->query("SELECT DISTINCT(id_master_form) as id,b.nama,substring(a.created_date,1,10) as created_date,substring(a.created_date,11,6) as jam 
            FROM master_size a join pegawai b on a.requestor = b.nrp where a.status = '$step'");
        }
    }

}else{

    
    $cekflow  = $this->db->query("SELECT a.* FROM workflow_form a join sstruktur_ymi b on a.flow_name = b.costcenter where b.divs = '$dept'
    and a.level = '$lv' and a.type = 'Master Size' ");

    if($cekflow->num_rows() >0){
        foreach($cekflow->result_array() as $v):
        $flown = $v['flow_name'];
        $step = $v['step'];
        endforeach;
        if($divu != 'FINANCE ACCOUNTING & IT DIVISION'){
        $hsl = $this->db->query("SELECT DISTINCT(id_master_form) as id,b.nama,substring(a.created_date,1,10) as created_date,substring(a.created_date,11,6) as jam 
        FROM master_size a join pegawai b on a.requestor = b.nrp where a.status = '$step' and b.divisi = '$dept'");
        }else{
            $hsl = $this->db->query("SELECT DISTINCT(id_master_form) as id,b.nama,substring(a.created_date,1,10) as created_date,substring(a.created_date,11,6) as jam 
            FROM master_size a join pegawai b on a.requestor = b.nrp where a.status = '$step'");
        }
        }else{
            $flownm = $this->db->query("SELECT * FROM workflow_form where level = '$lv' and flow_name = '$lv'");
            foreach($flownm->result_array() as $v):
            $flown = $v['flow_name'];
            $step = $v['step'];
            endforeach;
            if($divu != 'FINANCE ACCOUNTING & IT DIVISION'){
            $hsl = $this->db->query("SELECT DISTINCT(id_master_form) as id,b.nama,substring(a.created_date,1,10) as created_date,substring(a.created_date,11,6) as jam 
            FROM master_size a join pegawai b on a.requestor = b.nrp where a.status = '$step' and b.divisi = '$dept'");
            }else{
                $hsl = $this->db->query("SELECT DISTINCT(id_master_form) as id,b.nama,substring(a.created_date,1,10) as created_date,substring(a.created_date,11,6) as jam 
                FROM master_size a join pegawai b on a.requestor = b.nrp where a.status = '$step'");
            }
        }
}
   return $hsl->result();
  } 
  function get_detail(){
      $idm = $this->input->post('id');
      $hsl = $this->db->query("SELECT * FROM master_size where id_master_form = '$idm'");
      return $hsl->result();
  }
  function get_size_d(){
      $id = $this->input->post('id_i');
      $hsl  = $this->db->query("SELECT * FROM size_list where id_master = '$id'");

      return $hsl->result();
  }
  function item_u(){
      $id_number = $this->input->post('id_number');
      $type = $this->input->post("type");
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
   echo $step = 'Approval'.' '.$stepsi;
      $data = array();
      foreach($id_number AS $key => $val){
          $data[] = array(
              "id_master_form" => $_POST['id_number'][$key], 
              "status" => $step,
              "workflow_status" => "On Progress"
           
          );
      }
      $this->db->update_batch("master_size",$data,'id_master_form');

      foreach($id_number AS $key => $val){
       $idmd[] = $_POST['id_number'][$key];
    }
    echo $idmd[0];
      $typ = 'Master Size';
      $cekmail = $this->db->query("SELECT * FROM workflow_form where type = 'Master Size' and step = '$step'");
      foreach($cekmail->result_array() as $c):
        $fl = $c['flow_name'];
        $lvl = $c['level'];
    endforeach;
    if($fl=='Section Head'){
        $cekpgw = $this->db->query("SELECT b.* FROM approval_master a join pegawai b on a.approval = b.nrp and b.level = '$fl' and a.id_master_form = '$idmd[0]' and status ='Submited'");
        foreach($cekpgw->result_array() as $p):
        $deptp = $p['dept'];
        $namam = $p['nama'];
        endforeach;
        $pgw = $this->db->query("SELECT * FROM pegawai where dept = '$deptp' and level = '$fl'");
        foreach($pgw->result_array() as $m):
      //  $namam = $m['nama'];
        $emailm = $m['email'];
        $this->m_send_mail->emailSize($namam,$emailm,$typ);
        endforeach;

    }else if($fl=='Department Head'){
        $cekpgw = $this->db->query("SELECT b.* FROM approval_master a join pegawai b on a.approval = b.nrp  and a.id_master_form = '$idmd[0]' and a.status ='Submited'");
        foreach($cekpgw->result_array() as $p):
        $deptp = $p['dept'];
        $namam = $p['nama'];
        endforeach;
        $pgw = $this->db->query("SELECT * FROM pegawai where dept = '$deptp' and level = '$fl'");
        foreach($pgw->result_array() as $m):
       // $namam = $m['nama'];
        $emailm = $m['email'];
        $this->m_send_mail->emailSize($namam,$emailm,$typ);
        endforeach;
    }else if($fl='Division Head'){
        $cekpgw = $this->db->query("SELECT b.* FROM approval_master a join pegawai b on a.approval = b.nrp  and a.id_master_form = '$idmd[0]' and a.status ='Submited'");
        foreach($cekpgw->result_array() as $p):
        $deptp = $p['dept'];
        $divp = $p['divisi'];
        $namam = $p['nama'];
        endforeach;
        $pgw = $this->db->query("SELECT * FROM pegawai where dept = '$divp' and level = '$fl'");
        foreach($pgw->result_array() as $m):
        $emailm = $m['email'];
        $this->m_send_mail->emailSize($namam,$emailm,$typ);
        endforeach;
    }else{
        $cekpgw = $this->db->query("SELECT b.* FROM approval_master a join pegawai b on a.approval = b.nrp  and a.id_master_form = '$idmd[0]' and a.status ='Submited'");
        foreach($cekpgw->result_array() as $p):
        $deptp = $p['dept'];
        $divp = $p['divs'];
        $namam = $p['nama'];    
        endforeach;
        if($lvl != 'Division Head'){
        $pgw = $this->db->query("SELECT a.* FROM pegawai a join sstruktur_ymi b on a.wct  = b.costcenter where a.wct = '$fl' and level = '$lvl'");
        foreach($pgw->result_array() as $m):
            $emailm = $m['email'];
            $this->m_send_mail->emailSize($namam,$emailm,$typ);
            endforeach;
        }else{
            $pgw = $this->db->query("SELECT a.* FROM pegawai a join sstruktur_ymi b on a.divs = b.divisi where b.costcenter = '$fl' and level = '$lvl'");
            foreach($pgw->result_array() as $m):
                $emailm = $m['email'];
                $this->m_send_mail->emailSize($namam,$emailm,$typ);
                endforeach;
        }
  }
}
 }