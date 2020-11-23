<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class C_reject_form extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }

        $this->load->model('user/m_send_mail');
        //$this->load->model('user/m_acc_item');
        $this->load->model('user/m_reject_form');
        $this->load->model('user/m_master_item');

    }

    function view_m_item(){
        $x['unit'] = $this->m_master_item->unit();
        $x['project'] = $this->m_master_item->code_project();
        $this->load->view('user/v_item_form_r',$x);

    }
    function get_master_item(){
        $data = $this->m_reject_form->get_master_item();
        echo json_encode($data);
    }
    function get_detail_item(){
        $data = $this->m_reject_form->get_detail_item();
        echo json_encode($data);
    }
    function get_item_upd(){
        $data = $this->m_reject_form->get_item_upd();
        //echo json_encode($data);
        foreach($data->result_array() as $i):
        $dt = array(
            'nama' => $i['item_name'],
            'product_type' => $i['product_type'],
            'product_subtype' => $i['product_subtype'],
            'category' => $i['category'],
            'item_model_group' => $i['item_model_group'],
            'purchase_unit' => $i['purchase_unit'],
            'sales_unit' => $i['sales_unit'],
            'inventory_unit' => $i['inventory_unit'],
            'product' => $i['product'],
            'project' => $i['project'],
            'wct' => $i['wct'],
            'type' => $i['type'],
            'item_group'=> $i['item_group'],
            'fixed_asset_group' => $i['fixed_asset_group'],
            'product_category' => $i['product_category']
        );
        endforeach;
        echo json_encode($dt);
    }
    function get_ms(){
        $data = $this->m_reject_form->get_ms();
        echo json_encode($data);
    }
    function size_reject(){
        $this->load->view('user/v_size_form');
    }
    function size_s(){
        $data = $this->m_reject_form->size_s();
        echo json_encode($data);
    }

}