<?php
Class C_master_vendor extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if($this->session->userdata('level')=='Sys Admin'){
            redirect('login');
        }
        $this->load->model('user/m_master_vendor');
    }

    function master_vendor(){
        $x['crr'] = $this->m_master_vendor->currency();
        $this->load->view('user/v_master_vendor',$x);
    }

    function pegawai(){
        $data = $this->m_master_vendor->get_pegawai();
        foreach($data->result_array() as $i):
        $dt = array(
            'nama'  => $i['nama'],
            'email' => $i['email'],
            'ext'   => $i['ext'],
            'dept'  => $i['dept'],
            'lokasi'=> $i['lokasi']
        );
        endforeach;

        echo json_encode($dt);
    }

    function get_vend_e(){
        $data = $this->m_master_vendor->get_vend_e();
        foreach($data->result_array() as $i):
        $dt = array(
            'id_vendor' =>$i['id_vendor'],
            'segment' =>$i['segment'],
            'nama' =>$i['nama'],
            'address' =>$i['address'],
            'phone' =>$i['phone'],
            'fax' =>$i['fax'],
            'email' =>$i['email'],
            'description' =>$i['description'],
            'country' =>$i['country'],
            'contact' =>$i['contact_information'],
            'curency' =>$i['curency'],
            'lampiran' =>$i['lampiran'],
            
        );
        endforeach;
        echo json_encode($dt);
    }

    public function tampil_item(){
        $nrp = array('nrp' => $this->session->userdata('nrp',TRUE),
                    'status' =>'Created');
        $data = $this->m_master_vendor->view($nrp);
        echo json_encode($data);
    }





    function submit(){
        $nrp = $this->input->post('nrp');
        $segmentv = $this->input->post('segmentv');
        $nama = $this->input->post('nama');
        $address = $this->input->post('address');
        $mailv = $this->input->post('mailv');
        $phonev = $this->input->post('phonev');
        $faxv = $this->input->post('faxv');
        $regnv = $this->input->post('regnv');
        $contv = $this->input->post('contv');
        $currv = $this->input->post('currv');
         $masterseq = $this->db->query("SELECT DISTINCT(id_vendor) FROM vendor order by id_vendor desc limit 1");
         $masterseqc = $masterseq->num_rows();
        if($masterseqc > 0){
         foreach($masterseq->result_array() as $i):
        $id_master_form = $i['id_vendor'];
         endforeach;
         $id_master_sub = substr($id_master_form,5);
         $id_master_val = intval($id_master_sub)+1;
         $id_master_val_seq = sprintf('%06d',$id_master_val);
         $id_master_seq = 'MVID-'.$id_master_val_seq;
}
else{
    $id_master_seq ='MVID-000001';
}
        $config['upload_path']          = './upload/';
		$config['allowed_types']        = 'pdf';
        $config['max_size']             = 24000000;
        
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('filev'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('user/v_master_vendor', $error);
		}
		else
		{
            $namal = $this->upload->data("file_name");
            $cd = date('Y-m-d H:i:s');
            $this->db->query("INSERT INTO vendor (id_vendor,segment,nama,address,phone,fax,email,country,contact_information,curency,nrp,lampiran,status,created_date)
            VALUES ('$id_master_seq','$segmentv','$nama','$address','$phonev','$faxv','$mailv','$regnv','$contv','$currv','$nrp','$namal','Created','$cd')");
                 redirect('user/c_master_vendor/master_vendor');

		}
   
    }

    public function update_vend(){
        $data = $this->m_master_vendor->update_vend();
            echo json_encode($data);
        }
    

    public function tampil_file(){
        $data = $this->m_master_vendor->get_file();
        echo json_encode($data);
    }

    public function submit_vend(){
        $data = $this->m_master_vendor->submit_vend();
        echo json_encode($data);
    }

}