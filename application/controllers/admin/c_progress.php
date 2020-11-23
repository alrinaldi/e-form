<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class C_progress extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if($this->session->userdata('level')!='Sys Admin'){
            redirect('login');
        }

        $this->load->model('admin/m_progress');
    }
    
    function p_item(){
    $this->load->view('admin/v_item_progress');
    }
    function p_vend(){
        $this->load->view('admin/v_vendor_progres');
    }
}