<?php
Class M_akses extends CI_Model{

function tampil_akses(){
   $hsl =  $this->db->query("SELECT DISTINCT(dept),level from akses");
    return $hsl->result();
}
function akses_form(){
    //$id_akses = $this->input->post('id_akses');
    $dept = $this->input->post('dept');
    $level = $this->input->post('level');
    $hsl = $this->db->query("SELECT a.*,b.*,c.* FROM akses a join akses_form b on a.akses_form = b.id_akses_form join akses_group c
    on b.id_akses_group = c.id_akses_group where a.dept = '$dept' and a.level = '$level'");
    
    return $hsl->result();
}

function get_akses_form(){
    $hsl = $this->db->get('akses_form');
    return $hsl;
}
function sel_group(){
    $sel_akses = $this->input->post('sel_akses');
    $hsl = $this->db->query("SELECT a.*,b.* FROM akses_form a join akses_group b on a.id_akses_group = b.id_akses_group where a.id_akses_form = '$sel_akses'");
    return $hsl;
}

function save_akses(){
$dept = $this->input->post('a_dept');
$level = $this->input->post('a_level');
$akses_f = $this->input->post('sel_akses');
$akses_g = $this->input->post('a_group');
$selg = $this->db->query("SELECT * from akses_group where nama_akses_group = '$akses_g'");
foreach($selg->result_array() as $g):
    $id_group = $g['id_akses_group'];
endforeach;
$hsl = $this->db->query("INSERT INTO akses (dept,level,akses_form,akses_group) values ('$dept','$level','$akses_f','$id_group')");
}

function look_pgw(){
    $data = array(
        "nrp" => $this->input->post('nrp'),
    );    
    $hsl = $this->db->get_where('pegawai',$data);
    return $hsl;
}

}