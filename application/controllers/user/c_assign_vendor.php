<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class C_assign_vendor extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if($this->session->userdata('level')=='Sys Admin'){
            redirect('login');
        }
        $this->load->model('user/m_assign_vendor');
      //  $this->load->model('user/m_send_mail');
    }
    


public function assign_vendor(){

        $this->load->view('user/v_tax_vendor');

}

    public function tax_vendor(){

        $data = $this->m_assign_vendor->tax_vendor();
        echo json_encode($data);

    }

    function detail_form(){
        $id = $this->uri->segment('4');
        $x['id'] = $id;
        $x['data'] = $this->db->query("SELECT * FROM vendor where id_vendor  = '$id'");
        $x['data1'] = $this->db->query("SELECT * FROM vendor_acc where id_master_vendor = '$id'");
        $dtc = $this->db->query("SELECT * FROM vendor_acc where id_master_vendor = '$id'");
        $cekacc = $dtc->num_rows();
        if($cekacc>0){
        foreach($dtc->result_array() as $v):
            $id_vendor_acc = $v['id_vendor_acc'];
        endforeach;
    }else{
        $id_vendor_acc = 0;
    }
        $x['data2'] = $this->db->query("SELECT * FROM vendor_lamp_acc where id_vendor_acc = '$id_vendor_acc'");
      //  $x['cekitem'] = $this->db->query("SELECT * FROM master_item where id_master_form  = '$id' and item_group =''");
    
        //  $x['group'] = $this->m_acc_item->list_group();
        $this->load->view('user/v_detail_form_vendor',$x);
    }

    function lampiran(){
        echo $id= $this->uri->segment('4');
        $x['id']= $id;
        $x['lampiran'] = $this->db->query("SELECT * FROM vendor where id_vendor = '$id'");
        $this->load->view('user/v_lampiran',$x);
    }

    function update_vend(){
        $id_vendor = $this->input->post('id_vendor');
        $ekuitas = $this->input->post('ekuitas');
        $npwp = $this->input->post('npwp');
        $tgl = $this->input->post('tgl');
        $masa = $this->input->post('masa');
        $nama = $this->input->post('nama');
        $rek = $this->input->post('rek');
        $group = $this->input->post('inlineRadioOptions');

        if ($this->input->post('pembayaran')){
            $pembayaran = $this->input->post('pembayaran');
        }else{
            $pembayaran = 0;
        }

        if ($this->input->post('neraca')){
            $neraca = $this->input->post('neraca');
        }else{
            $neraca = 0;
        }

        if ($this->input->post('spt')){
            $spt = $this->input->post('spt');
        }else{
            $spt = 0;
        }

        if ($this->input->post('lapor')){
            $lapor = $this->input->post('lappr');
        }else{
            $lapor = 0;
        }

        if ($this->input->post('pph')){
            $pph = $this->input->post('pph');
        }else{
            $pph = 0;
        }

        if ($this->input->post('laporpph')){
            $laporpph = $this->input->post('laporpph');
        }else{
            $laporpph = 0;
        }

        $cek = $this->db->query("SELECT * FROM vendor_acc where id_master_vendor = '$id_vendor'");
        

        if($cek->num_rows() > 0){
            foreach($cek->result_array() as $k):
            $id_acc = $k['id_vendor_acc'];
            endforeach;
            $this->db->query("UPDATE vendor_lamp_acc set pembayaran = '$pembayaran',neraca='$neraca',spt='$spt',bukti_spt='$lapor',pph='$pph',bukti_pph='$laporpph' where id_vendor_acc ='$id_acc'");
            $this->db->query("UPDATE vendor_acc set ekuitas = '$ekuitas',npwp='$npwp',nama_bank='$nama',group_vendor='$group',tanggal='$tgl',masa_berlaku='$masa',no_rekening='$rek'
            where id_master_vendor = '$id_vendor'");
        }else{

        $this->db->query("INSERT INTO vendor_acc (id_master_vendor,ekuitas,npwp,nama_bank,group_vendor,tanggal,masa_berlaku,no_rekening)
        values('$id_vendor','$ekuitas','$npwp','$nama','$group','$tgl','$masa','$rek')");
        
        $insert_id = $this->db->insert_id();

        
        $this->db->query("INSERT INTO vendor_lamp_acc (pembayaran,neraca,spt,bukti_spt,pph,bukti_pph,id_vendor_acc) values ('$pembayaran','$neraca','$spt','$lapor','$pph','$laporpph','$insert_id')");   



        }
        redirect('user/c_assign_vendor/detail_form/'.$id_vendor);
    }


    function assign_aprv(){

         $id_number= $this->uri->segment('4');
        $deptu = $this->session->userdata('dept');
        $levelu = $this->session->userdata('level');
        $nrp = $this->session->userdata('nrp');
        $cekflw = $this->db->query("SELECT a.* FROM workflow_vendor a  join sstruktur_ymi b on a.flow_name = b.costcenter where b.dept = '$deptu'
        and a.level = '$levelu'");
        foreach($cekflw->result_array() as $f):
            $flow = $f['flow_name'];
            $step1 = $f['step'];
        endforeach;
    
        $steps = substr($step1,9);
        $stepsi = intval($steps)+1;
        $step = 'Approval'.' '.$stepsi;
    
            $result = array(
                "id_vendor" => $id_number, 
                "status" => $step,
                "workflow_status" => 'On Progress'
            );
    
            $data = array(
                "id_master_vendor" => $id_number, 
                "status" => $step1,
                "approval" => $nrp,
                "tanggal" => date('Y-m-d H:i:s')
            );
    
        $this->db->update('vendor',$result,'id_vendor');
        $this->db->insert('approval_master_vendor',$data);

        $cekum = $this->db->query("SELECT * FROM workflow_vendor where step = '$step'");
        foreach($cekum->result_array() as $ck):
            $lvlum = $ck['level'];
        endforeach;

        $cekmail = $this->db->query("SELECT a.* FROM pegawai a join workflow_vendor b on (a.wct = b.flow_name and a.level = b.level) where b.step = '$step'
        and b.level = '$lvlum'");
    /*
    
        foreach($cekmail->result() as $e):
        $maila[] = $e->email;
        endforeach;
        $ckmaila = $maila;
        $addemail = join(',', $ckmaila);

        $ceknrp = $this->db->query("SELECT * FROM vendor where id_vendor = '$id_number'");
        foreach($ceknrp->result_array() as $cn):
        $nrpc = $cn['nrp'];
        endforeach;
*/
     //   $this->m_send_mail->sendMail($nrpc,$addemail);

    
    


    redirect('user/c_assign_vendor/assign_vendor');
    }

    function aprv_vend(){
        $id_number= $this->uri->segment('4');
        $deptu = $this->session->userdata('dept');
        $levelu = $this->session->userdata('level');
        $nrp = $this->session->userdata('nrp');
        $cekflw = $this->db->query("SELECT a.* FROM workflow_vendor a  join sstruktur_ymi b on a.flow_name = b.costcenter where b.dept = '$deptu'
        and a.level = '$levelu'");
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
            $maila[] = $e->email;
            endforeach;
            $ckmaila = $maila;
            $addemail = join(',', $ckmaila);
    
            $ceknrp = $this->db->query("SELECT * FROM vendor where id_vendor = '$id_number'");
            foreach($ceknrp->result_array() as $cn):
            $nrpc = $cn['nrp'];
            endforeach;
    
           $this->m_send_mail->sendMail($nrpc,$addemail);

            

    redirect('user/c_assign_vendor/assign_vendor');
    }


    function appr_vendor(){
        $this->load->view('user/v_tax_vendor');
    }

}