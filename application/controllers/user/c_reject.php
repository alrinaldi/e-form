<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class C_reject extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }

        $this->load->model('user/m_send_mail');
        $this->load->model('user/m_acc_item');

    }
   function reject_item(){
    $idm = $this->input->post('id_master_form');
    $cmd = $this->input->post('command');
    $nrp = $this->session->userdata('nrp');
    $rst = array();
    foreach($idm AS $key => $val){
        $rst = array(
            
          $_POST['id_master_form'][$key],
        );
    }
    //echo $rst;
    print_r($rst);
        //$cekapr = $this->db->query("SELECT * FROM approval_master_item where id_master_form = '$id'");
    $cekid = $rst;
    $ids = join("','",$cekid);
   
    $this->db->select('*');
    $this->db->from('approval_master_item');
    $this->db->where_in('id_master_form',$ids);
    $cekapr = $this->db->get();  
        foreach($cekapr->result_array() as $a):
            $id= $a['id_master_form'];
    $aprs = $a['approval_status'];
    if($aprs=='Approval 1'){
        $step = 'Submited';
    }else{
    $steps = substr($aprs,9);
    $stepsi = intval($steps)-1;
    $step = 'Approval'.' '.$stepsi;
    }
    $steprj = substr($aprs,9);
    $srjc = 'Reject'.' '.$steprj;
    $tgl = date('Y-m-d H:i:s');
    $nrpt = $nrp.'-'.$tgl.'-'.$cmd;

    $cek =  $this->db->query(" SELECT * FROM reject_flow where id_master_form = '$id'");
    $ccek = $cek->num_rows();
    if($ccek>0){
        //$hslr = $this->db->query("")
        if($aprs=='Approval 1'){
                $hslr = $this->db->query("UPDATE reject_flow set sec = '$nrpt' where id_master_form = '$id'");
        }else if($aprs=='Approval 2'){
            $hslr = $this->db->query("UPDATE reject_flow set dept = '$nrpt' where id_master_form = '$id'");
        }else if($aprs=='Approval 3'){
            $hslr = $this->db->query("UPDATE reject_flow set divs = '$nrpt' where id_master_form = '$id'");
        }
    }else{

  if($aprs=='Approval 1'){
    $hslr = $this->db->query("INSERT INTO reject_flow (
        id_master_form,
        sec,
        dept,
        divs,
        acc_sec_asset,
        acc_sec_invnt,
        acc_sec_expense,
        acc_sec,
        fpa,
        acc_dept,
        it_bp,
        it_dept,
        requestor,
        approval_status,
        workflow_status,
        created_date) 
     SELECT 
id_master_form,
sec,
dept,
divs,
acc_sec_asset,
acc_sec_invnt,
acc_sec_expense,
acc_sec,
fpa,
acc_dept,
it_bp,
it_dept,
requestor,
approval_status,
workflow_status,
created_date FROM approval_master_item where id_master_form = '$id'");
    $hslr = $this->db->query("UPDATE reject_flow set sec = '$nrpt' where id_master_form = '$id'");
}else if($aprs=='Approval 2'){
    $hslr = $this->db->query("INSERT INTO reject_flow (
        id_master_form,
        sec,
        dept,
        divs,
        acc_sec_asset,
        acc_sec_invnt,
        acc_sec_expense,
        acc_sec,
        fpa,
        acc_dept,
        it_bp,
        it_dept,
        requestor,
        approval_status,
        workflow_status,
        created_date) 
     SELECT 
id_master_form,
sec,
dept,
divs,
acc_sec_asset,
acc_sec_invnt,
acc_sec_expense,
acc_sec,
fpa,
acc_dept,
it_bp,
it_dept,
requestor,
approval_status,
workflow_status,
created_date FROM approval_master_item where id_master_form = '$id'");
$hslr = $this->db->query("UPDATE reject_flow set dept = '$nrpt' where id_master_form = '$id'");
}else if($aprs=='Approval 3'){
    $hslr = $this->db->query("INSERT INTO reject_flow (
        id_master_form,
        sec,
        dept,
        divs,
        acc_sec_asset,
        acc_sec_invnt,
        acc_sec_expense,
        acc_sec,
        fpa,
        acc_dept,
        it_bp,
        it_dept,
        requestor,
        approval_status,
        workflow_status,
        created_date) 
     SELECT 
id_master_form,
sec,
dept,
divs,
acc_sec_asset,
acc_sec_invnt,
acc_sec_expense,
acc_sec,
fpa,
acc_dept,
it_bp,
it_dept,
requestor,
approval_status,
workflow_status,
created_date FROM approval_master_item where id_master_form = '$id'");
$hslr = $this->db->query("UPDATE reject_flow set divs = '$nrpt' where id_master_form = '$id'");
}else if($aprs=='Approval 4'){
    $hslr = $this->db->query("INSERT INTO reject_flow (
        id_master_form,
        sec,
        dept,
        divs,
        acc_sec_asset,
        acc_sec_invnt,
        acc_sec_expense,
        acc_sec,
        fpa,
        acc_dept,
        it_bp,
        it_dept,
        requestor,
        approval_status,
        workflow_status,
        created_date) 
     SELECT 
id_master_form,
sec,
dept,
divs,
acc_sec_asset,
acc_sec_invnt,
acc_sec_expense,
acc_sec,
fpa,
acc_dept,
it_bp,
it_dept,
requestor,
approval_status,
workflow_status,
created_date FROM approval_master_item where id_master_form = '$id'");
}
    }

    $query = $this->db->query("UPDATE approval_master_item set approval_status = '$step',workflow_status = 'Reject' where id_master_form = '$id'");
    $q1 = $this->db->query("UPDATE master_item set status = '$step' where id_master_form = '$id'");
    $q2 = $this->db->query("INSERT INTO reject_master (id_master_form,reject,status,tanggal,typre,note) value ('$id','$nrp','$srjc','$tgl','Reject Item','$cmd')");

    endforeach;


    

    }
    function reject_itema(){
        $idm = $this->input->post('id_master_form');
        $cmd = $this->input->post('command');
        $nrp = $this->session->userdata('nrp');
 
       
        $this->db->select('*');
        $this->db->from('approval_master_item');
        $this->db->where('id_master_form',$idm);
        $cekapr = $this->db->get();  
            foreach($cekapr->result_array() as $a):
                $id= $a['id_master_form'];
        $aprs = $a['approval_status'];
        if($aprs=='Approval 1'){
            $step = 'Submited';
        }else{
        $steps = substr($aprs,9);
        $stepsi = intval($steps)-1;
        $step = 'Approval'.' '.$stepsi;
        }
        $steprj = substr($aprs,9);
        $srjc = 'Reject'.' '.$steprj;
        $tgl = date('Y-m-d H:i:s');
        $nrpt = 'Rejected'.'-'.$nrp.'-'.$tgl.'-'.$cmd;
    
        $cek =  $this->db->query(" SELECT * FROM reject_flow where id_master_form = '$id'");
        $ccek = $cek->num_rows();
        if($ccek>0){
            //$hslr = $this->db->query("")
            if($aprs=='Approval 1'){
                    $hslr = $this->db->query("UPDATE reject_flow set sec = '$nrpt' where id_master_form = '$id'");
            }else if($aprs=='Approval 2'){
                $hslr = $this->db->query("UPDATE reject_flow set dept = '$nrpt' where id_master_form = '$id'");
            }else if($aprs=='Approval 3'){
                $hslr = $this->db->query("UPDATE reject_flow set divs = '$nrpt' where id_master_form = '$id'");
            }else if($aprs=='Approval 4'){
                $hslr = $this->db->query("UPDATE reject_flow set acc_sec = '$nrpt' where id_master_form = '$id'");

            }
        }else{
    
      if($aprs=='Approval 1'){
        $hslr = $this->db->query("INSERT INTO reject_flow (
            id_master_form,
            sec,
            dept,
            divs,
            acc_sec_asset,
            acc_sec_invnt,
            acc_sec_expense,
            acc_sec,
            fpa,
            acc_dept,
            it_bp,
            it_dept,
            requestor,
            approval_status,
            workflow_status,
            created_date) 
         SELECT 
    id_master_form,
    sec,
    dept,
    divs,
    acc_sec_asset,
    acc_sec_invnt,
    acc_sec_expense,
    acc_sec,
    fpa,
    acc_dept,
    it_bp,
    it_dept,
    requestor,
    approval_status,
    workflow_status,
    created_date FROM approval_master_item where id_master_form = '$id'");
        $hslr = $this->db->query("UPDATE reject_flow set sec = '$nrpt' where id_master_form = '$id'");
    }else if($aprs=='Approval 2'){
        $hslr = $this->db->query("INSERT INTO reject_flow (
            id_master_form,
            sec,
            dept,
            divs,
            acc_sec_asset,
            acc_sec_invnt,
            acc_sec_expense,
            acc_sec,
            fpa,
            acc_dept,
            it_bp,
            it_dept,
            requestor,
            approval_status,
            workflow_status,
            created_date) 
         SELECT 
    id_master_form,
    sec,
    dept,
    divs,
    acc_sec_asset,
    acc_sec_invnt,
    acc_sec_expense,
    acc_sec,
    fpa,
    acc_dept,
    it_bp,
    it_dept,
    requestor,
    approval_status,
    workflow_status,
    created_date FROM approval_master_item where id_master_form = '$id'");
    $hslr = $this->db->query("UPDATE reject_flow set dept = '$nrpt' where id_master_form = '$id'");
    }else if($aprs=='Approval 3'){
        $hslr = $this->db->query("INSERT INTO reject_flow (
            id_master_form,
            sec,
            dept,
            divs,
            acc_sec_asset,
            acc_sec_invnt,
            acc_sec_expense,
            acc_sec,
            fpa,
            acc_dept,
            it_bp,
            it_dept,
            requestor,
            approval_status,
            workflow_status,
            created_date) 
         SELECT 
    id_master_form,
    sec,
    dept,
    divs,
    acc_sec_asset,
    acc_sec_invnt,
    acc_sec_expense,
    acc_sec,
    fpa,
    acc_dept,
    it_bp,
    it_dept,
    requestor,
    approval_status,
    workflow_status,
    created_date FROM approval_master_item where id_master_form = '$id'");
    $hslr = $this->db->query("UPDATE reject_flow set divs = '$nrpt' where id_master_form = '$id'");
    }else if($aprs=='Approval 4'){
        $hslr = $this->db->query("INSERT INTO reject_flow (
            id_master_form,
            sec,
            dept,
            divs,
            acc_sec_asset,
            acc_sec_invnt,
            acc_sec_expense,
            acc_sec,
            fpa,
            acc_dept,
            it_bp,
            it_dept,
            requestor,
            approval_status,
            workflow_status,
            created_date) 
         SELECT 
    id_master_form,
    sec,
    dept,
    divs,
    acc_sec_asset,
    acc_sec_invnt,
    acc_sec_expense,
    acc_sec,
    fpa,
    acc_dept,
    it_bp,
    it_dept,
    requestor,
    approval_status,
    workflow_status,
    created_date FROM approval_master_item where id_master_form = '$id'");
        $hslr = $this->db->query("UPDATE reject_flow set acc_sec = '$nrpt' where id_master_form = '$id'");

    }
        }
    
        $query = $this->db->query("UPDATE approval_master_item set approval_status = '$step',workflow_status = 'Reject' where id_master_form = '$id'");
        $q1 = $this->db->query("UPDATE master_item set status = '$step' where id_master_form = '$id'");
        $q2 = $this->db->query("INSERT INTO reject_master (id_master_form,reject,status,tanggal,typre,note) value ('$id','$nrp','$srjc','$tgl','Reject Item','$cmd')");
    
        endforeach;
    
    
    }

    function reject_vend(){
        $id = $this->input->post('id_number');
        $cmd = $this->input->post('command');
        $nrp = $this->session->userdata('nrp');
        foreach($id AS $key => $val){
            $rst = array(
                
              $_POST['id_number'][$key],
            );
        }
        //echo $rst;
        print_r($rst);
            //$cekapr = $this->db->query("SELECT * FROM approval_master_item where id_master_form = '$id'");
        $cekid = $rst;
        $ids = join("','",$cekid);

        $cekvend = $this->db->query("SELECT * FROM VENDOR where id_vendor in('$ids')");
        foreach($cekvend->result_array() as $i):
        $id_vendor = $i['id_vendor'];
        $status = $i['status'];
        if($status=='Approval 1'){
            $step = 'Created';
        }else{
        $steps = substr($status,9);
        $stepsi = intval($steps)-1;
        $step = 'Approval'.' '.$stepsi;
        }
        $steprj = substr($status,9);
        $srjc = 'Reject'.' '.$steprj;
        $tgl = date('Y-m-d H:i:s');
        $nrpt = $nrp.'-'.$tgl;
        $ins = $this->db->query("INSERT INTO reject_master  (id_master_form,reject,status,approval_status,tanggal,typre,note)
        values ('$id_vendor','$nrp','$steprj','$status','$tgl','Reject Vendor','$cmd')");
        $upd = $this->db->query("UPDATE vendor set status='$step',workflow_status = 'Reject' where id_vendor = '$id_vendor'");

        endforeach;
    }
    function reject_size(){
        $id = $this->input->post('id_number');
        $cmd = $this->input->post('command');
        $nrp = $this->session->userdata('nrp');
        foreach($id AS $key => $val){
            $rst = array(
                
              $_POST['id_number'][$key],
            );
        }
        //echo $rst;
        print_r($rst);
            //$cekapr = $this->db->query("SELECT * FROM approval_master_item where id_master_form = '$id'");
        $cekid = $rst;
        $ids = join("','",$cekid);

        $cekvend = $this->db->query("SELECT * FROM master_size where id_master_form in('$ids')");
        foreach($cekvend->result_array() as $i):    
        $id_m = $i['id_master_form'];
        $status = $i['status'];
        if($status=='Approval 1'){
            $step = 'Submited';
        }else{
        $steps = substr($status,9);
        $stepsi = intval($steps)-1;
        $step = 'Approval'.' '.$stepsi;
        }
        $steprj = substr($status,9);
        $srjc = 'Reject'.' '.$steprj;
        $tgl = date('Y-m-d H:i:s');
        $nrpt = $nrp.'-'.$tgl;
        $ins = $this->db->query("INSERT INTO approval_master  (id_master_form,approval,status,tanggal,type,note)
        values ('$id_m','$nrp','$srjc','$tgl','Reject Size','$cmd')");
        $upd = $this->db->query("UPDATE master_size set status='$step',workflow_status = 'Reject' where id_master_form = '$id_m'");

        endforeach;  
      }

      function reject_sizea(){
        $id = $this->input->post('id_master_form');
        $cmd = $this->input->post('command');
        $nrp = $this->session->userdata('nrp');
 

        $cekvend = $this->db->query("SELECT * FROM master_size where id_master_form ='$id'");
        foreach($cekvend->result_array() as $i):    
        $id_m = $i['id_master_form'];
        $status = $i['status'];
        if($status=='Approval 1'){
            $step = 'Submited';
        }else{
        $steps = substr($status,9);
        $stepsi = intval($steps)-1;
        $step = 'Approval'.' '.$stepsi;
        }
        $steprj = substr($status,9);
        $srjc = 'Reject'.' '.$steprj;
        $tgl = date('Y-m-d H:i:s');
        $nrpt = $nrp.'-'.$tgl;
        $ins = $this->db->query("INSERT INTO approval_master  (id_master_form,approval,status,tanggal,type,note)
        values ('$id_m','$nrp','$steprj','$tgl','Reject Size','$cmd')");
        $upd = $this->db->query("UPDATE master_size set status='$step',workflow_status = 'Reject' where id_master_form = '$id_m'");

        endforeach;  
      }
}