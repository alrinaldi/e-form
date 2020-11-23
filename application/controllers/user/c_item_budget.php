<?php
Class C_item_budget extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if($this->session->userdata('level')=='Sys Admin'){
            redirect('login');
        }
        $this->load->model('user/m_send_mail');
        $this->load->model('user/m_item_budget');
    }

    function item_b(){
        $this->load->view('user/v_item_budget');
    }
    function budget_detail(){
        $id = $this->uri->segment('4');
        $x['id'] = $id;
        $x['data'] = $this->db->query("SELECT * FROM master_item where id_master_form  = '$id'");
        $x['cekitem'] = $this->db->query("SELECT * FROM master_item where id_master_form  = '$id' and project =''");
        $x['cekpitem'] = $this->db->query("SELECT * FROM master_item where id_master_form  = '$id' ");
        $x['cekitemn'] = $this->db->query("SELECT * FROM master_item where id_master_form  = '$id' and project <> ''");
        $x['group'] = $this->m_item_budget->code_project();
        $this->load->view('user/v_budget_detail',$x);
    }

    function item_get(){
        $data = $this->m_item_budget->item_get();
        echo json_encode($data);
    }

    function edit_budget(){
        $itemid = $this->input->post('item_id');
        $cekapr = $this->db->query("SELECT * FROM master_item where item_id = '$itemid' ");
        foreach($cekapr->result_array() as $r):
           $status = $r['status'];
       endforeach;
       $steps = substr($status,9);
       $stepsi = intval($steps)+1;
       $step = 'Approval'.' '.$stepsi;

        $id_m_form = $this->input->post('id_master_form');
        $project = $this->input->post('prjj');
        $this->db->query("UPDATE master_item set project = '$project',status = '$step' where item_id = '$itemid'");
        redirect('user/c_item_budget/budget_detail/'.$id_m_form);

    }
    function aprv_item(){
         $id_master_form = $this->input->post('id_master_form1');
        $cekaprovi = $this->db->query("SELECT * FROM approval_master_item where id_master_form = '$id_master_form'");
        foreach($cekaprovi->result_array() as $ci):
        $aprsts = $ci['approval_status'];
        endforeach;
        $cekflow = $this->db->query("SELECT * FROM workflow_item where step = '$aprsts'");
        $nrp = $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s');
        $steps = substr($aprsts,9);
        $stepsi = intval($steps)+1;
        $step = 'Approval'.' '.$stepsi;
        $this->db->query("UPDATE approval_master_item set approval_status = '$step',fpa = '$nrp',workflow_status = 'Progress' where id_master_form = '$id_master_form' ");
        $this->db->query("UPDATE master_item set status = '$step' where id_master_form = '$id_master_form' ");

$cekmail = $this->db->query("SELECT * FROM pegawai where dept = 'ACCOUNTING & TAX' and level = 'Department Head' ");
$cekreq = $this->db->query("SELECT * FROM approval_master_item where id_master_form = '$id_master_form'");
foreach($cekreq->result_array() as $r):
$requestor = $r['requestor'];
endforeach;
foreach($cekmail->result_array() as $e):
$maila = $e['email'];
$namaz = $e['nama'];
endforeach;
$ckmaila = $maila;
$addemail = join(',', $ckmaila);
$this->m_send_mail->emailItem($requestor,$maila);

        //redirect('user/c_item_budget/item_b');
    }

    function get_budget(){
        if (isset($_GET['term'])) {
            $result = $this->m_item_budget->get_budget($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->VALUE;
                echo json_encode($arr_result);
            }
        }
    }

    
    function get_autocomplete(){

    }

    function addprj(){
        $data = $this->m_item_budget->addprj();
        echo json_encode($data);
    }

    function modal_item(){
        $data = $this->m_item_budget->modal_item();
        echo json_encode($data);
    }
    function approve_btn(){
        $data = $this->m_item_budget->approve_btn();
       // echo json_encode($data);
       $cekbtn = $data->num_rows();
       
       $data = array(
        'countb' => $cekbtn,
    );
    echo json_encode($data);
    }

}