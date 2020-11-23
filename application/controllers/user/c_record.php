<?php
Class C_record extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if($this->session->userdata=='Sys Admin'){
            redirect('login');
        }
        $this->load->model('user/m_record');

    }

    function record_item(){

    }
    function record_vend(){
        
    }
}