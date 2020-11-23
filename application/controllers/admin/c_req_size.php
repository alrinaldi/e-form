<?php
Class C_req_size extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if($this->session->userdata('level')!='Sys Admin'){
            redirect('login');
        }

        $this->load->model('admin/m_user');
	
    } 
    function view(){
        $this->load->view('admin/v_req_size');
    }   
}