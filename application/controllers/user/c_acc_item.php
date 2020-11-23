<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class C_acc_item extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if(($this->session->userdata('level')!='Section Head' || $this->session->userdata('dept')!='Department Head') && $this->session->userdata('dept')!='ACCOUNTING & TAX'){
            redirect('login');
        }

        $this->load->model('user/m_send_mail');
        $this->load->model('user/m_acc_item');

    }
    function assign_item(){
        $this->load->view('user/v_assign_acc');
    }
    function get_sizes(){
        $data = $this->m_acc_item->get_sizes();
        echo json_encode($data);
    }
    function detail_form(){
        $id = $this->uri->segment('4');
        $x['id'] = $id;
        $x['data'] = $this->db->query("SELECT * FROM master_item where id_master_form  = '$id'");
        $x['cekitem'] = $this->db->query("SELECT * FROM master_item where id_master_form  = '$id' and item_group =''");
        $x['cekfix'] = $this->db->query("SELECT * FROM master_item where id_master_form = '$id' and category = 'Asset' and fixed_asset_group = ''");
        $x['group'] = $this->m_acc_item->list_group();
        $this->load->view('user/v_detail_form',$x);
    }
    function acc_assign(){
        $data = $this->m_acc_item->acc_assign();
        echo json_encode($data);
    }
    function edit_group(){
    echo $item_id = $this->input->post('item_id');
         $cekapr = $this->db->query("SELECT * FROM master_item where item_id = '$item_id' ");
         foreach($cekapr->result_array() as $r):
            $status = $r['status'];
        endforeach;
        
        $steps = substr($status,9);
        $stepsi = intval($steps)+1;
        $step = 'Approval'.' '.$stepsi;

    echo $item_group = $this->input->post('item_group');
        $id_master_form = $this->input->post('id_master_form');
        $nrp = $this->session->userdata('nrp');
    echo    $wct = $this->session->userdata('wct');
        $this->db->query("UPDATE master_item set item_group = '$item_group',status = '$step' where item_id = '$item_id'");
        if($this->session->userdata('wct')=='3201'){
                    $acc_sec_expense = $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s');
            $this->db->query("UPDATE approval_master_item set acc_sec_expense = '$acc_sec_expense' where id_master_form = '$id_master_form'");
        }else if($this->session->userdata('wct')=='3202'){
                $acc_sec_asset = $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s');
                $this->db->query("UPDATE approval_master_item set acc_sec_asset = '$acc_sec_asset' where id_master_form = '$id_master_form'");
        }else if($this->session->userdata('wct')=='3203'){
                $acc_sec_inventory = $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s');
                $this->db->query("UPDATE approval_master_item set acc_sec_inventory = '$acc_sec_inventory' where id_master_form = '$id_master_form'");
        }
        redirect('user/c_acc_item/detail_form/'.$id_master_form);
    }

    function submit_item(){
        echo   $id_master_form = $this->input->post('id_master_form1');
        $cekaprovi = $this->db->query("SELECT * FROM approval_master_item where id_master_form = '$id_master_form'");
        foreach($cekaprovi->result_array() as $ci):
        $aprsts = $ci['approval_status'];
        endforeach;
        $cekflow = $this->db->query("SELECT * FROM workflow_item where step = '$aprsts'");
        $level = $this->session->userdata('level');
        $steps = substr($aprsts,9);
        $stepsi = intval($steps)+1;
        $step = 'Approval'.' '.$stepsi;
        $nrp = $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s');

        if($level=='Section Head'){
        $this->db->query("UPDATE approval_master_item set acc_sec = '$nrp',approval_status = '$step',workflow_status = 'Progress',acc_sec = '$nrp' where id_master_form = '$id_master_form' ");
        $this->db->query("UPDATE master_item set status = '$step' where id_master_form = '$id_master_form' ");

        }else{
            $this->db->query("UPDATE approval_master_item set approval_status = '$step',acc_dept = '$nrp',workflow_status = 'Progress'  where id_master_form = '$id_master_form' ");
        $this->db->query("UPDATE master_item set status = '$step' where id_master_form = '$id_master_form' ");
        }
        $ids = join("','",$id_master_form);   
$cekmail = $this->db->query("SELECT * FROM pegawai where dept = 'FINANCIAL PLANNING & ANALYSIS' and level = 'Section Head' ");
$cekreq = $this->db->query("SELECT a.*,b.* FROM approval_master_item a join pegawai b on a.requestor = b.nrp where a.id_master_form in ('$ids')");
foreach($cekreq->result_array() as $r):
$requestor = $r['requestor'];
$namae = $r['nama'];
endforeach;
foreach($cekmail->result_array() as $e):
    $this->m_send_mail->emailItem($namae,$e['email']);
endforeach;
/*
$ckmaila = $maila;
$addemail = join(',', $ckmaila);
*/

        redirect('user/c_acc_item/assign_item');
    }
    function edit_item(){
        $data = $this->m_acc_item->edit_item();
        echo json_encode($data);
    }

    function approve_item(){
        $data = $this->m_acc_item->approve_item();
        echo json_encode($data);
    }

    function get_fix(){
        if (isset($_GET['term'])) {
            $result = $this->m_acc_item->get_fix($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->GROUPID;
                echo json_encode($arr_result);
            }
        }
    }

    function get_igroup(){
        if (isset($_GET['term'])) {
            $result = $this->m_acc_item->get_igroup($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->ITEMGROUPID;
                echo json_encode($arr_result);
            }
        }
    }


    function modal_item(){
        $data = $this->m_acc_item->modal_item();
        echo json_encode($data);
    }


    function addgroup(){
        $data = $this->m_acc_item->addgroup();
        echo json_encode($data);
    }

    function addfixa(){
        $data = $this->m_acc_item->addfixa();
        echo json_encode($data);
    }

    function approve_btn(){
        $cekf = $this->m_acc_item->cekfix();
        $cekg = $this->m_acc_item->cekgroup();
        $countf = $cekf->num_rows();
        $countg = $cekg->num_rows();

        $data = array(
            'countg' => $countg,
            'countf' => $countf
        );
        echo json_encode($data);
    }




}