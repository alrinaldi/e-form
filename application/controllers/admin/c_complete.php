<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class C_complete extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if(($this->session->userdata('level')!='Section Head' ||$this->session->userdata('level')!='Department Head') && $this->session->userdata('dept')!='INFORMATION TECHNOLOGY'){
            redirect('login');
        }


        $this->load->model('admin/m_complete');
        $this->load->model('admin/m_send_mail');

    }
    function item_iti(){
        $this->load->view('admin/v_complete_item');
    }
    function vend_comp(){
        $this->load->view('admin/v_complete_vend');
    }
    function size_comp(){
        $this->load->view('admin/v_complete_size');
    }
    function detail_form(){
        $id = $this->uri->segment('4');
        $x['id'] = $id;
        $x['data'] = $this->db->query("SELECT * FROM master_item where id_master_form  = '$id' ");

        $this->load->view('admin/v_detail_form',$x);
    }
    function item_complete(){
        $data = $this->m_complete->item_complete();
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

    $pc = $this->input->post('p_category');
        $id_master_form = $this->input->post('id_master_form');
        $nrp = $this->session->userdata('nrp');
    echo    $wct = $this->session->userdata('wct');
        $this->db->query("UPDATE master_item set product_category = '$pc' where item_id = '$item_id'");
        
        redirect('admin/c_item_it/detail_form/'.$id_master_form);
    }

    function submit_item(){
        echo   $id_master_form = $this->input->post('id_master_form1');
        $cekaprovi = $this->db->query("SELECT * FROM approval_master_item where id_master_form = '$id_master_form'");
        foreach($cekaprovi->result_array() as $ci):
        $aprsts = $ci['approval_status'];
        endforeach;
        $cekflow = $this->db->query("SELECT * FROM workflow_item where step = '$aprsts'");

        $steps = substr($aprsts,9);
        $stepsi = intval($steps)+1;
        $step = 'Approval'.' '.$stepsi;
        $ap = $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s');
        $this->db->query("UPDATE approval_master_item set approval_status = '$step',it_bp = '$ap' where id_master_form = '$id_master_form' ");
        $this->db->query("UPDATE master_item set status =  '$step' where id_master_form = '$id_master_form'");

        redirect('admin/c_item_it/item_it');
    }
    function edit_item(){
        $data = $this->m_acc_item->edit_item();
        echo json_encode($data);
    }
    function uploaded_item(){
        $data  = $this->m_complete->uploaded_item();
        echo json_encode($data);
    }


    function complete_vend(){
        $data = $this->m_complete->complete_vend();
        echo json_encode($data);
    }

    function size_complete(){
        $data = $this->m_complete->size_complete();
        echo json_encode($data);
    }
    function detail_size(){
        $data = $this->m_complete->detail_size();
        echo json_encode($data);
    }
    function get_size(){
        $data = $this->m_complete->get_size();
        echo json_encode($data);
    }
    function uploaded_size(){
        $data = $this->m_complete->uploaded_size();
        echo json_encode($data);
    }
    function uploaded_vend(){
        $data = $this->m_complete->uploaded_vend();
        echo json_encode($data);
    }




}