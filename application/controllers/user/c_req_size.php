<?php
Class C_req_size extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }
        $this->load->model('user/m_req_size');

}
function view(){
    $this->load->view('user/v_req_size');
}
function get_form(){
    $data = $this->m_req_size->get_form();
    echo json_encode($data);
}
function get_detail(){
    $data = $this->m_req_size->get_detail();
    echo json_encode($data);
}
function get_size_d(){
    $data = $this->m_req_size->get_size_d();
    echo json_encode($data);
}
function item_u(){
    $data = $this->m_req_size->item_u();
    echo json_encode($data);
}
}