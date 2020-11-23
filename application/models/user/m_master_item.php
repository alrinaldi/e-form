<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class M_master_item extends CI_Model{

    public $db2;
    function __construct(){
        parent::__construct();
        $this->db2 = $this->load->database('db2',True);
        $this->load->model('user/m_send_mail');
        
    }

function view($data){
 $hsl = $this->db->get_where('master_item',$data);
  //$this->db->order_by('created_date');
return $hsl->result();
}
function unit(){
$hsl = $this->db2->get('UNITOFMEASURE');
return $hsl;
}
function code_project(){
    $hsl = $this->db2->get('DIMENSIONFINANCIALTAG');
    return $hsl;
}
function get_item_e(){
    $id = $this->input->post('id_master_item');
    $hsl = $this->db->query("SELECT * FROM master_item where item_id = '$id'");
    return $hsl;
}

function del_size(){
    $item_n = $this->input->post('id');
    $hsl = $this->db->query("DELETE from size_item where id_size = '$item_n'"); 
    return $hsl;
}
function save_item(){
    $digit1 = $this->input->post('digit1');
    $digit2 = $this->input->post('digit2');
    $digit3 = $this->input->post('digit3');
    $nomen1 = $digit1.$digit2.$digit3;
    $nomen = $this->db2->query("SELECT top 1 * FROM INVENTTABLE WHERE ITEMID LIKE '$nomen1%' order by ITEMID DESC");
    foreach($nomen->result_array() as $i):
        $itemid = $i['ITEMID'];
    endforeach;
    $itemex = $this->db->query("SELECT * FROM master_item where item_id LIKE '$nomen1%' order by item_id desc limit 1");
    if($itemex->num_rows() > 0){
        foreach($itemex->result_array() as $z):
            $itemidex = $z['item_id'];
        endforeach;
    }else{  
        $itemidex = $digit1.$digit2.$digit3.'000001';
    }
    

    $itemidaxsub = substr($itemid,4);
    $itemidaxval = intval($itemidaxsub);
    
    $itemidexsub = substr($itemidex,4);
    $itemidexval = intval($itemidexsub);

    if($itemidaxval >= $itemidexval){
        $itemidaxval = $itemidaxval+1;
        $itemidaxseq = sprintf('%05d',$itemidaxval);
        $itemseq = $digit1.$digit2.$digit3.$itemidaxseq;
    }else if ($itemidaxval <= $itemidexval){
        $itemidexval = $itemidexval+1;
        $itemidexseq = sprintf('%05d',$itemidexval);
        $itemseq = $digit1.$digit2.$digit3.$itemidexseq;
    }
    else if ($itemidaxval == $itemidexval){
        $itemidaxval = $itemidaxval+1;
        $itemidaxseq = sprintf('%05d',$itemidaxval);
        $itemseq = $digit1.$digit2.$digit3.$itemidaxseq;
    }

    $data = array(
        'nrp' => $this->session->userdata('nrp'),
        'item_id' => $itemseq,
        'item_name' => $this->input->post('itemname'),
        'product_type' => $this->input->post('ptype'),
        'product_subtype' => $this->input->post('subtype'),
        'category' => $this->input->post('category'),
        'item_model_group' => $this->input->post('itemmodel'),
        'inventory_unit' => $this->input->post('inventunit'),
        'purchase_unit' => $this->input->post('purchunit'),
        'sales_unit' => $this->input->post('salesunit'),
        'product'   => $this->input->post('product'),
        'type'      => $this->input->post('type'),
        'wct'       => $this->input->post('wct'),
        'status'    => 'Created',
    );
   
    $result = $this->db->insert('master_item',$data);
    if($this->input->post('subtype')=="Product Master"){
    $lastid = $this->db->insert_id();

    if($this->input->post('size')){
        $size = $this->input->post('size');
        $rst = array();
        foreach($size AS $key => $val){
         $rst[] = array(
          "size_name"  => $_POST['size'][$key],
          "id_master_item"  => $itemseq
         );
        }
             
    $hsl = $this->db->insert_batch('size_item',$rst);
    return $rst;
    }
    }else{
    
    }
    $lvlum = $this->session->userdata('level');
  

    return $result;
}

function update_item(){

    
    $item_id = $this->input->post('item_id_e');
    $item_name = $this->input->post('itemname1');
    $product_type = $this->input->post('ptype1');
    $product_subtype = $this->input->post('subtype1');
    $category = $this->input->post('category1');
    $item_model_group = $this->input->post('itemmodel1');
    $inventory_unit = $this->input->post('inventunit1');
    $purchase_unit = $this->input->post('purchunit1');
    $sales_unit = $this->input->post('salesunit1');
    $product   = $this->input->post('product1');
    $type      = $this->input->post('type1');
    $wct       = $this->input->post('wct1');
    
    $this->db->query("UPDATE master_item set item_name='$item_name',product_type='$product_type',product_subtype='$product_subtype',category='$category',
    item_model_group = '$item_model_group',inventory_unit ='$inventory_unit',purchase_unit='$purchase_unit',sales_unit='$sales_unit',product='$product',type='$type',wct='$wct' where
    item_id = '$item_id'");
    //$this->db->replace('master_item',$data);
}

function update_itema(){

    
    $item_id = $this->input->post('item_id_e');
    $item_name = $this->input->post('itemname1');
    $product_type = $this->input->post('ptype1');
    $product_subtype = $this->input->post('subtype1');
    $item_model_group = $this->input->post('itemmodel1');
    $inventory_unit = $this->input->post('inventunit1');
    $purchase_unit = $this->input->post('purchunit1');
    $sales_unit = $this->input->post('salesunit1');
    $product   = $this->input->post('product1');
    $type      = $this->input->post('type1');
    $wct       = $this->input->post('wct1');
    
    $this->db->query("UPDATE master_item set item_name='$item_name',product_type='$product_type',product_subtype='$product_subtype',
    item_model_group = '$item_model_group',inventory_unit ='$inventory_unit',purchase_unit='$purchase_unit',sales_unit='$sales_unit',product='$product',type='$type',wct='$wct' where
    item_id = '$item_id'");
    //$this->db->replace('master_item',$data);
}


function get_size(){
    $data = array(
        'id_master_item' => $this->input->post('id_master_item'),
    );
    $result = $this->db->get_where('size_item',$data);
    return $result->result();
}

public function add_size(){
    $size = $this->input->post('size');
    $result = array();
    foreach($size AS $key => $val){
        if(empty($_POST['size'][$key])){
            
        }else{
        $result[] = array(
      "size_name"  => $_POST['size'][$key],
      "id_master_item"  => $this->input->post('edit_item')
     );
    }
    } 
    
    $hsl = $this->db->insert_batch('size_item',$result);
    return $hsl;

   // $result = $this->db->insert('size_item',$data);
   // return $result;

}
function add_master_form(){
    if($this->input->post('reject')!=''){
        $id_master_seq = $this->input->post('id_master_form');
        $result = array();
        foreach($id_master_seq AS $key => $val){
            $result[] = array(
                
                "id_master_form" => $_POST['id_master_form'][$key],
                "status" => 'Approval 1'
            );
        }
        $rst = array();
        foreach($id_master_seq AS $key => $val){
            $rst[] = array(
                
                "id_master_form" => $_POST['id_master_form'][$key],
                "approval_status" => 'Approval 1'
            );
        }
      
       // $dt = date('Y-m-d H:i:s');
        //$this->db->insert('approval_master_item',$data);
        //$this->db->query("UPDATE approval_master_item set created_date = '$dt',approval_status = 'Approval 1' where id_master_form  = '$id_master_seq'");
        //$this->db->query("UPDATE master_item set status = 'Approval 1' where id_master_form = '$id_master_seq'");  
           $hsl = $this->db->update_batch('master_item',$result,'id_master_form');
           $this->db->update_batch('approval_master_item',$rst,'id_master_form');
            $deptu = $this->session->userdata('dept');
            $cekmail = $this->db->query("SELECT * FROM pegawai where dept = '$deptu' and level = 'Section Head' ");
            $nrpp = $this->session->userdata('nrp');
            $nm = $this->session->userdata('nama');
            foreach($cekmail->result() as $e):
            $maila[] = $e->email;
            endforeach;
            $ckmaila = $maila;
            $addemail = join(',', $ckmaila);
            $this->m_send_mail->emailItem($nm,$addemail);
    }else{
        $masterseq = $this->db->query("SELECT * FROM approval_master_item order by id_master_form desc limit 1");
        $masterseqc = $masterseq->num_rows();
        if($masterseqc > 0){
        foreach($masterseq->result_array() as $i):
            $id_master_form = $i['id_master_form'];
        endforeach;
        $id_master_sub = substr($id_master_form,5);
        $id_master_val = intval($id_master_sub)+1;
        $id_master_val_seq = sprintf('%06d',$id_master_val);
        $id_master_seq = 'MIID-'.$id_master_val_seq;
    }
    else{
        $id_master_seq ='MIID-000001';
    }
    
    $data = array(
        "id_master_form" => $id_master_seq,
        "requestor" => $this->session->userdata('nrp'),
        "created_date" => date('Y-m-d H:i:s'),
        "approval_status" => 'Approval 1'
    );
    
    $this->db->insert('approval_master_item',$data);
    
        $id_number = $this->input->post('id_number');
        $result = array();
        foreach($id_number AS $key => $val){
            $result[] = array(
                "item_id" => $_POST['id_number'][$key],
                "id_master_form" => $id_master_seq,
                "status" => 'Approval 1'
            );
        }
    
        $hsl = $this->db->update_batch('master_item',$result,'item_id');
        $deptu = $this->session->userdata('dept');
        $cekmail = $this->db->query("SELECT * FROM pegawai where dept = '$deptu' and level = 'Section Head' ");
        $nrpp = $this->session->userdata('nrp');
        $nm = $this->session->userdata('nama');
        foreach($cekmail->result() as $e):
        $maila[] = $e->email;
        endforeach;
        $ckmaila = $maila;
        $addemail = join(',', $ckmaila);
        $this->m_send_mail->emailItem($nm,$addemail);
    }
  
}

function delete_item(){
    $id = $this->input->post('id');
    $hsl = $this->db->query("DELETE from master_item where item_id = '$id'");
    return $hsl;
}

function modal_item(){
    $data = array(
        "id_master_form" => $this->input->post('id_master_form')
    );
    $hsl = $this->db->get_where('master_item',$data);
    return $hsl->result();
}

}