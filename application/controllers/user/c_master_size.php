<?php
Class C_master_size extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }

        $this->load->model('user/m_master_size');
        $this->load->model('user/m_send_mail');
    }

    function index(){
        $x['data'] = $this->m_master_size->get_item_size();
        $this->load->view('user/v_master_size',$x);
        

    }

   public function get_item_size(){
        $data = $this->m_master_size->get_item_size();
        echo json_encode($data);
    }
    function get_size_e(){
        $data = $this->m_master_size->get_size_e();
        echo json_encode($data);
    }
    function cek_size(){
        $data = $this->m_master_size->cek_size();
        foreach ($data->result_array() as $dt):
          echo  $prod = $dt['PRODUCT'];
        endforeach;
    }

    function get_size(){
        $data = $this->m_master_size->get_size();
        echo json_encode($data);
    }

    function save_size(){
        $data = $this->m_master_size->save_size();
        echo json_encode($data);
    }

    function tampil_size(){
        $data = $this->m_master_size->tampil_size();
        echo json_encode($data);
    }
    function submit(){
        $data = $this->m_master_size->submit();
        echo json_encode($data);
    }
    function addsz(){
        $data = $this->m_master_size->addsz();
        echo json_encode($data);
    }
    function delm_size(){
        $data = $this->m_master_size->delm_size();
        echo json_encode($data);
    }

}