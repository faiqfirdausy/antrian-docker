<?php 
require_once '../../../pengunjung/PHPMailer/src/PHPMailer.php';
require_once '../../../pengunjung/PHPMailer/src/SMTP.php';
require_once '../../../pengunjung/PHPMailer/src/Exception.php';
require_once "../../../config/config.php";

/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' )) {
	$email_pemohon = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['email'])))));

	$email_pengirim = 'antrian@kumhamjatim.com';
	$pwd_pengirim = 'antrian123';

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->IsHTML(true);
	$mail->SMTPDebug = SMTP::DEBUG_OFF;
	// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->Host = 'srv127.niagahoster.com';
	$mail->Port = 587;
	// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	$mail->SMTPAuth = true;
	$mail->Username = $email_pengirim;
	$mail->Password = $pwd_pengirim;
	$mail->setFrom($email_pengirim, 'KEMENKUMHAM JATIM');
	$mail->addAddress($email_pemohon);
	$mail->Subject = 'Survei Evaluasi Pelayanan KEMENKUMHAM JATIM';
	$html = '
			Terima Kasih telah menggunakan layanan kami.<br><br>
			Sebagai upaya kami evaluasi pelayanan, mohon sekiranya mengisi kuesioner kepuasan layanan pada link di bawah ini..<br><br>
			https://survei.balitbangham.go.id/ly/pOsiV2mL
			';
	$mail->msgHTML($html);
	if ($mail->send()) {
	    echo 'sukses';
	}
} else {
	echo '<script>window.location="../../error-404.html"</script>';
}
?>