<?php
Class C_uploaded extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if($this->session->userdata('level')!='Sys Admin'){
            redirect('login');
        }

        $this->load->model('admin/m_uploaded');
	
    } 
    function view_size(){
        $this->load->view('admin/v_uploaded_size');
    }
    function view_item(){
        $this->load->view('admin/v_upload_item');
    }
    function view_vend(){
        $this->load->view('admin/v_uploaded_vend');
    }
    function size_complete(){
        $data = $this->m_uploaded->size_complete();
        echo json_encode($data);
    }
    function detail_size(){
        $data = $this->m_uploaded->detail_size();
        echo json_encode($data);
    }
    function get_size(){    
        $data = $this->m_uploaded->get_size();
        echo json_encode($data);
    }
    function item_uploaded(){
        $data = $this->m_uploaded->item_uploaded();
        echo json_encode($data);
    }
    function item_size(){
        $data = $this->m_uploaded->item_size();
        echo json_encode($data);
    }
    function detail_item(){
        $data = $this->m_uploaded->detail_item();
        echo json_encode($data);
    }
    function get_vend(){
        $data = $this->m_uploaded->get_vend();
        echo json_encode($data);
    }

}