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
}