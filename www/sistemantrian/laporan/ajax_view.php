<?php 
require_once "../config/config.php";
require_once 'vendor/autoload.php';
use Carbon\Carbon;

setlocale(LC_TIME, 'id_ID');
$now =  Carbon::now();
$tgl = $now->format('Y-m-d');
$add = " AND a.tanggal = '$tgl' ";

$func = isset($_GET['func']) ? $_GET['func'] : '';
$dates = isset($_GET['dates']) ? mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_GET['dates']))))) : '';

$add = " AND a.tanggal = '$tgl' ";
if($dates) {
	list($tgl_awal, $tgl_akhir) = explode(' - ',$dates);
	$tgl_awal = date('Y-m-d', strtotime($tgl_awal));
	$tgl_akhir = date('Y-m-d', strtotime($tgl_akhir));
	$add = " AND a.tanggal BETWEEN '$tgl_awal' AND '$tgl_akhir' ";
}

if ($func)
	$func();

function get_jml_layanan()
{
	global $mysqli, $add;

	$result = $mysqli->query("SELECT layanan FROM layanan ORDER BY layanan");
	while ($rows = $result->fetch_assoc()) {
		$layanan[$rows['layanan']]['jml'] = 0;
	}

	$jml = 0;
	$result = $mysqli->query("SELECT id_layanan, layanan FROM antrian a WHERE (1=1) {$add} ");
	while ($rows = $result->fetch_assoc()) {
		if (isset($layanan[$rows['layanan']])) {
			$layanan[$rows['layanan']]['jml'] += 1;
			$jml++;
		}
	}

	?>
	<div class="card-header"><h5>Jumlah Layanan (<?= $jml ?>)</h5></div>
  	<div class="card-body">
    	<canvas id="jml_layanan" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
  	</div>
  	<script type="text/javascript">
	
		var chartColors = {
			red: 'rgb(255, 99, 132)',
			orange: 'rgb(255, 159, 64)',
			yellow: 'rgb(255, 205, 86)',
			green: 'rgb(75, 192, 192)',
			blue: 'rgb(54, 162, 235)',
			purple: 'rgb(153, 102, 255)',
			grey: 'rgb(201, 203, 207)'
		};
			

		$(function () {
		    var jml_layanan_data = {
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
		    })

	  });
	</script>
	<?php
	return;
}

