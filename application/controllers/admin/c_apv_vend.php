<?php
Class C_apv_vend extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if($this->session->userdata('level')!='Sys Admin'){
            redirect('login');
        }

        $this->load->model('admin/m_vend');
        $this->load->model('admin/m_send_mail');
    }  

    function apv_vend(){

        $this->load->view('admin/v_approval_it');
    
    }

    function review_vendor(){
        $data  = $this->m_vend->review_vendor();
        echo json_encode($data);
    }


    function detail_vend(){
        $id = $this->uri->segment('4');
        $x['id'] = $id;
        $x['data'] = $this->db->query("SELECT * FROM vendor where id_vendor  = '$id'");
        $x['data1'] = $this->db->query("SELECT * FROM vendor_acc where id_master_vendor = '$id'");
        $x['legal'] = $this->db->query("SELECT * FROM vendor_legal where id_master_vendor = '$id'");
        $dtc = $this->db->query("SELECT * FROM vendor_legal where id_master_vendor = '$id'");
        $dtcc = $this->db->query("SELECT * FROM vendor_acc where id_master_vendor = '$id'");
        $cekaccc = $dtcc->num_rows();
        $cekacc = $dtc->num_rows();
        if($cekacc>0){
        foreach($dtc->result_array() as $v):
            $id_vendor_legal = $v['id_vendor_legal'];
        endforeach;
    }else{
        $id_vendor_legal = 0;
    }

    if($cekaccc>0){
        foreach($dtcc->result_array() as $v):
            $id_vendor_acc = $v['id_vendor_acc'];
        endforeach;
    }else{
        $id_vendor_acc = 0;
    }

        $x['data3'] = $this->db->query("SELECT * FROM lampiran_vendor_legal where id_vendor_legal = '$id_vendor_legal'");
        $x['data2'] = $this->db->query("SELECT * FROM vendor_lamp_acc where id_vendor_acc = '$id_vendor_acc'");

      //  $x['cekitem'] = $this->db->query("SELECT * FROM master_item where id_master_form  = '$id' and item_group =''");
    
        //  $x['group'] = $this->m_acc_item->list_group();
    $this->load->view('admin/v_detail_vend_it',$x);
    }


    function tampil_file(){
        $data = $this->m_vend->get_file();
        echo json_encode($data);
    }

    function aprv_vend(){
        $id_number= $this->uri->segment('4');
        $deptu = $this->session->userdata('dept');
      //  $levelu = $this->session->userdata('level');
        $nrp = $this->session->userdata('nrp');
  
            $cekflw = $this->db->query("SELECT a.* FROM workflow_vendor a  join sstruktur_ymi b on a.flow_name = b.costcenter where b.dept = '$deptu'
            ");
    
        foreach($cekflw->result_array() as $f):
            $flow = $f['flow_name'];
            $step1 = $f['step'];
        endforeach;
    
        $steps = substr($step1,9);
        $stepsi = intval($steps)+1;
        $step = 'Approval'.' '.$stepsi;
    

    
            $data = array(
                "id_master_vendor" => $id_number, 
                "status" => $step1,
                "approval" => $nrp,
                "tanggal" => date('Y-m-d H:i:s')
            );

            $this->db->query("UPDATE vendor set status ='$step',workflow_status = 'On Progress' where id_vendor = '$id_number'");
            $this->db->insert('approval_master_vendor',$data);

            $cekum = $this->db->query("SELECT * FROM workflow_vendor where step = '$step'");
            foreach($cekum->result_array() as $ck):
                $lvlum = $ck['level'];
            endforeach;
    
            $cekmail = $this->db->query("SELECT a.* FROM pegawai a join workflow_vendor b on (a.wct = b.flow_name and a.level = b.level) where b.step = '$step'
            and b.level = '$lvlum'");
        
       
            foreach($cekmail->result() as $e):
            $maila = $e->email;
            endforeach;
            
    
            $ceknrp = $this->db->query("SELECT * FROM vendor where id_vendor = '$id_number'");
            foreach($ceknrp->result_array() as $cn):
            $nrpc = $cn['nrp'];
            endforeach;
            $ceknm = $this->db->query("SELECT * FROM pegawai where nrp = '$nrpc'");
            foreach($ceknm->result_array() as $nm ):
                $namap = $nm['nama'];
            endforeach;
    
           $this->m_send_mail->sendMail($namap,$maila);
           
            redirect('admin/c_apv_vend/apv_vend');
    }


}