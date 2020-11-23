<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class C_request_vendor extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if($this->session->userdata('level')=='Sys Admin'){
            redirect('login');
        }
        $this->load->model('user/m_req_vendor');
    }


    function req_vendor(){
        $this->load->view('user/v_req_vendor');
    }

    public function tampil_vendor(){
        
        $nrp = array('nrp' => $this->session->userdata('nrp',TRUE),
                    'status' =>'Approval 1');
        $data = $this->m_req_vendor->view();
        echo json_encode($data);
    }
    public function approve_vend(){
        $data= $this->m_req_vendor->approve_vend();
        echo json_encode($data);
    }

}