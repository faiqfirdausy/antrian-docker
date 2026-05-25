<div class="page-content center">
	<div class="page-header">
		<div style="margin-top:10px;margin-bottom:5px" class="row">
			<div class="col-xs-12">
				<img src="../petugas/assets/images/logo-instansi/<?php echo $logo; ?>" alt="Logo" height="100">
				<h1 style="color:#fff;font-size:30px"><strong><?php echo strtoupper($nama_instansi); ?></strong></h1>
			</div>
		</div>
	</div>

	<div class="alert alert-dark-blue">
		<i style="margin-right:5px" class="ace-icon fa fa-info-circle"></i> Selamat Datang di <?php echo $nama_instansi; ?>. Silahkan tekan tombol dibawah ini untuk mendapatkan nomor antrian.
	</div>

	<br>
	<br>
	<br>

	<div class="row">
		<div class="col-xs-12">
			<div class="row">
				<div class="col-md-4">
					<h1 style="color: white; font-size: 40px;">
						<div id="load_antrian"></div>
					</h1>
					<br>
					<div class="text-center">
						<button id="simpan_antrian" class="btn btn-app btn-primary no-radius" style="font-size: 20px; padding: 20px; width: 500px;">
							<i class="ace-icon fa fa-user-plus"></i> Nomor Antrian KI
						</button>
					</div>

				</div>
				<div class="col-md-4">
					<h1 style="color: white; font-size: 40px;">
						<div id="load_antrian2"></div>
					</h1>
					<br>
					<div class="text-center">
						<button id="simpan_antrian2" class="btn btn-app btn-primary no-radius" style="font-size: 20px; padding: 20px; width: 500px;">
							<i class="ace-icon fa fa-user-plus"></i> Nomor Antrian AHU
						</button>
					</div>
					<br>
				</div>

				<div class="col-md-4">
					<h1 style="color: white; font-size: 40px;">
						<div id="load_antrian3"></div>
					</h1>
					<br>
					<div class="text-center">
						<button id="simpan_antrian3" class="btn btn-app btn-primary no-radius" style="font-size: 20px; padding: 20px; width: 500px;">
							<i class="ace-icon fa fa-user-plus"></i> Nomor Antrian Yankomas
						</button>
					</div>
				</div>
				<br>
				<div class="col-md-12" style="padding-top: 100px;">
					<button class="btn btn-danger" style="font-size: 35px; padding: 20px; width: 700px; " data-toggle="modal" data-target="#modal-survey">
						<i class="ace-icon fa fa-pencil"></i> Isi Survey Kepuasanaa 
					</button>
				</div>
				<div class="col-md-12" style="padding-top: 50px;">

					<a href="dashboard" class="btn btn-warning"  style="font-size: 25px; padding: 20px; width: 500px; "><i style="margin-left:5px" class="fa fa-rocket"></i> Profil Kanwil</a>

				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade in" id="modal-survey" style="padding-right: 16px;">
		<div class="modal-dialog" style="width: 1200px;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h1 class="modal-title">Bagaimana Pelayanan Kami?</h1>
				</div>
				<div class="modal-body">
					<div>
						<a href=""><i class="fa fa-fw fa-smile-o" style="font-size: 300px;"></i></a>
						<a href=""><i class="fa fa-fw fa-meh-o" style="font-size: 300px;"></i></a>
						<a href=""><i class="fa fa-fw fa-frown-o" style="font-size: 300px;"></i></a>
					</div>

				</div>
				<div class="modal-footer">
					<span style="font-size: 17px">Kementrian Hukum dan HAM &nbsp;&nbsp;&nbsp;<i class="fa fa-heart" style="color: red"></i>&nbsp;&nbsp;&nbsp; Republik Indonesia</span>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
</div>




