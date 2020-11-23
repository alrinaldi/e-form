<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class C_workflow extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if($this->session->userdata('level')!='Sys Admin'){
            redirect('login');
        }
        $this->load->model('admin/m_workflow');
	
    }
    
    function master_item(){
        $this->load->view('admin/v_workflow');
    }

    function tampil_workflow_item(){
        $data = $this->m_workflow->workflow_item();
        echo json_encode($data);
    }

    public function save_flow(){
        $data = $this->m_workflow->save_flow();
        echo json_encode($data);
        
    }

    public function save_flow_vend(){
        $data = $this->m_workflow->save_flow_vend();
        echo json_encode($data);
    }

    public function cek_step(){
        $step = $this->input->post('step');
        $hsl = $this->db->query("SELECT * from workflow_item where step = '$step'");
        $cnt = $hsl->num_rows();
        echo json_encode($cnt);
    }

    function master_vendor(){
        $this->load->view('admin/v_workflow_vendor');
    }

    function tampil_workflow_vend(){
        $data = $this->m_workflow->workflow_vend();
        echo json_encode($data);
    }

}
