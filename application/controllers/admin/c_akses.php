<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class C_akses extends CI_Controller{
  
    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if($this->session->userdata('level')!='Sys Admin'){
            redirect('login');
        }

        $this->load->model('admin/m_akses');
	
    }  

    function index(){
        $x['per_form'] = $this->m_akses->get_akses_form();
$this->load->view('admin/v_user_akses',$x);
    }


    function tampil_akses(){
        $data = $this->m_akses->tampil_akses();
        echo json_encode($data);
    }

    function akses_form(){
        $data = $this->m_akses->akses_form();
        echo json_encode($data);
    }

    function sel_group(){
        $data = $this->m_akses->sel_group();
        foreach($data->result_array() as $i):
        $dt = array(
            'nama_akses_group'  => $i['nama_akses_group']
        );
        endforeach;

        echo json_encode($dt);
    }

    function save_akses(){
        $data = $this->m_akses->save_akses();
        echo json_encode($data);    
    }

    function new_perm(){
        $dept = $this->input->post('p_dept');
        $lvl = $this->input->post('p_lvl');
        $form  = $this->input->post('p_form');
        $group = $this->input->post('p_group');
        $selg = $this->db->query("SELECT * from akses_group where nama_akses_group = '$group'");
        foreach($selg->result_array() as $g):
            $id_group = $g['id_akses_group'];
        endforeach;
        $hsl = $this->db->query("INSERT INTO akses (dept,level,akses_group,akses_form) values('$dept','$lvl','$id_group','$form')");
        redirect('admin/c_akses/');
    }

    function look_pgw(){
        $data = $this->m_akses->look_pgw();
        foreach($data->result_array() as $i):
        $dt = array(          	
'nrp' => $i['nrp'],
'nama' => $i['nama'],
'email' => $i['email'],
'ext' => $i['ext'],
'wct' => $i['wct'],
'seksi' => $i['seksi'],
'dept' => $i['dept'],
'divisi' => $i['divisi'],
'job_title' => $i['job_title'],
'lokasi' => $i['lokasi'],
'level' => $i['level'],
        );
        endforeach;

        echo json_encode($dt);
    }
}