<script type="text/javascript">
	$(document).ready(function(){ 
		$('#load_antrian').load('pages/beranda/getAntrian.php');

	// antrian umum 
	$("#simpan_antrian").on('click',function(){ 
		$.ajax({ 
			url   : "pages/beranda/proses.php",
			type  : "POST",
			cache : false,
			success: function(msg){ 
				if(msg=="Sukses"){
					printPage('pages/beranda/print2.php');
					$('#load_antrian').load('pages/beranda/getAntrian.php').fadeIn("slow");

					$.ajax({
						url : "pages/beranda/print.php",
						type: "POST",
						success: function(data, textStatus, jqXHR)
						{
	                        // alert('Silahkan ambil nomor antrian Anda')
	                        $.gritter.add({
								// (string | mandatory) the heading of the notification
								title: 'Terima Kasih..',
								// (string | mandatory) the text inside the notification
								text: 'Silahkan Ambil Nomor Antrian Anda.',
								class_name: 'gritter-warning' + (!$('#simpan_antrian').get(0).checked ? ' gritter-light' : '')
							});

	                        return false;
	                    }
	                });
				}
			}
		}); 
	});
}); 

	$(document).ready(function(){ 
		$('#load_antrian2').load('pages/beranda/getAntrianAhu.php');

	// antrian umum 
	$("#simpan_antrian2").on('click',function(){ 
		$.ajax({ 
			url   : "pages/beranda/prosesAhu.php",
			type  : "POST",
			cache : false,
			success: function(msg){ 
				if(msg=="Sukses"){ 
					printPage('pages/beranda/print3.php');

					$('#load_antrian2').load('pages/beranda/getAntrianAhu.php').fadeIn("slow");

					$.ajax({
						url : "pages/beranda/print.php",
						type: "POST",
						success: function(data, textStatus, jqXHR)
						{
	                        // alert('Silahkan ambil nomor antrian Anda')
	                        $.gritter.add({
								// (string | mandatory) the heading of the notification
								title: 'Terima Kasih..',
								// (string | mandatory) the text inside the notification
								text: 'Silahkan Ambil Nomor Antrian Anda.',
								class_name: 'gritter-warning' + (!$('#simpan_antrian').get(0).checked ? ' gritter-light' : '')
							});

	                        return false;
	                    }
	                });
				}
			}
		}); 
	});
}); 

	$(document).ready(function(){ 
		$('#load_antrian3').load('pages/beranda/getAntrianKewarganegaraan.php');

	// antrian umum 
	$("#simpan_antrian3").on('click',function(){ 
		$.ajax({ 
			url   : "pages/beranda/prosesKewarganegaraan.php",
			type  : "POST",
			cache : false,
			success: function(msg){ 
				if(msg=="Sukses"){ 
					printPage('pages/beranda/print4.php');

					$('#load_antrian3').load('pages/beranda/getAntrianKewarganegaraan.php').fadeIn("slow");

					$.ajax({
						url : "pages/beranda/print.php",
						type: "POST",
						success: function(data, textStatus, jqXHR)
						{
	                        // alert('Silahkan ambil nomor antrian Anda')
	                        $.gritter.add({
								// (string | mandatory) the heading of the notification
								title: 'Terima Kasih..',
								// (string | mandatory) the text inside the notification
								text: 'Silahkan Ambil Nomor Antrian Anda.',
								class_name: 'gritter-warning' + (!$('#simpan_antrian').get(0).checked ? ' gritter-light' : '')
							});

	                        return false;
	                    }
	                });
				}
			}
		}); 
	});
});

	function closePrint () {
		document.body.removeChild(this.__container__);
	}

	function setPrint () {
		this.contentWindow.__container__ = this;
		this.contentWindow.onbeforeunload = closePrint;
		this.contentWindow.onafterprint = closePrint;
  this.contentWindow.focus(); // Required for IE
  this.contentWindow.print();
}

function printPage (sURL) {
	var oHiddFrame = document.createElement("iframe");
	oHiddFrame.onload = setPrint;
	oHiddFrame.style.position = "fixed";
	oHiddFrame.style.right = "0";
	oHiddFrame.style.bottom = "0";
	oHiddFrame.style.width = "0";
	oHiddFrame.style.height = "0";
	oHiddFrame.style.border = "0";
	oHiddFrame.src = sURL;
	document.body.appendChild(oHiddFrame);
}

</script>
