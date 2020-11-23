<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class C_user extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if($this->session->userdata('level')!='Sys Admin'){
            redirect('login');
        }

        $this->load->model('admin/m_user');
	
    }    

    function index(){
        $x['sy'] = $this->m_user->get_ymi();
        $this->load->view('admin/v_user',$x);
    }
    function tampil_user(){
        $data = $this->m_user->tampil_user();
        echo json_encode($data);
    }

    function cek_nrp(){
        $data = $this->m_user->cek_user();
        echo json_encode($data);
    }

    function add_user(){
       $nrp = $this->input->post('a_nrp');
       $email = $this->input->post('a_email');
       $a_pw = $this->input->post('a_pw');
       $wct = $this->input->post('a_wct');
       $seksi = $this->input->post('a_seksi');
       $dept = $this->input->post('a_dept');
       $div = $this->input->post('a_div');
       $jt = $this->input->post('a_jt');
       $lok = $this->input->post('a_lok');
       $ext = $this->input->post('a_ext');
       $lev = $this->input->post('a_lev');
       $nama = $this->input->post('a_nama');

        $this->db->query("INSERT INTO pegawai (nrp,nama,email,ext,wct,seksi,dept,divisi,job_title,lokasi,level ) 
        values ('$nrp','$nama','$email','$ext','$wct','$seksi','$dept','$div','$jt','$lok','$lev')");

        $this->db->query("INSERT INTO user (nrp,password,level) values 
        ('$nrp','$a_pw','$lev')");
        redirect('admin/c_user/');
    }


}