<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class C_vendor_legal extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if($this->session->userdata('level')=='Sys Admin'){
            redirect('login');
        }
        $this->load->model('user/m_legal_vendor');
        $this->load->model('user/m_send_mail');
    }
    


public function legalrev(){

        $this->load->view('user/v_legal_vend');

}

function legalaprv(){
    $this->load->view('user/v_legal_aprv');

}


    public function legal_vendor(){

        $data = $this->m_legal_vendor->legal_vendor();
        echo json_encode($data);

    }

    function detail_aprv(){
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
        $this->load->view('user/v_detail_vendor_aprv',$x);
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
        $this->load->view('user/v_detal_legal_vend',$x);
    }

   
    function lampiran(){
        echo $id= $this->uri->segment('4');
        $x['id']= $id;
        $x['lampiran'] = $this->db->query("SELECT * FROM vendor where id_vendor = '$id'");
        $this->load->view('user/v_lampiran',$x);
    }

    function update_legal(){
    echo    $id_vendor = $this->input->post('id_vendor');
        $tgl_siup = $this->input->post('tgl_siup');
        $m_siup = $this->input->post('m_siup');
        $tgl_situ = $this->input->post('tgl_situ');
        $m_situ = $this->input->post('m_situ');
        $tgl_tdp = $this->input->post('tgl_tdp');
        $m_tdp = $this->input->post('m_tdp');
        $tgl_idir = $this->input->post('tgl_idir'); 
        $m_idir =  $this->input->post('m_idir');
        $tgl_aktapdir = $this->input->post('tgl_aktapdir');
        $m_aktapdir = $this->input->post('m_aktapdir');
        $tgl_sppkp = $this->input->post('tgl_sppkp');
        $m_sppkp = $this->input->post('m_sppkp');
        $tgl_aktat = $this->input->post('tgl_aktat');
        $m_aktat = $this->input->post('m_aktat');
        $kontrak = $this->input->post('kontrak');
        $tgl_kontrak = $this->input->post('tgl_kontrak');

        if ($this->input->post('lad')){
            $lad = $this->input->post('lad');
        }else{
            $lad = 0;
        }
 
    if ($this->input->post('lpk')){
        $lpk = $this->input->post('lpk');
    }else{
        $lpk = 0;
    }
    if ($this->input->post('lskeb')){
        $lskeb = $this->input->post('lskeb');
    }else{
        $lskeb = 0;
    }
    if ($this->input->post('lsiujk')){
        $lsiujk = $this->input->post('lsiujk');
    }else{
        $lsiujk = 0;
    }
    if ($this->input->post('lkonstruksi')){
        $lkonstruksi = $this->input->post('lkonstruksi');
    }else{
        $lkonstruksi = 0;
    }


    if ($this->input->post('lsrekan')){
        $lsrekan = $this->input->post('lsrekan');
    }else{
        $lsrekan = 0;
    }
    if ($this->input->post('lhrd')){
        $lhrd = $this->input->post('lhrd');
    }else{
        $lhrd = 0;
    }
    if ($this->input->post('lpp')){
        $lpp = $this->input->post('lpp');
    }else{
        $lpp = 0;
    }
    if ($this->input->post('lmdir')){
        $lmdir = $this->input->post('lmdir');
    }else{
        $lmdir = 0;
    }

    if ($this->input->post('lsiup')){
        $lsiup = $this->input->post('lsiup');
    }else{
        $lsiup = 0;
    }

    if ($this->input->post('lnpwp')){
        $lnpwp = $this->input->post('lnpwp');
    }else{
        $lnpwp = 0;
    }

    if ($this->input->post('lrefbank')){
        $lrefbank = $this->input->post('lrefbank');
    }else{
        $lrefbank = 0;
    }

    if ($this->input->post('lpakte')){
        $lpakte = $this->input->post('lpakte');
    }else{
        $lpakte = 0;
    }

    if ($this->input->post('lpaktet')){
        $lpaktet = $this->input->post('lpaktet');
    }else{
        $lpaktet = 0;
    }



        if ($this->input->post('lsppkp')){
            $lsppkp = $this->input->post('lsppkp');
        }else{
            $lsppkp = 0;
        }

        if ($this->input->post('laktadir')){
            $laktadir = $this->input->post('laktadir');
        }else{
            $laktadir = 0;
        }

        if ($this->input->post('lidir')){
            $lidir = $this->input->post('lidir');
        }else{
            $lidir = 0;
        }

        if ($this->input->post('lsitu')){
            $lsitu = $this->input->post('lsitu');
        }else{
            $lsitu = 0;
        }

        if ($this->input->post('ltdp')){
            $ltdp = $this->input->post('ltdp');
        }else{
            $ltdp = 0;
        }

        if ($this->input->post('laktat')){
            $laktat = $this->input->post('laktat');
        }else{
            $laktat = 0;
        }

        $cek = $this->db->query("SELECT * FROM vendor_legal where id_master_vendor = '$id_vendor'");
        

        if($cek->num_rows() > 0){
            foreach($cek->result_array() as $k):
            $id_legal = $k['id_vendor_legal'];
            endforeach;

            $this->db->query("UPDATE lampiran_vendor_legal set  sppkp = '$lsppkp',akta_notaris_penunjukan_direktur='$laktadir',identitas_direktur='$lidir',anggaran_dasar='$lad',
            situ='$lsitu',tdp='$ltdp',akta_perubahan_terkahir='$laktat',siup='$lsiup',npwp='$lnpwp',referensi_bank='$lrefbank',pengesahan_akte_pendirian='$lpakte',
            pengesahan_akte_perubahan_terakhir='$lpaktet',surat_permohonan_menjadi_rekanan='$lsrekan',data_personlia='$lhrd',data_perlengkapan='$lpp',masa_jabatan_direksi='$lmdir',
            daftar_pengalaman_kerja='$lpk',surat_pernyataan_kebenaran_dokumen='$lskeb',siujk='$lsiujk',sertifikat_badan_usaha_jasa_konstruksi='$lkonstruksi' where id_vendor_legal='$id_legal'");

            $this->db->query("UPDATE vendor_legal set tanggal_siup = '$tgl_siup',masa_berlaku_siup='$m_siup',tanggal_situ='$tgl_situ',masa_berlaku_situ='$m_situ',
            tanggal_tdp='$tgl_tdp',masa_berlaku_tdp='$m_tdp',tanggal_identitas_direktur='$tgl_idir',masa_berlaku_identitas_direktur = '$m_idir',tanggal_akta_notaris_penunjukan_direktur = '$tgl_aktapdir',
            masa_berlaku_akta_notaris_penunjukan_direktur = '$m_aktapdir',kontrak = '$kontrak',tanggal_kontrak = '$tgl_kontrak',tanggal_sppkp = '$tgl_sppkp',
            masa_berlaku_sppkp	= '$m_sppkp',tanggal_akta_perubahan_terkahir = '$tgl_aktat',masa_berlaku_akta_perubahan_terakhir = '$m_aktat' where id_master_vendor ='$id_vendor'");

        }else{

      
           $this->db->query("INSERT INTO vendor_legal (id_master_vendor,tanggal_siup,masa_berlaku_siup,tanggal_situ,masa_berlaku_situ,tanggal_tdp,masa_berlaku_tdp,tanggal_identitas_direktur,
           masa_berlaku_identitas_direktur,tanggal_akta_notaris_penunjukan_direktur,masa_berlaku_akta_notaris_penunjukan_direktur,kontrak,tanggal_kontrak,tanggal_sppkp,masa_berlaku_sppkp
           ,tanggal_akta_perubahan_terkahir,masa_berlaku_akta_perubahan_terakhir) 
           values ('$id_vendor','$tgl_siup','$m_siup','$tgl_situ','$m_situ','$tgl_tdp','$m_tdp','$tgl_idir','$m_idir','$tgl_aktapdir','$m_aktapdir','$kontrak','$tgl_kontrak','$tgl_sppkp',
           '$m_sppkp','$tgl_aktat','$m_aktat')");   

        $insert_id = $this->db->insert_id();

        $this->db->query("INSERT INTO lampiran_vendor_legal ( sppkp,akta_notaris_penunjukan_direktur,identitas_direktur,anggaran_dasar,
        situ,tdp,akta_perubahan_terkahir,siup,npwp,referensi_bank,pengesahan_akte_pendirian,pengesahan_akte_perubahan_terakhir,surat_permohonan_menjadi_rekanan,data_personlia,
        data_perlengkapan,masa_jabatan_direksi,daftar_pengalaman_kerja,surat_pernyataan_kebenaran_dokumen,siujk,sertifikat_badan_usaha_jasa_konstruksi,id_vendor_legal)
        values('$lsppkp','$laktadir','$lidir','$lad','$lsitu','$ltdp','$laktat','$lsiup','$lnpwp','$lrefbank','$lpakte','$lpaktet','$lsrekan','$lhrd','$lpp','$lmdir',
        '$lpk','$lskeb','$lsiujk','$lkonstruksi',$insert_id)");

        }
        redirect('user/c_vendor_legal/detail_vend/'.$id_vendor);
    }


    function assign_aprv(){
         $id_number= $this->uri->segment('4');
        $deptu = $this->session->userdata('dept');
        $levelu = $this->session->userdata('level');
        $nrp = $this->session->userdata('nrp');
        if($levelu=='Division Head'){
            $cekflw = $this->db->query("SELECT a.* FROM workflow_vendor a  join sstruktur_ymi b on a.flow_name = b.costcenter where b.divs = '$deptu'
            and a.level = '$levelu'");
        }else{
            $cekflw = $this->db->query("SELECT a.* FROM workflow_vendor a  join sstruktur_ymi b on a.flow_name = b.costcenter where b.dept = '$deptu'
            and a.level = '$levelu'");
        }
      
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

    function aprv_vend(){
        $id_number= $this->uri->segment('4');
        $deptu = $this->session->userdata('dept');
        $levelu = $this->session->userdata('level');
        $nrp = $this->session->userdata('nrp');
        $maxflow = $this->db->query("SELECT a.*,b.* FROM WORKFLOW_VENDOR a join sstruktur_ymi b on a.flow_name = b.costcenter ORDER BY CONVERT(SUBSTRING(a.step,9,3), SIGNED INTEGER) DESC LIMIT 1");
        foreach($maxflow->result_array() as $mx ):
       $mxstep = $mx['step'];
        endforeach;
        if($levelu=='Division Head'){
            $cekflw = $this->db->query("SELECT a.* FROM workflow_vendor a  join sstruktur_ymi b on a.flow_name = b.costcenter where b.divs = '$deptu'
            and a.level = '$levelu'");
        }else{
            $cekflw = $this->db->query("SELECT a.* FROM workflow_vendor a  join sstruktur_ymi b on a.flow_name = b.costcenter where b.dept = '$deptu'
            and a.level = '$levelu'");
        }
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
            if($step1==$mxstep){
            $this->db->query("UPDATE vendor set status =' Approval Completed' where id_vendor = '$id_number'");
            }else{
                $this->db->query("UPDATE vendor set status ='$step',workflow_status = 'On Progress' where id_vendor = '$id_number'");

            }
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
           // $ckmaila = $maila;
           // $addemail = join(',', $ckmaila);
    
            $ceknrp = $this->db->query("SELECT * FROM vendor where id_vendor = '$id_number'");
            foreach($ceknrp->result_array() as $cn):
            $nrpc = $cn['nrp'];
            endforeach;
            $cekpgw = $this->db->query("SELECT * FROM pegawai where nrp = $nrpc");
            foreach($cekpgw->result_array() as $pg):
                $namap = $pg['nama'];
            endforeach;
    
           $this->m_send_mail->sendMail($namap,$maila);
           
    redirect('user/c_assign_vendor/assign_vendor');
    }


    function appr_vendor(){
        $this->load->view('user/v_tax_vendor');
    }

    function reject_vend(){
        $id = $this->input->post('id_master_form');
        $cmd = $this->input->post('command');
        $nrp = $this->session->userdata('nrp');
        foreach($id AS $key => $val){
            $rst = array(
                
              $_POST['id_number'][$key],
            );
        }
        //echo $rst;
        print_r($rst);
            //$cekapr = $this->db->query("SELECT * FROM approval_master_item where id_master_form = '$id'");
        $cekid = $rst;
        $ids = join("','",$cekid);

        $cekvend = $this->db->query("SELECT * FROM VENDOR where id_vendor in('$ids')");
        foreach($cekvend->result_array() as $i):
        $id_vendor = $i['id_vendor'];
        $status = $i['status'];
        if($status=='Approval 1'){
            $step = 'Created';
        }else{
        $steps = substr($status,9);
        $stepsi = intval($steps)-1;
        $step = 'Approval'.' '.$stepsi;
        }
        $steprj = substr($status,9);
        $srjc = 'Reject'.' '.$steprj;
        $tgl = date('Y-m-d H:i:s');
        $nrpt = $nrp.'-'.$tgl;
        $ins = $this->db->query("INSERT INTO reject_master  (id_master_form,reject,status,approval_status,tanggal,typre,note)
        values ('$id_vendor','$nrp','$steprj','$status','$tgl','Reject Vendor','$cmd')");
        $upd = $this->db->query("UPDATE vendor set status='$step',workflow_status = 'Reject' where id_vendor = '$id_vendor'");

        endforeach;
    }

}