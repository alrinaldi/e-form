<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class C_dashboard extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if($this->session->userdata('level')!='Sys Admin'){
            redirect('login');
        }
	
    }

    function index(){
        $this->load->view('admin/v_dashboard');
    }
    function logout(){
        session_destroy();
        redirect('login');    
}
}