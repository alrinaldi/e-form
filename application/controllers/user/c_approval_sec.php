<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class C_approval_sec extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if($this->session->userdata('level')!='Section Head'){
            redirect('login');
        }

        $this->load->model('user/m_approval_sec');

    }

    function approval_item(){
        $this->load->view('user/v_approval_item');
    }

    function approval_req(){
        $data = $this->m_approval_sec->approval_req();
        echo json_encode($data);
    }

    function detail_item(){
        $data = $this->m_approval_sec->detail_item();
        echo json_encode($data);
    }

    function approve_item(){
        $data = $this->m_approval_sec->approve_item();
        echo json_encode($data);
    }
    function get_size_d(){
        $data  = $this->m_approval_sec->get_size_d();
        echo json_encode($data);
    }


}