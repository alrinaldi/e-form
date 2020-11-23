<?php
Class M_reject_form extends CI_Model{

    function get_master_item(){
        $nrp = $this->session->userdata('nrp');
        $hsl = $this->db->query("SELECT DISTINCT(a.id_master_form),a.requestor,b.nama,substring(a.created_date,1,10) as date,substring(a.created_date,11,6) as jam 
        from approval_master_item a join pegawai b on a.requestor = b.nrp join master_item c on
        a.id_master_form = c.id_master_form 
         where a.approval_status = 'Submited' and a.requestor = '$nrp' ");
        return $hsl->result();

    }
    function get_detail_item(){
        $id = $this->input->post('id_master_form');
        $hsl = $this->db->query("SELECT * FROM MASTER_ITEM where id_master_form  = '$id'");
        return $hsl->result();
    }
    function get_item_upd(){
        $id = $this->input->post('id');
        $hsl = $this->db->query("SELECT * FROM MASTER_ITEM where item_id = '$id'");
        return $hsl;
    }
    function get_ms(){
        $hsl = $this->db->query("SELECT DISTINCT(a.id_master_form) as idm,b.nama,
        a.created_date,a.workflow_status  FROM MASTER_SIZE a join pegawai b on a.requestor = b.nrp 
        where a.status = 'Submited'");
        return $hsl->result();
    }
    function size_s(){

        $id_number = $this->input->post('id_number');
        //$data[] = array();
        foreach($id_number AS $key => $val){
            $data = array(
                "id_master_form" => $_POST['id_number'][$key],
                "approval" => $this->session->userdata('nrp'),
                "tanggal" => date('Y-m-d H:i:s'),
                "status" => 'Submited',
                "type" => 'Master Size'
            );
            $this->db->insert('approval_master',$data);

        }
        print_r($data);
  
    
        $result = array();
        foreach($id_number AS $key => $val){
            $result[] = array(
                "id_master_form" => $_POST['id_number'][$key],
                "status" => 'Approval 1',
                "requestor" => $this->session->userdata('nrp'),
                "created_date" =>date('Y-m-d H:i:s'),
                "workflow_status" => 'On Progress'
            );
        }
        $typ = 'Master Size';
        print_r($result);
       $hsl = $this->db->update_batch('master_size',$result,'id_master_form');
        $deptu = $this->session->userdata('dept');
        $cekmail = $this->db->query("SELECT * FROM pegawai where dept = '$deptu' and level = 'Section Head' ");
        $nrpp = $this->session->userdata('nrp');
        $nm = $this->session->userdata('nama');
        foreach($cekmail->result() as $e):
        $maila = $e->email;
     //   $this->m_send_mail->emailSize($nm,$maila,$typ);
        endforeach;
        //$ckmaila = $maila;
        //$addemail = join(',', $ckmaila);
        

    }

}