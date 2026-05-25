<?php 
require_once "../config/config.php";
require_once 'vendor/autoload.php';
use Carbon\Carbon;

setlocale(LC_TIME, 'id_ID');
$now =  Carbon::now();
$namaBulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

/*FILTER*/
$dates = isset($_GET['dates']) ? mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_GET['dates']))))) : '';

$base = explode('?', $_SERVER['REQUEST_URI'], 2)[0];

if (!empty($_GET['mode'])) {
	if ($_GET['mode'] === 'excel') {
		header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=report.xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

		$tgl = $now->format('Y-m-d');
		$add = " AND a.tanggal = '$tgl' ";
		if($dates) {
			list($tgl_awal, $tgl_akhir) = explode(' - ',$dates);
			$tgl_awal = date('Y-m-d', strtotime($tgl_awal));
			$tgl_akhir = date('Y-m-d', strtotime($tgl_akhir));
			$add = " AND a.tanggal BETWEEN '$tgl_awal' AND '$tgl_akhir' ";
		}

		$sql = "SELECT a.tanggal, a.nama, a.alamat, a.no_hp, a.email, a.layanan, a.id_layanan
				FROM antrian a
				WHERE 1=1 " . $add;
		$sql.= "ORDER BY ID DESC";
		$res = mysqli_query($mysqli, $sql);
		?>
		<table border="1">
			<tr>
				<td>No.</td>
				<td>Nama</td>
				<td>Tanggal</td>
				<td>Alamat</td>
				<td>No. HP</td>
				<td>Email</td>
				<td>Layanan</td>
				<td>Jenis Layanan</td>
			</tr>
			<?php 
			$no = 1;
			while ($row = mysqli_fetch_assoc($res)) {
				$id_layanan = explode("::", $row['id_layanan']);
				$arrIdLayanan = "'" . implode("','", $id_layanan) . "'";
				$sqla = "SELECT jenis_layanan FROM layanan WHERE id_layanan IN ($arrIdLayanan)";
				$resa = mysqli_query($mysqli, $sqla);
				echo '<tr>';
				echo '<td>' . $no++ . '.</td>';
				echo '<td>' . $row['nama'] . '</td>';
				echo '<td>' . date('d-m-Y', strtotime($row['tanggal'])) . '</td>';
				echo '<td>' . $row['alamat'] . '</td>';
				echo '<td>' . $row['no_hp'] . '</td>';
				echo '<td>' . $row['email'] . '</td>';
				echo '<td>' . $row['layanan'] . '</td>';
				echo '<td>';
				while ($rowa = mysqli_fetch_assoc($resa)) {
					echo $rowa['jenis_layanan'] . ', ';
				}
				echo '</td>';
				echo '</tr>';
			}
			?>
		</table>
		<?php
		exit;
	}
}

?>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Sistem Antrian</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	    <meta name="author" content="dpa" />

		<meta name="description" content="top menu &amp; navigation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		 <!-- favicon -->
		<link rel="shortcut icon" href="assets/img/favicon.png">

		<!--fonts-->
		<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="node_modules/chart.js/dist/Chart.css" />
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	</head>

	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header"><h3><?= $now->formatLocalized('%A, %d %B %Y');  ?></h3></div>
					  	<div class="card-body">
					  		<div class="row">
							  	<div class="col-sm-4">
							    	<div class="card" id="content_jml_layanan"></div>
							  	</div>
							  	<div class="col-sm-4"></div>
							  	<div class="col-sm-4">
								    <div class="card">
								    	<form action="" method="GET">
								    		<div class="card-header"><h5>Filter</h5></div>
									      	<div class="card-body">
									      		<input type="text" name="dates" class="form-control" value="<?= $dates ? $dates : '' ?>"/>
										    </div>
										    <div class="card-footer">
										        <input type="submit" class="btn btn-sm btn-primary" value="Cari">
										        <a href="<?= $base ?>" class="btn btn-sm btn-info">Reset</a>
										    </div>
								    	</form>
								    </div>
							  	</div>
							</div><br>
							<div class="row" id="content_jenis_layanan"></div><br>
							<div class="row" id="content_report"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="assets/js/jquery-3.5.1.js"></script>
		<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
		<script src="node_modules/chart.js/dist/Chart.js"></script>
		<script src="node_modules/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>
		<script src="node_modules/moment/moment.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
		<script type="text/javascript">
			$(function () {
			    var url = (window.location.search ? window.location.search : '?')
			    $('#content_jml_layanan').load('ajax_view.php' + url +'&func=get_jml_layanan').fadeIn("slow");
	           	$('#content_jenis_layanan').load('ajax_view.php' + url +'&func=get_jenis_layanan').fadeIn("slow");
	           	$('#content_report').load('ajax_view.php' + url +'&func=get_report').fadeIn("slow");
	           	if (url == '?') {
				    setInterval( function () {
			           	$('#content_jml_layanan').load('ajax_view.php' + url +'&func=get_jml_layanan').fadeIn("slow");
		           		$('#content_jenis_layanan').load('ajax_view.php' + url +'&func=get_jenis_layanan').fadeIn("slow");
		           		$('#content_report').load('ajax_view.php' + url +'&func=get_report').fadeIn("slow");
			        }, 10000); // refresh setiap 10 detik
	           	}

	           	$('input[name="dates"]').daterangepicker({
	           		locale: {
				    	format: 'DD-MM-YYYY'
				    }
	           	});
	           	$('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
				    $(this).val(picker.startDate.format('DD-MM-YYYY') + ' - ' + picker.endDate.format('DD-MM-YYYY'));
				});
		  });
		</script>

	</body>
</html>