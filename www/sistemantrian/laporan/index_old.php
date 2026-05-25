<?php 
require_once "../config/config.php";
require_once 'vendor/autoload.php';
use Carbon\Carbon;

setlocale(LC_TIME, 'id_ID');
$now =  Carbon::now();
// $tgl = $now->format('Y-m-d');

/*$layanan = $kepuasan = $id_layanan = $jenis_layanan = array();
$kepuasanText = array("Sangat Tidak Puas","Tidak Puas","Biasa Ajah!","Puas","Sangat Puas");*/
$namaBulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

/*FILTER*/
$tahun = isset($_GET['tahun']) ? mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_GET['tahun']))))) : '';
$bulan = isset($_GET['bulan']) ? $_GET['bulan'] : '';

$base = explode('?', $_SERVER['REQUEST_URI'], 2)[0];

/*$add = " AND a.tanggal = '$tgl' ";
if($tahun) {
	$add = " AND DATE_FORMAT(a.tanggal,'%Y') = '$tahun'";
	if ($bulan) {
		$add = " AND (";
		foreach ($bulan as $vbulan) {
			$tgl_awal = $tahun.'-'.($vbulan+1).'-01';
			$tgl_akhir = date("Y-m-t", strtotime($tgl_awal));
			$add.= " a.tanggal BETWEEN '" . $tgl_awal . "' AND '" . $tgl_akhir . "' OR";
		}
		$add = rtrim($add,'OR');
		$add.= ")";
	}
}

$result = $mysqli->query("SELECT layanan FROM layanan ORDER BY layanan");
while ($rows = $result->fetch_assoc()) {
	$layanan[$rows['layanan']]['jml'] = 0;
}

$sql = "SELECT IFNULL(SUM(n.nilai),0) AS nilai, IFNULL(COUNT(n.nilai),0) AS jml
		FROM antrian a LEFT JOIN nilai_survey n ON n.id_antrian = a.ID
		WHERE (1=1) {$add}
		ORDER BY layanan";
$result = $mysqli->query($sql);
$rows = $result->fetch_assoc();
if ($rows['nilai'] > 0)
	$kepuasan = round($rows['nilai'] / $rows['jml']);

$result = $mysqli->query("SELECT id_layanan, layanan, jenis_layanan FROM layanan ORDER BY id_layanan");
while ($rows = $result->fetch_assoc()) {
	$id_layanan[$rows['layanan']][$rows['id_layanan']] = 0;
	$jenis_layanan[$rows['id_layanan']] = $rows['jenis_layanan'];
}

$jml = 0;
$result = $mysqli->query("SELECT id_layanan, layanan FROM antrian a WHERE (1=1) {$add} ");
while ($rows = $result->fetch_assoc()) {
	$exp = explode('::', $rows['id_layanan']);
	foreach ($exp as $val) {
		if (isset($id_layanan[$rows['layanan']][$val]))
			$id_layanan[$rows['layanan']][$val] += 1;
	}
	if (isset($layanan[$rows['layanan']])) {
		$layanan[$rows['layanan']]['jml'] += 1;
		$jml++;
	}
}*/


