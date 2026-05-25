<?php 
require_once '../../PHPMailer/src/PHPMailer.php';
require_once '../../PHPMailer/src/SMTP.php';
require_once '../../PHPMailer/src/Exception.php';
require_once "fungsi_nama_hari.php";
require_once "fungsi_tanggal.php";
require_once "config.php";

/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


// kirimEmail('dwipraja12@gmail.com','KI','2021-03-25');

function kirimEmail($email_pemohon, $tipe = '', $tanggal = '')
{
	global $passSalt, $base_url, $mysqli;

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
	$mail->Subject = 'Nomor Antrian Online KEMENKUMHAM JATIM';

	$mail->AddEmbeddedImage('logomedsos.png', 'logomedsos', 'logomedsos.png');
	$mail->AddEmbeddedImage('logobawah1.png', 'logobawah1', 'logobawah1.png');
	$mail->AddEmbeddedImage('logobawah2.jpg', 'logobawah2', 'logobawah2.jpg');
	$mail->AddEmbeddedImage('logobawah3.png', 'logobawah3', 'logobawah3.png');
	$mail->AddEmbeddedImage('tiket/images/Header-Illustration.png', 'Header-Illustration', 'tiket/images/Header-Illustration.png');

	$result2 = $mysqli->query("SELECT no_antrian FROM antrian WHERE tanggal='$tanggal' AND layanan = '$tipe' ORDER BY ID DESC LIMIT 1");
   	$data_config2  = $result2->fetch_assoc();
   	$no_antrian = $data_config2['no_antrian'];
   	$nama_hari = nama_hari($tanggal);
   	$tanggal = $nama_hari . ', ' . tgl_eng_to_ind(date('d-m-Y', strtotime($tanggal)));

	
	$html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta content="width=device-width" name="viewport"/>
<!--[if !mso]><!-->
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<!--<![endif]-->
<title></title>
<!--[if !mso]><!-->
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"/>
<!--<![endif]-->
<style type="text/css">
		body {
			margin: 0;
			padding: 0;
		}

		table,
		td,
		tr {
			vertical-align: top;
			border-collapse: collapse;
		}

		* {
			line-height: inherit;
		}

		a[x-apple-data-detectors=true] {
			color: inherit !important;
			text-decoration: none !important;
		}
	</style>
	<style id="media-query" type="text/css">
		@media (max-width: 700px) {

			.block-grid,
			.col {
				min-width: 320px !important;
				max-width: 100% !important;
				display: block !important;
			}

			.block-grid {
				width: 100% !important;
			}

			.col {
				width: 100% !important;
			}

			.col_cont {
				margin: 0 auto;
			}

			img.fullwidth,
			img.fullwidthOnMobile {
				max-width: 100% !important;
			}

			.no-stack .col {
				min-width: 0 !important;
				display: table-cell !important;
			}

			.no-stack.two-up .col {
				width: 50% !important;
			}

			.no-stack .col.num2 {
				width: 16.6% !important;
			}

			.no-stack .col.num3 {
				width: 25% !important;
			}

			.no-stack .col.num4 {
				width: 33% !important;
			}

			.no-stack .col.num5 {
				width: 41.6% !important;
			}

			.no-stack .col.num6 {
				width: 50% !important;
			}

			.no-stack .col.num7 {
				width: 58.3% !important;
			}

			.no-stack .col.num8 {
				width: 66.6% !important;
			}

			.no-stack .col.num9 {
				width: 75% !important;
			}

			.no-stack .col.num10 {
				width: 83.3% !important;
			}

			.video-block {
				max-width: none !important;
			}

			.mobile_hide {
				min-height: 0px;
				max-height: 0px;
				max-width: 0px;
				display: none;
				overflow: hidden;
				font-size: 0px;
			}

			.desktop_hide {
				display: block !important;
				max-height: none !important;
			}
		}
	</style>
	<style id="menu-media-query" type="text/css">
		@media (max-width: 700px) {
			.menu-checkbox[type="checkbox"]~.menu-links {
				display: none !important;
				padding: 5px 0;
			}

			.menu-checkbox[type="checkbox"]~.menu-links span.sep {
				display: none;
			}

			.menu-checkbox[type="checkbox"]:checked~.menu-links,
			.menu-checkbox[type="checkbox"]~.menu-trigger {
				display: block !important;
				max-width: none !important;
				max-height: none !important;
				font-size: inherit !important;
			}

			.menu-checkbox[type="checkbox"]~.menu-links>a,
			.menu-checkbox[type="checkbox"]~.menu-links>span.label {
				display: block !important;
				text-align: center;
			}

			.menu-checkbox[type="checkbox"]:checked~.menu-trigger .menu-close {
				display: block !important;
			}

			.menu-checkbox[type="checkbox"]:checked~.menu-trigger .menu-open {
				display: none !important;
			}

			#menuhrylo9~div label {
				border-radius: 0% !important;
			}

			#menuhrylo9:checked~.menu-links {
				background-color: #000000 !important;
			}

			#menuhrylo9:checked~.menu-links a {
				color: #ffffff !important;
			}

			#menuhrylo9:checked~.menu-links span {
				color: #ffffff !important;
			}
		}
	</style>
	<style id="icon-media-query" type="text/css">
			@media (max-width: 700px) {
				.icons-inner {
					text-align: center;
				}

				.icons-inner td {
					margin: 0 auto;
				}
			}
		</style>
	</head>
	<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%;>
	<!--[if IE]><div class="ie-browser"><![endif]-->
	<table bgcolor="#ffffff" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; width: 100%;" valign="top" width="100%">
	<tbody>
	<tr style="vertical-align: top;" valign="top">
	<td style="word-break: break-word; vertical-align: top;" valign="top">
	<div style="background-color:#ffffff;">
	<div class="block-grid three-up" style="min-width: 320px; max-width: 680px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: transparent;">
	<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
	<div class="col num4" style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 324px; width: 226px;">
	<div class="col_cont" style="width:100% !important;">
	<!--[if (!mso)&(!IE)]><!-->
	<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:25px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
	<!--<![endif]-->
	<div align="center" class="img-container center fixedwidth" style="padding-right: 0px;padding-left: 0px;">
	<img align="center" alt="Alternate text" border="0" class="center fixedwidth" src="cid:logomedsos" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 85px;" title="Alternate text" width="113"/>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<div>
	<div class="block-grid mixed-two-up" style="min-width: 320px; max-width: 680px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: transparent;">
	<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
	<div class="col num5" style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 280px; width: 283px;">
	<div class="col_cont" style="width:100% !important;">
	<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:30px; padding-bottom:30px; padding-right: 0px; padding-left: 10px;">
	<div style="color:#ff5c5c;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;line-height:1.2;padding-top:5px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
	<div class="txtTinyMce-wrapper" style="line-height: 1.2; font-size: 12px; color: #ff5c5c; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; mso-line-height-alt: 14px;">
	<p style="font-size: 72px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 86px; margin: 0;"><span style="font-size: 70px; padding-top: 20px;"><strong>Antrian '.$no_antrian.'</strong></span></p>
	</div>
	</div>
	<div style="color:#393d47;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;line-height:1.2;padding-top:0px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
	<div class="txtTinyMce-wrapper" style="line-height: 1.2; font-size: 12px; color: #393d47; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; mso-line-height-alt: 14px;">
	<p style="font-size: 14px; line-height: 1.2; word-break: break-word; text-align: right; mso-line-height-alt: 17px; margin: 0;"><strong><span style="font-size: 24px;">'.$tanggal.'</span></strong></p>
	</div>
	</div>
	</div>
	</div>
	</div>
	<div class="col num7" style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 392px; width: 396px;">
	<div class="col_cont" style="width:100% !important;">
	<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:60px; padding-bottom:60px; padding-right: 0px; padding-left: 0px;">
	<div align="center" class="img-container center autowidth" style="padding-right: 0px;padding-left: 0px;">
	<img align="center" alt="Hero Image" border="0" class="center autowidth" src="cid:Header-Illustration" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 180px; display: block;" title="Hero Image" width="325"/>
	</div>
	</div>
	</div>
	</div>
	</div>
	<div style="text-align: center;">
	<img src="cid:logobawah1" style="max-width: 20%; margin-right: 30px">
	<img src="cid:logobawah2" style="max-width: 20%; margin-right: 30px">
	<img src="cid:logobawah3" style="max-width: 20%; margin-right: 30px">
	</div>
	</div>
	</div>
	</div>
	</td>
	</tr>
	</tbody>
	</table>
	</body>
	</html>';
	

	$mail->msgHTML($html);
	if (!$mail->send()) {
	    return 'Mailer Error: ' . $mail->ErrorInfo;
	}
}
?>