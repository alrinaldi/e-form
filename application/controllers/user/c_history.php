<?php
Class C_history extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if($this->session->userdata('level')=='Sys Admin'){
            redirect('login');
        }
        //$this->load->model('user/m_master_vendor');
        $this->load->model('user/m_history');
    } 


    function aprv_vend(){
        $this->load->view('user/v_history_vendor');
    }
    function aprv_vnd(){
        $this->load->view('user/v_history_vnd');
    }

    function tampil_apv_vend(){
        $data = $this->m_history->tampil_apv_vend();
        echo json_encode($data);
    }

    function aprv_itm(){
        $this->load->view('user/v_history_item');
    }
    function aprv_size(){
        $this->load->view('user/v_history_size');
    }
    function aprv_siz(){
        $this->load->view('user/v_history_siz');
    }
    function dtl_aprv(){
        $data = $this->m_history->dtl_aprv();
        //echo json_encode($data);
        foreach($data->result_array() as $i):
            $dt = array(
                'note' => $i['note']
            );
        endforeach;
        echo json_encode($dt);
    }
    function dtl_aprv_vnd(){
        $data = $this->m_history->dtl_aprv_vnd();
        foreach($data->result_array() as $i):
            $dt = array(
                'note' => $i['note']
            );
        endforeach;
    }

}