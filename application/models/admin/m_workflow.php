<?php
Class M_workflow extends CI_Model{

function workflow_item(){
    $hsl = $this->db->get('workflow_item');
    return $hsl->result();
}

function flow_item(){

}

public function save_flow(){
    $data = array(
        'flow_name' => $this->input->post('approval'),
        'step'      => $this->input->post('step'),
        'level'     => $this->input->post('level'),

    );

    $hsl = $this->db->insert('workflow_item',$data);
    return $hsl;
}

public function save_flow_vend(){
    $data = array(
        'flow_name' => $this->input->post('approval'),
        'step'      => $this->input->post('step'),
        'level'     => $this->input->post('level'),

    );

    $hsl = $this->db->insert('workflow_vendor',$data);
    return $hsl;
}

public function cek_step(){
    $step = $this->input->post('step');
    $hsl = $this->db->query("SELECT count(step) as cnt from workflow_item where step = '$step' ");
    $cnt = $hsl->num_rows();
    echo $cnt;
}

function workflow_vend(){
    $hsl = $this->db->get('workflow_vendor');
    return $hsl->result();
}


}