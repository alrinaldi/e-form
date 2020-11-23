<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class C_item_it extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if(($this->session->userdata('level')!='Section Head' ||$this->session->userdata('level')!='Department Head') && $this->session->userdata('dept')!='INFORMATION TECHNOLOGY'){
            redirect('login');
        }

 
            $this->db2 = $this->load->database('db2',True);
        
        $this->load->model('admin/m_item_it');
        $this->load->model('admin/m_send_mail');

    }
    function item_it(){
        $this->load->view('admin/v_item_it');
    }
    function detail_form(){
        $id = $this->uri->segment('4');
        $x['id'] = $id;
        $x['data'] = $this->db->query("SELECT * FROM master_item where id_master_form  = '$id'");
        $x['cekitem'] = $this->db->query("SELECT * FROM master_item where id_master_form  = '$id' and product_category =''");
    
        $x['group'] = $this->m_item_it->list_category();
        $this->load->view('admin/v_detail_form',$x);
    }
    function it_assign(){
        $data = $this->m_item_it->it_assign();
        echo json_encode($data);
    }
    function edit_group(){
    echo $item_id = $this->input->post('item_id');
         $cekapr = $this->db->query("SELECT * FROM master_item where item_id = '$item_id' ");
         foreach($cekapr->result_array() as $r):
            $status = $r['status'];
        endforeach;
        
        $steps = substr($status,9);
        $stepsi = intval($steps)+1;
        $step = 'Approval'.' '.$stepsi;

    $pc = $this->input->post('p_category');
        $id_master_form = $this->input->post('id_master_form');
        $nrp = $this->session->userdata('nrp');
    echo    $wct = $this->session->userdata('wct');
        $this->db->query("UPDATE master_item set product_category = '$pc' where item_id = '$item_id'");
        
        redirect('admin/c_item_it/detail_form/'.$id_master_form);
    }

    function submit_item(){
        echo   $id_master_form = $this->input->post('id_master_form1');
        $cekaprovi = $this->db->query("SELECT * FROM approval_master_item where id_master_form = '$id_master_form'");
        foreach($cekaprovi->result_array() as $ci):
        $aprsts = $ci['approval_status'];
        endforeach;
        $cekflow = $this->db->query("SELECT * FROM workflow_item where step = '$aprsts'");

        $steps = substr($aprsts,9);
        $stepsi = intval($steps)+1;
        $step = 'Approval'.' '.$stepsi;
        
        $ap = $this->session->userdata('nrp').'-'.date('Y-m-d H:i:s');
        $this->db->query("UPDATE approval_master_item set approval_status = '$step',it_bp = '$ap' where id_master_form = '$id_master_form' ");
        $this->db->query("UPDATE master_item set status =  '$step' where id_master_form = '$id_master_form'");
        
        $cekemailp = $this->db->query("SELECT * FROM pegawai where nrp = '0868'");
        foreach($cekemailp->result_array() as $p):
            $emailp = $p['email'];
            $namap = $p['nama'];
        endforeach;

        $this->m_send_mail->emailItem($namap,$emailp);
        redirect('admin/c_item_it/item_it');
    }
    function edit_item(){
        $data = $this->m_acc_item->edit_item();
        echo json_encode($data);
    }

/*
    function treev(){
        $query = $this->db2->query("SELECT * FROM ECORESCATEGORY ");


        foreach($query->result_array() as $row):
        $sub_data["id"] = $row["RECID"];
        $sub_data["name"] = $row["NAME"];
        $sub_data["text"] = $row["NAME"];
        $sub_data["parent_id"] = $row["PARENTCATEGORY"];
        $data[] = $sub_data;
        endforeach;
        
        
        
        $result = mysqli_query($connect, $query);
        
        while($row = mysqli_fetch_array($result)){
        
         $sub_data["id"] = $row["id"];
        
         $sub_data["name"] = $row["name"];
        
         $sub_data["text"] = $row["name"];
        
         $sub_data["parent_id"] = $row["parent_id"];
        
         $data[] = $sub_data;
        
        }
        
        foreach($data as $key => &$value){
        
         $output[$value["id"]] = &$value;
        
        }
        
        foreach($data as $key => &$value){
        
         if($value["parent_id"] && isset($output[$value["parent_id"]])){
        
          $output[$value["parent_id"]]["nodes"][] = &$value;
        
         }
        
        }
        
        foreach($data as $key => &$value){
        
         if($value["parent_id"] && isset($output[$value["parent_id"]])){
        
          unset($data[$key]);
        
         }
        
        }
        
        echo json_encode($data);
    }


*/

function treev(){
    $result = $this->m_item_it->tree_all();

    $itemsByReference = array();

// Build array of item references:
    foreach($result as $key => &$item) {
        $itemsByReference[$item['id']] = &$item;
        // Children array:
        $itemsByReference[$item['id']]['children'] = array();
        // Empty data class (so that json_encode adds "data: {}" )
        $itemsByReference[$item['id']]['data'] = new StdClass();
    }

// Set items as children of the relevant parent item.
    foreach($result as $key => &$item)
        if($item['parent_id'] && isset($itemsByReference[$item['parent_id']]))
            $itemsByReference [$item['parent_id']]['children'][] = &$item;

// Remove items that were added to parents elsewhere:
    foreach($result as $key => &$item) {
        if($item['parent_id'] && isset($itemsByReference[$item['parent_id']]))
            unset($result[$key]);
    }
    foreach ($result as $row) {
        $data[] = $row;
    }

// Encode:
    echo json_encode($data);
}
function detail_itemit(){
    $data = $this->m_item_it->detail_itemit();
    echo json_encode($data);
}
function get_sized(){
    $data = $this->m_item_it->get_sized();
    echo json_encode($data);
}
function add_prodc(){
    $data = $this->m_item_it->add_prodc();
    echo json_encode($data);
}

}