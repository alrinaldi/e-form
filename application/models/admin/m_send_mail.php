<?php
Class M_send_mail extends CI_Model{

    
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
            <a href='http://192.168.20.95/e-form/'>E-form</a>  <br>
            <br>
            <br>

			
			"); // Isi email dengan format HTML


		if (!$mail->send()) {
					echo "Mailer Error: " . $mail->ErrorInfo;
				} else {
					echo "Message sent!";
				} // Kirim email dengan cek kondisi
	}

	function emailItem($nama,$email){
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
		$mail->Subject = "Approval Request Master Item"; // Subjek Email
		$mail->msgHtml("
            <h3>E-Registration</h3><hr>
            <br>
            Request from : $nama
            <br>
            There is Reuqest approval for you, please open this link to view details.
            <br>
			<a href='http://192.168.20.95/e-form/'>E-form</a>  <br>
            <br>
            <br>

			
			"); // Isi email dengan format HTML


		if (!$mail->send()) {
					echo "Mailer Error: " . $mail->ErrorInfo;
				} else {
					echo "Message sent!";
				} // Kirim email dengan cek kondisi

	}
	function emailSize($nama,$email,$type){
		$typ = $type;
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
		$mail->Subject = "Approval Request ".$typ; // Subjek Email
		$mail->msgHtml("
            <h3>E-Registration</h3><hr>
            <br>
            Request from : $nama
            <br>
            There is Reuqest approval for you, please open this link to view details.
            <br>
			<a href='http://192.168.20.95/e-form/'>E-form</a>  <br>
            <br>
            <br>

			
			"); // Isi email dengan format HTML


		if (!$mail->send()) {
					echo "Mailer Error: " . $mail->ErrorInfo;
				} else {
					echo "Message sent!";
				} // Kirim email dengan cek kondisi

    }

    function emailCompltItem($nama,$email,$id_master){
        
        $cekitem = $this->db->query("SELECT * FROM master_item where id_master_form = '$id_master'");
        $table = '';
        foreach($cekitem->result() as $i):
            $item = $i->item_id;
            $name = $i->item_name;
        $table .= "<tr>
        <td style='font-family: arial, sans-serif;
        border:1px solid black;'>$item</td>
        <td style='font-family: arial, sans-serif;
        border:1px solid black;'>$name</td>
        </tr>";
        endforeach;
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
		$mail->Subject = "Your Request Number Form : $id_master"; // Subjek Email
		$mail->msgHtml("
            <h3>E-Registration</h3><hr>
            <br>
            Request from : $nama
            <br>
            <br>
            Your Request Has Been Uploaded
            <br>
            <table style='font-family: arial, sans-serif;
            border:1px solid black;'>
            <thead style='font-family: arial, sans-serif;
            border:1px solid black;'>
            <tr>
            <th style='font-family: arial, sans-serif;
            border:1px solid black;'>Item Id</th>
            <th style='font-family: arial, sans-serif;
            border:1px solid black;'>Item Name</th>
            <tr>
            </thead>
            <tbody style='font-family: arial, sans-serif;
            border:1px solid black;'>
            $table
            </tbody>
            </table>
            <br>
			<a href='http://192.168.20.95/e-form/'>E-form</a>  <br>
            <br>
            <br>

			
			"); // Isi email dengan format HTML


		if (!$mail->send()) {
					echo "Mailer Error: " . $mail->ErrorInfo;
				} else {
					echo "Message sent!";
				} // Kirim email dengan cek kondisi
    }
    function emailCompltSize($nama,$email,$id_master){
        
        $cekitem = $this->db->query("SELECT * FROM master_size where id_master_form = '$id_master'");
        $table = '';
        $sz = '';
        foreach($cekitem->result() as $i):
                $id = $i->id;
                $item = $i->itemid;
                    $name = $i->nama;
                    $ceksize = $this->db->query("SELECT * FROM size_list where id_master = '$id'");
                    foreach($ceksize->result() as $s):
                    $size = $s->size;
                    $sz .=$size."<br>";     
                    endforeach;
                    $table .= "<tr>
                    <td style='font-family: arial,sans-serif;
                    border:1px solid black;font-size:12px'>$item</td>
                    <td style='font-family: arial, sans-serif;
                    border:1px solid black;font-size:12px'>$name</td>
                    <td style='font-family: arial, sans-serif;
                    border:1px solid black;font-size:12px'><p style='font-size:12px'>
                    $sz
                    </p>
                    </td>
                    </tr>";
                $sz='';
        endforeach;
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
		$mail->Subject = "Your Request Number Form : $id_master"; // Subjek Email
		$mail->msgHtml("
            <h3>E-Registration</h3><hr>
            <br>
            Request from : $nama
            <br>
            <br>
            Your Request Has Been Uploaded
            <br>
            </br>
            <table style='font-family: arial, sans-serif;
            border:1px solid black;font-size:12px'>
            <thead style='font-family: arial, sans-serif;
            border:1px solid black;font-size:12px'>
            <tr>
            <th style='font-family: arial, sans-serif;
            border:1px solid black;font-size:12px'>Item Id</th>
            <th style='font-family: arial, sans-serif;
            border:1px solid black;font-size:12px; width:40%'>Item Name</th>
            <th style='font-family: arial, sans-serif;
            border:1px solid black;font-size:12px;width:40%'>Size</th>
            <tr>
            </thead>
            <tbody style='font-family: arial, sans-serif;
            border:1px solid black;font-size:12px'>
            $table
            </tbody>
            </table>
            <br>
			<a href='http://192.168.20.95/e-form/'>E-form</a>  <br>
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