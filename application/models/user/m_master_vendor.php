<?php
Class M_master_vendor extends CI_Model{
    public $db2;
    function __construct(){
        parent::__construct();
        $this->db2 = $this->load->database('db2',True);
        $this->load->model('user/m_send_mail');
    }
    function get_pegawai(){
/*
        $data = array(
            'nrp' => $this->input->post('nrp'),
        );
        $result = $this->db->get_where('pegawai',$data);
        return $result->result();
        */
        $nrp = $this->input->post('nrp');
        $hsl = $this->db->query("SELECT * FROM pegawai where nrp = '$nrp'");
        return $hsl;
    }

    function get_vend_e(){
        $id = $this->input->post('id_vendor');
        $hsl = $this->db->query("SELECT * FROM vendor where id_vendor = '$id'");
        return $hsl;
    }

    public function view($data){
            $hsl = $this->db->get_where('vendor',$data);
           return $hsl->result();
           
    }

    public function update_vend(){
            $id = $this->input->post('edit_vend1');
            $segmentv =$this->input->post('segmentv1');
            $nama = $this->input->post('nama1');
            $address = $this->input->post('address1');
            $mailv = $this->input->post('mailv1');
            $phonev = $this->input->post('phonev1');
            $faxv = $this->input->post('faxv1');
            $regnv = $this->input->post('regnv1');
            $contv = $this->input->post('contv1');
            $namal = $this->input->post('filev1');
            $currv = $this->input->post('currv1');

        

        $config['upload_path']          = './upload/';
		$config['allowed_types']        = 'pdf';
        $config['max_size']             = 24000000;
        
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('filev'))
		{
                $error = array('error' => $this->upload->display_errors());
                $this->db->query("UPDATE  vendor set segment ='$segmentv' ,nama='$nama',address='$address',phone='$phonev',fax='$faxv',email='$mailv',country='$regnv',contact_information='$contv',
                curency='$currv' where id_vendor = '$id'");
                
//$this->load->view('user/v_master_vendor', $error);
		}
		else
		{
            $namal = $this->upload->data("file_name");
//$cd = date('Y-m-d H:i:s');
            $this->db->query("UPDATE  vendor set segment ='$segmentv' ,nama='$nama',address='$address',phone='$phonev',fax='$faxv',email='$mailv',country='$regnv',contact_information='$contv',
            curency='$currv',lampiran='$namal' where id_vendor = '$id'");
               //redirect('user/c_master_vendor/master_vendor');

		}
    }
  
function get_file(){
    $data = array(
        'id_vendor' => $this->input->post('id_vendor'),
    );
    $result = $this->db->get_where('vendor',$data);
    return $result->result();
}

function currency(){
    $hsl = $this->db2->get('CURRENCY');
    return $hsl;
}

function submit_vend(){
    $nrp = $this->session->userdata('nrp');
   $id_number = $this->input->post('id_number');
    $result = array();
    $rst = array();
    $rsst = array();
    foreach($id_number AS $key => $val){
        $result[] = array(
            "id_vendor" => $_POST['id_number'][$key],
            "status" => 'Approval 1',
            "workflow_status" => 'On Progress'
        );
    }
    foreach($id_number AS $key => $val){
        $rst[] = array(
            "id_master_vendor" => $_POST['id_number'][$key],
            "status" => 'Submited',
            "approval" => $nrp,
             "tanggal" => date('Y-m-d H:i:s')
        );
    }


    
$email = 'panca.apriani@yutaka.co.id';
    $hsl = $this->db->update_batch('vendor',$result,'id_vendor');
    $hsll = $this->db->insert_batch('approval_master_vendor',$rst);
    $deptu = $this->session->userdata('dept');
    $cekmail = $this->db->query("SELECT * FROM pegawai where dept = '$deptu' and level = 'Section Head' ");
   // $cekreq = $this->db->query("SELECT * FROM approval_master_item where id_master_form = '$id_master_form'");
   $nrpp = $this->session->userdata('nrp');
    foreach($cekmail->result() as $e):
    $maila[] = $e->email;
    endforeach;
    $ckmaila = $maila;
    $addemail = join(',', $ckmaila);
    $this->m_send_mail->sendEmail($nrpp,$addemail);
    

}

	function sendEmail($nama,$email){
		$this->load->library('PHPMailer_load'); //Load Library PHPMailer
		$mail = $this->phpmailer_load->load(); // Mendefinisikan Variabel Mail
		$mail->isSMTP();  // Mengirim menggunakan protokol SMTP
		$mail->SMTPSecure = 'tls';
		$mail->Host = 'smtp.office365.com';
		$mail->Port = 587; //gunakan port 25 sebagai alternatif
		$mail->SMTPAuth = true; // Autentikasi SMTP
		$mail->Username = 'it.support@yutaka.co.id';
		$mail->Password = 'hxkmwchlvgmdkkcf';
	//	$mail->From = trim_input("alfrinaldi.taufik@yutaka.co.id");
	//	$mail->FromName = trim_input($_POST['Name']);
	//$headers = "From: Your Name <yourname@example.com>";
	$mail->addReplyTo('noreplyitymi@outlook.com', 'Reply to name');
		$mail->setFrom('it.support@yutaka.co.id', 'Approval Request'); // Sumber email
		$mail->addAddress($email,'E-form'); // Masukkan alamat email dari variabel $email
		$mail->Subject = "Approval Request Master Vendor"; // Subjek Email
		$mail->msgHtml("
            <h3>E-Registration</h3><hr>
            <br>
            Request from : $nama
            <br>
            There is Reuqest approval for you, please open this link to view details.
            <br>
            http://192.168.20.95/e-form/  <br>
            <br>
            <br>

			
			"); // Isi email dengan format HTML


		if (!$mail->send()) {
					echo "Mailer Error: " . $mail->ErrorInfo;
				} else {
					echo "Message sent!";
				} // Kirim email dengan cek kondisi
	}

}