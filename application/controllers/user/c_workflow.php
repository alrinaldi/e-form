<?php
Class C_workflow extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }

        $this->load->model('user/m_send_mail');
        $this->load->model('user/m_workflow');

    }
    function approve(){
        $data = $this->m_workflow->approve();
        echo json_encode($data);
    }
}