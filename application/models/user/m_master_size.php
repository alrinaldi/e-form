<?php
Class M_master_size extends CI_Model{

    public $db2;
    function __construct(){
        parent::__construct();
        $this->db2 = $this->load->database('db2',True);
        $this->load->model('user/m_send_mail');
    }
    function get_item_size(){
        $hsl = $this->db2->query("SELECT DISTINCT(b.DISPLAYPRODUCTNUMBER) as item,a.ITEMID AS itm,a.NAMEALIAS as na FROM  INVENTTABLE a join VWITEMSTYLESIZE b on a.ITEMID = b.DISPLAYPRODUCTNUMBER");
        return $hsl;
    }

    function cek_size(){
        $hsl = $this->db2->query("SELECT TOP 10000 * FROM ECORESPRODUCTTRANSLATIONS");
        return $hsl;
    }

    function get_size(){
        $id = $this->input->post('id');
        $idi = $id.' '.':';
        $hsl = $this->db2->query("SELECT DISPLAYPRODUCTNUMBER AS itemid,DISPLAYDIMENSION as size FROM VWITEMSTYLESIZE where DISPLAYPRODUCTNUMBER  =  '$id'
        ");
        return $hsl->result();
    }

    function save_size(){
        $size = $this->input->post('size');
        $itemn = $this->input->post('idim');
        
$ceksize = $this->db2->query("SELECT DISPLAYPRODUCTNUMBER AS itemid,DISPLAYDIMENSION as size FROM VWITEMSTYLESIZE 
where DISPLAYPRODUCTNUMBER  =  '$itemn'");
foreach($ceksize->result_array() as $c):
    $csize = $c['size'];
    foreach($size AS $key => $val){
    $insize = $_POST['size'][$key];
    $pcsize = $this->db2->query("SELECT DISPLAYPRODUCTNUMBER AS itemid,DISPLAYDIMENSION as size FROM VWITEMSTYLESIZE 
    where DISPLAYDIMENSION  =  '$insize'")->num_rows();
    if($pcsize>0){
        $result = 'sama';
    }else{
        $result = 'beda';
    }
    }
endforeach;

        if($result=='beda'){
            $result = array();
            $rst = array();
    
            $rst = array(
                "itemid"  => $this->input->post('idim'),
                "nama" => $this->input->post('namas'),
                "requestor" => $this->session->userdata('nrp'),
                "status" => "Created"
            );
            $hsl = $this->db->insert('master_size',$rst);
            $insert_id = $this->db->insert_id();
    
            foreach($size AS $key => $val){
                if(empty($_POST['size'][$key])){
                    
                }else{
                $result[] = array(
              "size"  => $_POST['size'][$key],
              "id_master" => $insert_id
             );
            }
            } 
            $hsl = $this->db->insert_batch('size_list',$result);
            $rtn = 'sukses';
            return $rtn ;
        }else{
            $rtn = 'gagal';
            return $rtn;
        }
    
    }

    function tampil_size(){
        $req = $this->session->userdata('nrp');
        $hsl = $this->db->query("SELECT * FROM  master_size where requestor = '$req' and status = 'Created' ");
        return $hsl->result();
    }

    function view_appr(){

    }
    function submit(){
        $type = $this->input->post('type');
        $masterseq = $this->db->query("SELECT * FROM approval_master where id_master_form like '%MSID-%' order by id_master_form desc limit 1");
        $masterseqc = $masterseq->num_rows();
        if($masterseqc > 0){
        foreach($masterseq->result_array() as $i):
            $id_master_form = $i['id_master_form'];
        endforeach;
        $id_master_sub = substr($id_master_form,5);
        $id_master_val = intval($id_master_sub)+1;
        $id_master_val_seq = sprintf('%06d',$id_master_val);
        $id_master_seq = 'MSID-'.$id_master_val_seq;
    }
    else{
        $id_master_seq ='MSID-000001';
    }
    
    $data = array(
        "id_master_form" => $id_master_seq,
        "approval" => $this->session->userdata('nrp'),
        "tanggal" => date('Y-m-d H:i:s'),
        "status" => 'Submited',
        "type" => $type
    );
    
    $this->db->insert('approval_master',$data);
    
        $id_number = $this->input->post('id_number');
        $result = array();
        foreach($id_number AS $key => $val){
            $result[] = array(
                "id" => $_POST['id_number'][$key],
                "id_master_form" => $id_master_seq,
                "status" => 'Approval 1',
                "requestor" => $this->session->userdata('nrp'),
                "created_date" =>date('Y-m-d H:i:s'),
                "workflow_status" => 'On Progress'
            );
        }
        $typ = 'Master Size';
        $hsl = $this->db->update_batch('master_size',$result,'id');
        $deptu = $this->session->userdata('dept');
        $cekmail = $this->db->query("SELECT * FROM pegawai where dept = '$deptu' and level = 'Section Head' ");
        $nrpp = $this->session->userdata('nrp');
        $nm = $this->session->userdata('nama');
        foreach($cekmail->result() as $e):
        $maila = $e->email;
        $this->m_send_mail->emailSize($nm,$maila,$typ);
        endforeach;
        //$ckmaila = $maila;
        //$addemail = join(',', $ckmaila);
        

} 
function get_size_e(){
    $id = $this->input->post('id');
    $hsl = $this->db->query("SELECT * FROM size_list where id_master = '$id' ");
    return $hsl->result();
}
function addsz(){
    $size = $this->input->post('size');
    $id = $this->input->post('idime');
    $result = array();
    foreach($size AS $key => $val){
        if(empty($_POST['size'][$key])){
            
        }else{
        $result[] = array(
      "size"  => $_POST['size'][$key],
      "id_master" => $id
     );
    }
    }
    $this->db->insert_batch('size_list',$result); 
}
function get_size_d(){

}

function delm_size(){
    $idim = $this->input->post('idim');

    $this->db->query("DELETE FROM master_size where id = '$idim'");
    $this->db->query("DELETE FROM size_list where id_master = '$idim'");
       
}
}