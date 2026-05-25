<!-- <h1>beranda antrian</h1> -->
<div class="page-content">
	<div style="margin-top:55px;" class="row">
		<div class="col-xs-12">
		  	<div class="row center">
			    <div id="load_antrian" class="col-lg-6 col-md-6 col-xs-6"></div>

			    <div class="col-lg-6 col-md-6 col-xs-6">
			    	<video id="myvideo" width="1000" height="500" autoplay controls>
  					<source src="PROFILE WBBM KANWIL KUMHAM JATIM.mp4" type="video/mp4">
					</video>
			    </div>
		  	</div>
		</div>
	</div><!-- /.row -->
	
	<hr>

	<div class="row">
		<div class="col-xs-12">
		  	<div class="row center">
			    <div class="col-lg-2 col-md-2 col-xs-12">
			      	<button id="simpan_pidana" class="btn btn-app btn-pink">
				        <div>Antrian</div>
		        		<div style="font-size:100px;margin-top:35px;margin-bottom:35px" id="load_loket1"></div>
				        <div style="border-bottom:1px solid #fff"></div>
		        		<div>LOKET 1</div>
			      	</button>
			    </div>

			    <div class="col-lg-2 col-md-2 col-xs-12">
			      	<button id="simpan_perdata" class="btn btn-app btn-warning">
				        <div>Antrian</div>
		        		<div style="font-size:100px;margin-top:35px;margin-bottom:35px" id="load_loket2"></div>
				        <div style="border-bottom:1px solid #fff"></div>
		        		<div>LOKET 2</div>
			      	</button>
			    </div>

			    <div class="col-lg-2 col-md-2 col-xs-12">
			      	<button id="simpan_tipikor" class="btn btn-app btn-danger">
			        	<div>Antrian</div>
		        		<div style="font-size:100px;margin-top:35px;margin-bottom:35px" id="load_loket3"></div>
				        <div style="border-bottom:1px solid #fff"></div>
		        		<div>LOKET 3</div>
			      	</button>
			    </div>

			    <div class="col-lg-2 col-md-2 col-xs-12">
			      	<button id="simpan_tipikor" class="btn btn-app btn-success">
			        	<div>Antrian</div>
		        		<div style="font-size:100px;margin-top:35px;margin-bottom:35px" id="load_loket4"></div>
				        <div style="border-bottom:1px solid #fff"></div>
		        		<div>LOKET 4</div>
			      	</button>
			    </div>

			    <div class="col-lg-2 col-md-2 col-xs-12">
			      	<button id="simpan_tipikor" class="btn btn-app btn-purple">
			        	<div>Antrian</div>
		        		<div style="font-size:100px;margin-top:35px;margin-bottom:35px" id="load_loket5"></div>
				        <div style="border-bottom:1px solid #fff"></div>
		        		<div>LOKET 5</div>
			      	</button>
			    </div>

			    <div class="col-lg-2 col-md-2 col-xs-12">
			      	<button id="simpan_tipikor" class="btn btn-app btn-primary">
			        	<div>Antrian</div>
		        		<div style="font-size:100px;margin-top:35px;margin-bottom:35px" id="load_loket6"></div>
				        <div style="border-bottom:1px solid #fff"></div>
		        		<div>LOKET 6</div>
			      	</button>
			    </div>

		  	</div>
		</div>
	</div><!-- /.row -->
</div>

<script type="text/javascript">
$(document).ready(function(){ 
    $('#load_antrian').load('pages/beranda/getAntrian.php');
    $('#load_loket1').load('pages/beranda/getLoket1.php');
    $('#load_loket2').load('pages/beranda/getLoket2.php');
    $('#load_loket3').load('pages/beranda/getLoket3.php');
    $('#load_loket4').load('pages/beranda/getLoket4.php');
    $('#load_loket5').load('pages/beranda/getLoket5.php');
    $('#load_loket6').load('pages/beranda/getLoket6.php');

    setInterval( function () {
    	$('#load_antrian').load('pages/beranda/getAntrian.php');
	    $('#load_loket1').load('pages/beranda/getLoket1.php');
	    $('#load_loket2').load('pages/beranda/getLoket2.php');
	    $('#load_loket3').load('pages/beranda/getLoket3.php');
	    $('#load_loket4').load('pages/beranda/getLoket4.php');
	    $('#load_loket5').load('pages/beranda/getLoket5.php');
	    $('#load_loket6').load('pages/beranda/getLoket6.php');

       	table.ajax.reload( null, false );
    }, 1000); // refresh setiap 5000 milliseconds
}); 

var myvid = document.getElementById('myvideo');
var myvids = [
  "1.mp4",
  "2.mp4",
  "3.mp4",
  "4.mp4",
  "5.mp4",
  "6.mp4",
  "7.mp4",
  "8.mp4",
  "9.mp4",
  "10.mp4",
  "11.mp4",
  "12.mp4",
  "13.mp4",
  "14.mp4",
  "15.mp4",
  "16.mp4",
  "17.mp4",
  "18.mp4"
  ];
var activeVideo = 0;

myvid.addEventListener('ended', function(e) {
  // update the active video index
  activeVideo = (++activeVideo) % myvids.length;

  // update the video source and play
  myvid.src = myvids[activeVideo];
  myvid.play();
});
</script>