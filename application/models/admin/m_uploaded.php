<?php
Class M_uploaded extends CI_Model{

 
  function size_complete(){
      $hsl = $this->db->query("SELECT DISTINCT(a.id_master_form) as id_m,a.requestor,b.nama FROM master_size a join pegawai b on a.requestor = b.nrp where a.status = 'Completed'  ");
      return $hsl->result();
  } 
  function detail_size(){
      $id = $this->input->post('id_master_form');
      $hsl = $this->db->query("SELECT * FROM master_size where id_master_form = '$id'");
      return $hsl->result();
  }
  function get_size(){
      $id = $this->input->post('idi');
      $hsl = $this->db->query("SELECT * FROM size_list where id_master = '$id'");
      return $hsl->result();
  }

  function item_uploaded(){
    $app = $this->db->query("SELECT DISTINCT(id_master_form),requestor from approval_master_item where approval_status = 'Uploaded'");
    return $app->result();

  }
  function detail_item(){
      $id = $this->input->post('id_master_form');
      $hsl = $this->db->query("SELECT * FROM master_item where id_master_form  = '$id'");
      return $hsl->result();
  }
  function item_size(){
      $id = $this->input->post('idmid');
      $hsl = $this->db->query("SELECT * FROM size_item where id_master_item = '$id'");
      return $hsl->result();
  }
  function get_vend(){
      $hsl = $this->db->query("SELECT * FROM VENDOR WHERE status = 'Completed'");
      return $hsl->result();
  }
   
    
}