function get_jenis_layanan()
{
	global $mysqli, $add;

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
	}

	?>
	<div class="col-sm-4">
		<div class="card">
	    	<div class="card-header"><h5>AHU</h5></div>
	      	<div class="card-body">
	        	<canvas id="jml_ahu" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
	      	</div>
	    </div>
	</div>
	<div class="col-sm-4">
		<div class="card">
	    	<div class="card-header"><h5>KI</h5></div>
	      	<div class="card-body">
	        	<canvas id="jml_ki" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
	      	</div>
	    </div>
	</div>
	<div class="col-sm-4">
		<div class="card">
	    	<div class="card-header"><h5>APOSTILE</h5></div>
	      	<div class="card-body">
	        	<canvas id="jml_imigrasi" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
	      	</div>
	    </div>
	</div>
	<div class="col-sm-4">
		<div class="card">
	    	<div class="card-header"><h5>PPID DAN INFORMASI HUKUM</h5></div>
	      	<div class="card-body">
	        	<canvas id="jml_pemasyarakat" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
	      	</div>
	    </div>
	</div>
	<div class="col-sm-4">
		<div class="card">
	    	<div class="card-header"><h5>INFORMASI KEIMIGRASIAN DAN PAS</h5></div>
	      	<div class="card-body">
	        	<canvas id="jml_ham" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
	      	</div>
	    </div>
	</div>
	<div class="col-sm-4">
		<div class="card">
	    	<div class="card-header"><h5>POJOK WANI</h5></div>
	      	<div class="card-body">
	        	<canvas id="jml_pojokwani" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
	      	</div>
	    </div>
	</div>
	<script type="text/javascript">
		function createPie(tagId, jmlData, labels, data) {
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
		$(function () {
			createPie('jml_ahu', <?= count($id_layanan['AHU']) ?>, [<?php foreach (array_keys($id_layanan['AHU']) as $value) { echo "'" . $jenis_layanan[$value] . "',"; } ?>], [<?php foreach (array_values($id_layanan['AHU']) as $value) { echo  $value . ","; } ?>]);
		    createPie('jml_ki', <?= count($id_layanan['KI']) ?>, [<?php foreach (array_keys($id_layanan['KI']) as $value) { echo "'" . $jenis_layanan[$value] . "',"; } ?>], [<?php foreach (array_values($id_layanan['KI']) as $value) { echo  $value . ","; } ?>]);
		    createPie('jml_imigrasi', <?= count($id_layanan['APOSTILE']) ?>, [<?php foreach (array_keys($id_layanan['APOSTILE']) as $value) { echo "'" . $jenis_layanan[$value] . "',"; } ?>], [<?php foreach (array_values($id_layanan['APOSTILE']) as $value) { echo  $value . ","; } ?>]);
		    createPie('jml_pemasyarakat', <?= count($id_layanan['PPIDINFORMASIHUKUM']) ?>, [<?php foreach (array_keys($id_layanan['PPIDINFORMASIHUKUM']) as $value) { echo "'" . $jenis_layanan[$value] . "',"; } ?>], [<?php foreach (array_values($id_layanan['PPIDINFORMASIHUKUM']) as $value) { echo  $value . ","; } ?>]);
		    createPie('jml_ham', <?= count($id_layanan['IMIGRASIPAS']) ?>, [<?php foreach (array_keys($id_layanan['IMIGRASIPAS']) as $value) { echo "'" . $jenis_layanan[$value] . "',"; } ?>], [<?php foreach (array_values($id_layanan['IMIGRASIPAS']) as $value) { echo  $value . ","; } ?>]);
		    createPie('jml_pojokwani', <?= count($id_layanan['POJOKWANI']) ?>, [<?php foreach (array_keys($id_layanan['POJOKWANI']) as $value) { echo "'" . $jenis_layanan[$value] . "',"; } ?>], [<?php foreach (array_values($id_layanan['POJOKWANI']) as $value) { echo  $value . ","; } ?>]);
		});
	</script>
	<?php
}

function get_report()
{
	global $mysqli, $add;

	$sql = "SELECT a.tanggal, a.nama, a.alamat, a.no_hp, a.email, a.layanan, a.id_layanan
			FROM antrian a
			WHERE 1=1 " . $add;
	$sql.= "ORDER BY ID DESC";
	$res = mysqli_query($mysqli, $sql);
	?>
	<div class="col-lg-12">
		<div class="card">
    		<div class="card-header"><h5>Report</h5></div>
	      	<div class="card-body">
	      		<button type="button" class="btn btn-info mb-3" id="excel">Download Excel</button>
				<table class="table table-bordered">
					<tr>
						<td class="text-center font-weight-bold">No.</td>
						<td class="text-center font-weight-bold">Nama</td>
						<td class="text-center font-weight-bold">Tanggal</td>
						<td class="text-center font-weight-bold">Alamat</td>
						<td class="text-center font-weight-bold">No. HP</td>
						<td class="text-center font-weight-bold">Email</td>
						<td class="text-center font-weight-bold">Layanan</td>
						<td class="text-center font-weight-bold">Jenis Layanan</td>
					</tr>
					<?php 
					$no = 1;
					while ($row = mysqli_fetch_assoc($res)) {
						$id_layanan = explode("::", $row['id_layanan']);
						$arrIdLayanan = "'" . implode("','", $id_layanan) . "'";
						$sqla = "SELECT jenis_layanan FROM layanan WHERE id_layanan IN ($arrIdLayanan)";
						$resa = mysqli_query($mysqli, $sqla);
						echo '<tr>';
						echo '<td class="text-center">' . $no++ . '.</td>';
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
	      	</div>
		</div>
	</div>
	<script>
		$('#excel').click(function(){
			var url = (window.location.search ? window.location.search + '&mode=excel' : '?mode=excel')
			window.location.href = url;
       	});
	</script>
	<?php
}
?>