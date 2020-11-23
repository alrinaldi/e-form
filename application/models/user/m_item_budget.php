<?php
Class M_item_budget extends CI_Model{

    public $db2;
    function __construct(){
        parent::__construct();
        $this->db2 = $this->load->database('db2',True);
    }

function item_get(){
    $cekdept = $this->session->userdata('dept');
    $ceklevel = $this->session->userdata('level');
    $cekflow  = $this->db->query("SELECT a.* FROM workflow_item a join sstruktur_ymi b on a.flow_name = b.costcenter where b.dept = '$cekdept'
    and a.level = '$ceklevel' ");
    $ccekflow = $cekflow->num_rows();
    if($ccekflow>0){
        foreach($cekflow->result_array() as $i):
            $step = $i['step'];
        endforeach;
        $app = $this->db->query("SELECT DISTINCT(a.id_master_form),a.requestor,b.nama,substring(a.created_date,1,10) as created_date,substring(a.created_date,11,6) as jam 
        from approval_master_item a join pegawai b on a.requestor = b.nrp join master_item c on
        a.id_master_form = c.id_master_form where  c.status = '$step'");
        return $app->result();
    }
}
    
    function code_project(){
        $hsl = $this->db2->query("SELECT a.* FROM DIMENSIONFINANCIALTAG a join FINANCIALTAGCATEGORY b on a.FINANCIALTAGCATEGORY = b.RECID join DIMENSIONATTRIBUTEDIRCATEGORY c on b.RECID =c.DIRCATEGORY 
        join DIMENSIONATTRIBUTE d on c.DIMENSIONATTRIBUTE = d.recid where d.name = 'project'");
        return $hsl;
    }

    function get_budget($val){
        $hsl = $this->db2->query("SELECT TOP 10 a.* FROM DIMENSIONFINANCIALTAG a join FINANCIALTAGCATEGORY b on a.FINANCIALTAGCATEGORY = b.RECID join DIMENSIONATTRIBUTEDIRCATEGORY c on b.RECID =c.DIRCATEGORY 
        join DIMENSIONATTRIBUTE d on c.DIMENSIONATTRIBUTE = d.recid where d.name = 'project' and a.value like '%$val%'");
        return $hsl->result();
    }

    function addprj(){
        $item_id = $this->input->post('id');
        $prj = $this->input->post('val');
        $this->db->query("UPDATE master_item set project = '$prj' where item_id = '$item_id'");
    }

    function modal_item(){
        $data = array(
            "id_master_form" => $this->input->post('id_master_form')
        );
        $hsl = $this->db->get_where('master_item',$data);
        return $hsl->result();
    }

    function approve_btn(){
        $id = $this->input->post('id_master_form');
        $hsl = $this->db->query("SELECT * FROM master_item where id_master_form = '$id' and project = '' ");
        return $hsl;
    }

}