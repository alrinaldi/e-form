<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class C_vendor extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if($this->session->userdata('level')=='Sys Admin'){
            redirect('login');
        }
        $this->load->model('user/m_master_vendor');
    }


    function assign_vendor(){
        $this->load->view('user/v_assign_vendor');
    }

    public function tampil_vendor(){
        $nrp = array('nrp' => $this->session->userdata('nrp',TRUE),
                    'status' =>'Created');
        $data = $this->m_master_vendor->view($nrp);
        echo json_encode($data);
    }

}