?>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Sistem Antrian</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	    <meta name="author" content="Dian Arif Rachman, S.Kom, MTA" />

		<meta name="description" content="top menu &amp; navigation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		 <!-- favicon -->
		<link rel="shortcut icon" href="assets/img/favicon.png">

		<!--fonts-->
		<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="node_modules/chart.js/dist/Chart.css" />
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
							    <div class="card" id="content_jml_layanan">
							    	<!--div class="card-header"><h5>Jumlah Layanan (<?= $jml ?>)</h5></div>
							      	<div class="card-body">
							        	<canvas id="jml_layanan" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
							      	</div-->
							    </div>
							  </div>
							  <div class="col-sm-4">
							    <div class="card" id="content_kepuasan_masyarakat">
							    	<!--div class="card-header"><h5>Kepuasan Masyarakat</h5></div>
							      	<div class="card-body text-center">
							      		<?php if ($kepuasan): ?>
							      		<img src="../pengunjung/senyum<?= $kepuasan ?>.png" style="max-width: 58%;" alt="Kepuasan Masyarakat">
							      		<h3><?=  $kepuasanText[$kepuasan-1]?></h3>
							      		<?php endif ?>
							      	</div-->
							    </div>
							  </div>
							  <div class="col-sm-4">
							    <div class="card">
							    	<form action="" method="GET">
							    		<div class="card-header"><h5>Filter</h5></div>
								      	<div class="card-body">
									        <select name="tahun" id="tahun" class="form-control">
									        	<?php 
									        		for ($i=date('Y'); $i > date('Y')-5; $i--) { 
									        			echo '<option value="' . $i . '" ' . ($tahun ? ($tahun == $i ? 'selected' : '') : '') . '>' . $i . '</option>';
									        		}
									        	?>
									        </select>

									        <?php 
									        	for ($i=0; $i < count($namaBulan); $i++) { 
									        		echo '<input type="checkbox" name="bulan[]" value="' . $i . '" ' . ($bulan ? (in_array($i, array_values($bulan)) ? 'checked' : '') : '') . '> ' . $namaBulan[$i] . ' ';
									        	}
									        ?>
									    </div>
									    <div class="card-footer">
									        <input type="submit" class="btn btn-sm btn-primary" value="Cari">
									        <a href="<?= $base ?>" class="btn btn-sm btn-info">Reset</a>
									    </div>
							    	</form>
							    </div>
							  </div>
							</div><br>
							<div class="row" id="content_jenis_layanan">
								<!-- <div class="col-sm-3">
									<div class="card">
								    	<div class="card-header"><h5>AHU</h5></div>
								      	<div class="card-body">
								        	<canvas id="jml_ahu" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
								      	</div>
								    </div>
								</div>
								<div class="col-sm-3">
									<div class="card">
								    	<div class="card-header"><h5>KI</h5></div>
								      	<div class="card-body">
								        	<canvas id="jml_ki" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
								      	</div>
								    </div>
								</div>
								<div class="col-sm-3">
									<div class="card">
								    	<div class="card-header"><h5>IMIGRASI</h5></div>
								      	<div class="card-body">
								        	<canvas id="jml_imigrasi" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
								      	</div>
								    </div>
								</div>
								<div class="col-sm-3">
									<div class="card">
								    	<div class="card-header"><h5>PEMASYARAKATAN</h5></div>
								      	<div class="card-body">
								        	<canvas id="jml_pemasyarakat" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
								      	</div>
								    </div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="assets/js/jquery-3.5.1.js"></script>
		<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
		<script src="node_modules/chart.js/dist/Chart.js"></script>
		<script src="node_modules/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>
		<script type="text/javascript">
			/*function createPie(tagId, jmlData, labels, data) {
				var tagId = $('#'+tagId).get(0).getContext('2d');

			    var chartOption = {
					responsive              : true,
					maintainAspectRatio     : false,
					datasetFill             : false,
					legend: {
						display: true,
						position: 'bottom'
					},
					plugins: {
					  	labels: {
						  	render: 'value',
						  	fontFamily: "Helvetica Neue, Helvetica, Arial, sans-serif",
						  	fontSize: 16,
						  	fontColor: '#fff',
						  	textShadow: true,
						  	shadowBlur: 2,
					  	}
					}
			    }
			    _randomColor = randomColor(jmlData);
			    var dataPie = {
			      	labels:  labels,
			        datasets: [{
			        data: data,
			        backgroundColor: _randomColor,
			        borderWidth: 1
			        }]
		    	}

		    	new Chart(tagId, {
			      type: 'pie',
			      data: dataPie,
			      options: chartOption,
			    })
			}

			function randomColor(dataLength = 5) {
				var graphColors = [];
				var i = 0;
				while (i <= dataLength) {
				    var randomR = Math.floor((Math.random() * 130) + 100);
				    var randomG = Math.floor((Math.random() * 130) + 100);
				    var randomB = Math.floor((Math.random() * 130) + 100);
				  
				    var graphBackground = "rgb(" 
				            + randomR + ", " 
				            + randomG + ", " 
				            + randomB + ")";
				    graphColors.push(graphBackground);
				    
				  i++;
				};
				return graphColors;
			}

			var chartColors = {
				red: 'rgb(255, 99, 132)',
				orange: 'rgb(255, 159, 64)',
				yellow: 'rgb(255, 205, 86)',
				green: 'rgb(75, 192, 192)',
				blue: 'rgb(54, 162, 235)',
				purple: 'rgb(153, 102, 255)',
				grey: 'rgb(201, 203, 207)'
			};*/
			

			$(function () {

			    /*var jml_layanan_data = {
			      	labels: [ <?php foreach (array_keys($layanan) as $value) { echo "'" . $value . "',"; } ?> ],
			        datasets: [{
			        data: [ <?php foreach (array_values($layanan) as $value) { echo  $value['jml'] . ","; } ?> ],
			        backgroundColor: [
									window.chartColors.red,
									window.chartColors.blue,
									window.chartColors.yellow,
									window.chartColors.green,
									window.chartColors.purple,
									window.chartColors.orange,
			          ],
			        borderWidth: 1
			        }]
		    	}

			    var jml_layanan = $('#jml_layanan').get(0).getContext('2d');

			    var jml_layanan_option = {
			      responsive              : true,
			      maintainAspectRatio     : false,
			      datasetFill             : false,
			      legend: {
			        display: true,
			        position: 'bottom'
			      },
			      plugins: {
				      labels: {
				      	render: 'value',
				      	fontFamily: "Helvetica Neue, Helvetica, Arial, sans-serif",
				      	fontSize: 16,
				      	fontColor: '#fff',
				      	textShadow: true,
				      	shadowBlur: 2,
				      }
			      }
			    }

			    new Chart(jml_layanan, {
			      type: 'pie',
			      data: jml_layanan_data,
			      options: jml_layanan_option,
			    })*/

			    var url = (window.location.search ? window.location.search : '?')
			    $('#content_jml_layanan').load('ajax_view.php' + url +'&func=get_jml_layanan').fadeIn("slow");
	           	$('#content_kepuasan_masyarakat').load('ajax_view.php' + url +'&func=get_kepuasan_masyarakat').fadeIn("slow");
	           	$('#content_jenis_layanan').load('ajax_view.php' + url +'&func=get_jenis_layanan').fadeIn("slow");
	           	if (url == '?') {
				    setInterval( function () {
			           $('#content_jml_layanan').load('ajax_view.php' + url +'&func=get_jml_layanan').fadeIn("slow");
			           $('#content_kepuasan_masyarakat').load('ajax_view.php' + url +'&func=get_kepuasan_masyarakat').fadeIn("slow");
		           		$('#content_jenis_layanan').load('ajax_view.php' + url +'&func=get_jenis_layanan').fadeIn("slow");
			        }, 10000); // refresh setiap 10 detik
	           	}

			    /*createPie('jml_ahu', <?= count($id_layanan['AHU']) ?>, [<?php foreach (array_keys($id_layanan['AHU']) as $value) { echo "'" . $jenis_layanan[$value] . "',"; } ?>], [<?php foreach (array_values($id_layanan['AHU']) as $value) { echo  $value . ","; } ?>]);
			    createPie('jml_ki', <?= count($id_layanan['KI']) ?>, [<?php foreach (array_keys($id_layanan['KI']) as $value) { echo "'" . $jenis_layanan[$value] . "',"; } ?>], [<?php foreach (array_values($id_layanan['KI']) as $value) { echo  $value . ","; } ?>]);
			    createPie('jml_imigrasi', <?= count($id_layanan['IMIGRASI']) ?>, [<?php foreach (array_keys($id_layanan['IMIGRASI']) as $value) { echo "'" . $jenis_layanan[$value] . "',"; } ?>], [<?php foreach (array_values($id_layanan['IMIGRASI']) as $value) { echo  $value . ","; } ?>]);
			    createPie('jml_pemasyarakat', <?= count($id_layanan['MASYARAKAT']) ?>, [<?php foreach (array_keys($id_layanan['MASYARAKAT']) as $value) { echo "'" . $jenis_layanan[$value] . "',"; } ?>], [<?php foreach (array_values($id_layanan['MASYARAKAT']) as $value) { echo  $value . ","; } ?>]);*/

		  });
		</script>
	</body>
</html>