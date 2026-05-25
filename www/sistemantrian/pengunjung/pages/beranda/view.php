<style>
	img:hover {
		box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
	}

	body {
		font-family: Arial;
		height: 100%;
	}

	/* Style the tab */
	.tab {
		overflow: hidden;
		border: 1px solid #ccc;
		background-color: #f1f1f1s;
	}

	/* Style the buttons inside the tab */
	.tab button {
		background-color: inherit;
		float: left;
		border: none;
		outline: none;
		cursor: pointer;
		padding: 14px 16px;
		transition: 0.3s;
		font-size: 170px;
	}

	/* Change background color of buttons on hover */
	.tab button:hover {
		background-color: #ddd;
	}

	/* Create an active/current tablink class */
	.tab button.active {
		background-color: #ccc;
	}

	/* Style the tab content */
	.tabcontent {
		display: none;
		padding: 6px 12px;
		border: 1px solid #ccc;
		border-top: none;
	}

	.background-antrian {
		background: linear-gradient(rgba(21 37 97), rgba(0, 0, 0, 0.8)), url("../pengunjung/assets/img/<?php echo $logo; ?>");
		background-size: 150px;
	}

	.button-antrian-layout {
		display: flex;
		flex-direction: row;
		align-items: end;
		justify-content: center;
		flex-wrap: wrap;
	}

	.section-daftar-btn {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		flex-wrap: wrap;
	}

	.section-daftar-btn .btn-text {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
	}

	button#simpan_antrian {
		background: url("../pengunjung/assets/img/icon-antrian/1.png");
		background-size: 250px;
		background-position: center;
	}

	button#simpan_antrian:hover {
		filter: brightness(150%);
		cursor: pointer;
	}

	button#simpan_antrian2 {
		background: url("../pengunjung/assets/img/icon-antrian/2.png");
		background-size: 250px;
		background-position: center;
	}

	button#simpan_antrian2:hover {
		filter: brightness(150%);
		cursor: pointer;
	}

	button#simpan_antrian3 {
		background: url("../pengunjung/assets/img/icon-antrian/3.png");
		background-size: 250px;
		background-position: center;
	}

	button#simpan_antrian3:hover {
		filter: brightness(150%);
		cursor: pointer;
	}

	button#simpan_antrian4 {
		background: url("../pengunjung/assets/img/icon-antrian/4.png");
		background-size: 250px;
		background-position: center;
	}

	button#simpan_antrian4:hover {
		filter: brightness(150%);
		cursor: pointer;
	}

	button#simpan_antrian6 {
		background: url("../pengunjung/assets/img/icon-antrian/5.png");
		background-size: 250px;
		background-position: center;
	}

	button#simpan_antrian6:hover {
		filter: brightness(150%);
		cursor: pointer;
	}
</style>

<div class="page-content center background-antrian">
	<div class="page-header">
		<div style="margin-top:10px;margin-bottom:5px" class="row">
			<div class="col-xs-12">
				<img src="../pengunjung/assets/img/<?php echo $logo; ?>" alt="Logo" height="100">
				<h1 style="color:#fff;"><strong><?php echo strtoupper($nama_instansi); ?></strong></h1>
			</div>
		</div>
	</div>

	<div class="alert alert-dark-blue">
		<i style="margin-right:5px" class="ace-icon fa fa-info-circle"></i> Selamat Datang di
		<?php echo $nama_instansi; ?>. Silahkan tekan tombol dibawah ini untuk mendapatkan nomor antrian.
	</div>

	<div class="row">
		<div class="button-antrian-layout">
			<div class="col-md-4">
				<h1 style="color: white; font-size: 25px; border-radius:10px; font-weight: bold;">
					<div id="load_antrian"></div>
				</h1>
				<br>

				<div class="section-daftar-btn">
					<button id="simpan_antrian" style="height:250px; width:250px; border-radius: 50%; font-size: 20px;">
						<!-- <i style="font-size: 50px;" class="ace-icon fa fa-user-plus"></i> -->
					</button>
				</div>
			</div>

			<div class="col-md-4">
				<h1 style="color: white; font-size: 25px; font-weight: bold;">
					<div id="load_antrian2"></div>
				</h1>
				<br>

				<div class="section-daftar-btn">
					<button id="simpan_antrian2"
						style="height:250px; width:250px; border-radius: 50%; font-size: 20px;">
						<!-- <i style="font-size: 50px;" class="ace-icon fa fa-user-plus"></i> -->
					</button>
				</div>
			</div>

			<div class="col-md-4">
				<h1 style="color: white; font-size: 25px; font-weight: bold;">
					<div id="load_antrian3"></div>
				</h1>
				<br>

				<div class="section-daftar-btn">
					<button id="simpan_antrian3"
						style="height:250px; width:250px; border-radius: 50%; font-size: 20px;">
						<!-- <i style="font-size: 50px;" class="ace-icon fa fa-user-plus"></i> -->
					</button>
				</div>
			</div>
		</div>

		<div class="row">

			<!-- Informasi dan Pengaduan -->
			<div class="button-antrian-layout">
				<div class="col-md-4"
					style="display:flex; flex-direction: column; justify-content:center; align-items:center;">
					<h1 style="color: white; font-size: 25px; font-weight: bold; width:75%;">
						<div id="load_antrian4"></div>
					</h1>
					<br>

					<div class="section-daftar-btn">
						<button id="simpan_antrian4"
							style="height:250px; width:250px; border-radius: 50%; font-size: 20px;">
							<!-- <i class="ace-icon fa fa-user-plus"></i> Nomor Antrian PPID dan Konsultasi Hukum -->
						</button>
					</div>
				</div>

				<!-- Perpustakaan Hukum -->
				<div class="col-md-4"
					style="display:flex; flex-direction: column; justify-content:center; align-items:center;">
					<h1 style="color: white; font-size: 25px; font-weight: bold; width:75%;">
						<div id="load_antrian6"></div>
					</h1>
					<br>
					<div class="section-daftar-btn">
						<button id="simpan_antrian6"
							style="height:250px; width:250px; border-radius: 50%; font-size: 20px;">
							<!-- <i class="ace-icon fa fa-user-plus"></i> Nomor Antrian Pojok Wani -->
						</button>
					</div>
				</div>
			</div>

			<br>
			<div class="col-md-12" style="padding-top: 200px;">
				<!-- <button class="btn btn-danger" style="font-size: 35px; padding: 20px; width: 700px; " data-toggle="modal" data-target="#modal-survey">
						<i class="ace-icon fa fa-pencil"></i> Isi Survey Kepuasan 
					</button> -->
			</div>
		</div>
	</div>
	
	<div>
	    <p style="color: white; font-size: 15px;">Gagal Mencetak nomor antrian tapi antrian sudah bertambah? Lakukan 
	    <a target="_blank" href="https://drive.google.com/file/d/13ovBKsrBX_OXl30HGFuMTmyYSe63iktb/view?usp=sharing">cetak ulang nomor antrian</a>. 
	    Baca panduannya <a target="_blank" href="https://drive.google.com/file/d/1Uh4eTtbZDt4hzoR0fOX2PjZBsH549Tq6/view?usp=sharing">di sini</a></p>
	</div>
	
	<br>

	<div class="modal fade in" id="modal-survey" style="padding-right: 16px;">
		<div class="modal-dialog" style="width: 1700px;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h1 class="modal-title">Bagaimana Pelayanan Kami?</h1>
				</div>
				<div class="modal-body">
					<div>
						<br>
						<br>
						<br>
						<table style="margin-left:auto; margin-right:auto;">
							<tr>

								<th><a id="simpan_senyum1"> <img border="0" alt="W3Schools" src="senyum1.png"
											width="168" height="200"
											style="  margin-top: 50px; margin-bottom: 50px; margin-right: 50px; margin-left: 50px;">
									</a></th>
								<th><a id="simpan_senyum2"><img border="0" alt="W3Schools" src="senyum2.png" width="168"
											height="200"
											style="  margin-top: 50px; margin-bottom: 50px; margin-right: 50px; margin-left: 50px;">
									</a></th>
								<th><a id="simpan_senyum3"><img border="0" alt="W3Schools" src="senyum3.png" width="195"
											height="200"
											style="  margin-top: 50px; margin-bottom: 50px; margin-right: 50px; margin-left: 50px;">
									</a></th>
								<th><a id="simpan_senyum4"><img border="0" alt="W3Schools" src="senyum4.png" width="200"
											height="200"
											style="  margin-top: 50px; margin-bottom: 50px; margin-right: 50px; margin-left: 50px;">
									</a></th>
								<th><a id="simpan_senyum5"><img border="0" alt="W3Schools" src="senyum5.png" width="319"
											height="200"
											style="  margin-top: 50px; margin-bottom: 50px; margin-right: 50px; margin-left: 50px;">
									</a></th>
							</tr>
							<tr>
								<td>
									<h2>Sangat Tidak Puas</h2>
								<td>
									<h2>Tidak Puas</h2>
								</td>
								<td>
									<h2>Biasa Ajah!</h2>
								</td>
								<td style="text-align:center;">
									<h2>Puas</h2>
								</td>
								<td>
									<h2>Sangat Puas</h2>
								</td>

							</tr>
						</table>

					</div>

				</div>
				<div class="modal-footer">
					<span style="font-size: 17px">Kementrian Hukum dan HAM &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"
							style="color: red"></i>&nbsp;&nbsp;&nbsp; Republik Indonesia</span>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>

	<div class="modal fade in" id="modal-sukses" style="padding-right: 16px;">
		<div class="modal-dialog" style="width: 800px;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h1 class="modal-title">Terima Kasih</h1>
				</div>
				<div class="modal-body">

					<i class="fa fa-fw fa-check" style="font-size: 150px; color: green;"></i>


					<div>
						<h1 style="color: black; font-size: 40px;">
							<div id="load_rating"></div>
						</h1>

					</div>

				</div>
				<div class="modal-footer">
					<span style="font-size: 17px">Kementrian Hukum &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"
							style="color: red"></i>&nbsp;&nbsp;&nbsp; Republik Indonesia</span>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>

	<div class="modal fade in" id="modal2" style="padding-right: 16px;">
		<div class="modal-dialog" style="width: 1300px;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h1 class="modal-title">Profil Kanwil Kemenkumham Jatim</h1>
				</div>
				<div class="modal-body">
					<div class="tab">
						<button class="tablinks" onclick="openCity(event, 'London')">Struktur Organisasi</button>
						<button class="tablinks" onclick="openCity(event, 'Paris')">Profil Pejabat</button>
						<button class="tablinks" onclick="openCity(event, 'Tokyo')">Tupoksi</button>
					</div>

					<div id="London" class="tabcontent">
						<h5 style="text-align: center; font-size: 15pt;"><strong>STRUKTUR ORGANISASI</strong></h5>
						<h5 style="text-align: center; font-size: 15pt;"><strong>KANTOR WILAYAH KEMENTERIAN HUKUM DAN
								HAM</strong></h5>
						<p><img src="Struktur-kanwil.jpg" alt="Struktur kanwil" width="1149" height="750" /></p>

					</div>

					<div id="Paris" class="tabcontent">
						<div style="text-align: center;"><span style="font-size: 18pt;"><strong>PROFIL
									PEJABAT</strong></span></div>
						<div style="text-align: center;"><strong><span style="font-size: 18pt;">KANTOR WILAYAH
									KEMENTERIAN HUKUM DAN HAM JAWA TIMUR</span><br /></strong></div>
						<div>&nbsp;</div>
						<table class="hovertable"
							style="margin-left: auto; margin-right: auto; width: 269px; height: 249px;">
							<tbody>
								<tr style="border-color: #A00D15; border-width: 2px;">
									<td
										style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 276px; height: 28px;">
										<div align="center"><strong>KEPALA KANTOR WILAYAH</strong></div>
									</td>
								</tr>
								<tr style="border-color: #A00D15;">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="zoom" align="center"><img src="images/Susy.png" alt="Susy.png" />
										</div>
									</td>
								</tr>
								<tr style="border-color: #A00D15;">
									<td
										style="background-color: #f6e7e8; border: 2px solid #a00d15; text-align: justify;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Dr. Susy
											Susilawati, SH.,
											MH.<br /></strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											NIP. 19600102 198203 2 001</strong></td>
								</tr>
							</tbody>
						</table>
						<p>&nbsp;</p>
						<table class="hovertable" style="margin-left: auto; margin-right: auto; width: 884px;"
							align="center">
							<tbody>
								<tr style="background-color: #f6e7e8; border: 2px solid #a00d15;">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="style4" align="center"><strong>KEPALA DIVISI </strong></div>
										<div class="style4" align="center"><strong>ADMINISTRASI</strong></div>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="style4" align="center">
											<p><strong>KEPALA DIVISI</strong><br /><strong> PEMASYARAKATAN</strong></p>
										</div>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="style4" align="center"><strong>KEPALA DIVISI</strong><br /><strong>
												KEIMIGRASIAN</strong></div>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="style4" align="center">
											<p><strong><span class="style3">KEPALA DIVISI<br /> PELAYANAN HUKUM DAN
														HAM</span></strong></p>
										</div>
									</td>
								</tr>
								<tr style="background-color: #f6e7e8; border: 2px solid #a00d15;">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="zoom" align="center"><img src="images/Haris_Sukamto.png"
												alt="Haris Sukamto.png" />&nbsp;</div>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="zoom" align="center">&nbsp;<img src="images/Pargiyono_BcIP.png"
												alt="Pargiyono BcIP.png" /></div>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="zoom" align="center">&nbsp;<img src="images/zacka.png"
												alt="zacka.png" /></div>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="zoom" align="center">&nbsp;<img src="images/Hajer.png"
												alt="Hajer.png" /></div>
									</td>
								</tr>
								<tr style="border-color: #A00D15; background-color: #f6e7e8;">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="style4" align="center">
											<p><span class="style3"><b>HARIS SUKAMTO, AKS., SH., MH.</b><br /><b> NIP.
														196606051989111001</b></span></p>
										</div>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div align="center"><b>PARGIYONO, Bc.IP., SH., MH</b><strong><span
													class="style3">.&nbsp;</span></strong></div>
										<div align="center"><strong><span
													class="style3">NIP.&nbsp;</span></strong><b>196008171982031004</b>
										</div>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="style3" align="center">
											<p class="style4"><strong>ZAKARIA., SH., MH.</strong><br /><strong> NIP.
													19590421 7198503 1 001</strong></p>
										</div>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div align="center">
											<p class="style4"><b>HAJERATI, SH., MH</b><strong>.</strong><br /><strong>
													NIP.&nbsp;</strong><b>19630309 199203 2 001</b></p>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<table class="hovertable"
							style="margin-left: auto; margin-right: auto; width: 703px; height: 1290px;" align="center">
							<tbody>
								<tr>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">
										<p>&nbsp;</p>
										<p>KEPALA BAGIAN UMUM</p>
										<p>&nbsp;</p>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">
										<p>&nbsp;</p>
										<p>&nbsp;DEWI ATMI LISTYORINI, SH., MH.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;NIP. 19631117 198503 2 001&nbsp;</p>
										<p>&nbsp;</p>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<p><img src="images/Dewi.png" alt="Dewi.png" /></p>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA BAGIAN PROGRAM DAN HUBUNGAN MASYARAKAT</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">
										<p>&nbsp;MEIRINA SAEKSI, SH., MH.<br />&nbsp;NIP. 19680511 199103 2 002</p>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="zoom" align="center">&nbsp;</div>
										<div class="zoom" align="center"><img src="images/Meirina.png"
												alt="Meirina.png" />&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA BIDANG PEMBINAAN, BIMBINGAN, DAN TEKNOLOGI INFORMASI</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">&nbsp;SAIFUR RACHMAN, SH., MM.<br />&nbsp;NIP. 19660307 198703 1
										001</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="zoom" align="center"><img src="images/saifur.jpeg"
												alt="WhatsApp Image 2018-05-22 at 1.49.43 PM.jpeg" width="99"
												height="148" style="border: 4px solid #ffffff;" /></div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA BIDANG PELAYANAN TAHANAN, KESEHATAN, REHABILITAS,
										PENGELOLAAN BENDA SITAAN, BARANG RAMPASAN NEGARA, DAN KEAMANAN</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">
										<p>&nbsp;</p>
										<p>SLAMET SUPARTONO, Bc.IP., S.Sos.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
											NIP.&nbsp;19660907 199003 1 002</p>
										<p>&nbsp;</p>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="zoom" align="center">&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA BIDANG PERIZINAN DAN INFORMASI KEIMIGRASIAN</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">
										<p>TATY SUFIANI, SS.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
											NIP.&nbsp;196604251986032001</p>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<p><img src="images/Taty.png" alt="Taty.png" /></p>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA BIDANG INTELIJEN DAN PENINDAKAN KEIMIGRASIAN</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">WISHNU DARU FAJAR, SH.<br /> NIP. 19641004 199103 1 002</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="zoom" align="center">&nbsp;</div>
										<div class="zoom" align="center"><img src="images/Wishnu.png"
												alt="Wishnu.png" />&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA BIDANG PELAYANAN HUKUM</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">
										<p>&nbsp;</p>
										<p>MUSTIQO VITRA ARDHIANSYAH, S.IP, M.Si, MH.<br />NIP. 19750109 200112 1 002
										</p>
										<p>&nbsp;</p>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<p><img src="images/Mustiqo.png" alt="Mustiqo.png" /></p>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA BIDANG HUKUM</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">
										<p>SUTRISNO, SH., MH.<br />NIP. 19620301 198303 1 001</p>
										<p>&nbsp;</p>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="zoom" align="center">&nbsp;<img src="images/Sutrisno.png"
												alt="Sutrisno.png" /></div>
										<div>&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA BIDANG HAM</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">Dra. WIWIT PURWANI ISWANDARI, SH., MH.<br />NIP. 19660113 199103
										2 001</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div>&nbsp;</div>
										<div class="zoom" align="center"><img src="images/Wiwit.png" alt="Wiwit.png" />
										</div>
										<div>&nbsp;</div>
									</td>
								</tr>
							</tbody>
						</table>
						<p>&nbsp;</p>
						<table class="hovertable" style="margin-left: auto; margin-right: auto; width: 705px;"
							align="center">
							<tbody>
								<tr>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA SUBBAGIAN PROGRAM DAN PELAPORAN</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">RATNO SUHARTONO, SH., MH.<br /> NIP. 19760315 200003 1001</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div>&nbsp;</div>
										<div class="zoom" align="center"><img src="images/Ratno.png" alt="Ratno.png" />
										</div>
										<div>&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA SUBBAGIAN HUBUNGAN MASYARAKAT, REFORMASI BIROKRASI DAN
										TEKNOLOGI INFORMASI</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">ISHADI MAJA PRAYITNO, SH., MH.<br /> NIP. 19771203 201012 1 001
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="zoom" align="center">&nbsp;<img src="images/Ishadi.png"
												alt="Ishadi.png" /></div>
										<div>&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA SUBBAGIAN KEPEGAWAIAN , TATA USAHA DAN RUMAH TANGGA</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">Dr. PRIAMBODO ADI WIBOWO, SH., MH.<br /> NIP. 19831214 200801 1
										001</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div>&nbsp;</div>
										<div class="zoom" align="center"><img src="images/Adi.png" alt="Adi.png" />
										</div>
										<div>&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA SUBBAGIAN PENGGELOLAAN KEUANGAN DAN BARANG MILIK NEGARA
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">UFI MAYAKAPTI, SH.<br /> NIP. 19770913 200312 2 002</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div>&nbsp;</div>
										<div class="zoom" align="center"><img src="images/Ufi.png" alt="Ufi.png" />
										</div>
										<div>&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA SUBBIDANG BIMBINGAN DAN PENGENTASAN ANAK</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">SUKIR, SH., MH.<br /> NIP. 19830703 200212 1 002</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div>&nbsp;</div>
										<div class="zoom" align="center"><img src="images/Sukirs.png"
												alt="Sukirs.png" />
										</div>
										<div>&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA SUBBIDANG PEMBINAAN, TEKNOLOGI INFORMASI, DAN KERJASAMA
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">
										<p>UNTUNG CIPTADI, Bc.IP., SH., MH.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
											&nbsp;NIP.&nbsp;19630307 1990 031 001&nbsp;</p>
										<p>&nbsp;</p>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="zoom" align="center">&nbsp;</div>
										<div class="zoom" align="center"><img src="images/Untung.png"
												alt="Untung.png" />
										</div>
										<div class="zoom" align="center">&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA SUBBIDANG PENGELOLAAN BENDA SITAAN, BARANG RAMPASAN
										NEGARA, DAN KEAMANAN</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">ALZUARMAN, A.Md.IP., SH., MH.<br /> NIP. 19720917 199703 1 001
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div>&nbsp;</div>
										<div class="zoom" align="center"><img src="images/Alzuarman.png"
												alt="Alzuarman.png" /></div>
										<div>&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA SUBBIDANG PELAYANAN TAHANAN, PERAWATAN KESEHATAN, DAN
										REHABILITASI</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">FX. YULI PURWANTO, Bc.IP., SH.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
										&nbsp; &nbsp; NIP.&nbsp;19660706 199001 1 001</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div>&nbsp;</div>
										<div class="zoom" align="center"><img src="images/Yuli.png" alt="Yuli.png" />
										</div>
										<div class="zoom" align="center">&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA SUBBIDANG INTELIJEN KEIMIGRASIAN</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">
										<p>MUH. ASROFAH, SH., MH. NIP.&nbsp;196605111992031001</p>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<p>&nbsp;<img src="images/Asrofah.png" alt="Asrofah.png" /></p>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA SUBBIDANG PERIZINAN KEIMIGRASIAN</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">SARWONO TOETOEG I., S.Pd., MH.<br /> NIP. 19640519 199303 1 001
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="zoom" align="center">&nbsp;</div>
										<div class="zoom" align="center"><img src="images/Sarwono.png"
												alt="Sarwono.png" />
										</div>
										<div class="zoom" align="center">&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA SUBBIDANG PENINDAKAN KEIMIGRASIAN</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">FARID MA'RUF, SH.<br /> NIP. 19741217 199403 1 001</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div>&nbsp;</div>
										<div class="zoom" align="center"><img src="images/Farid.png" alt="Farid.png" />
										</div>
										<div>&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA SUBBIDANG INFORMASI KEIMIGRASIAN</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">RUBIYANTO SUGESI, S.Sos.<br /> NIP. 19720715 199203 1 001</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="zoom" align="center">&nbsp;</div>
										<div class="zoom" align="center"><img src="images/Rubiyanto.png"
												alt="Rubiyanto.png" />&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA SUBBIDANG PELAYANAN ADMINISTRASI HUKUM UMUM</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">ALFIANI ARUMNDARI, SH., MH.<br />NIP. 19851028 200912 2 005</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<p><img src="images/Arum.png" alt="Arum.png" /></p>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA SUB BIDANG PELAYANAN KEKAYAAN INTELEKTUAL</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">
										<p>&nbsp;</p>
										<p>-</p>
										<p>PAHLEVI WITANTRA, SH.<br />NIP. 19881107 201212 1 003</p>
										<p>&nbsp;</p>
										<p>&nbsp;</p>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="zoom" align="center">&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA SUB BIDANG FASILITASI PEMBENTUKAN PRODUK HUKUM DAERAH
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">HARIS NASIROEDIN, SH., MH.<br /> NIP. 19710110 199203 1 002</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div>&nbsp;</div>
										<div class="zoom" align="center"><img src="images/Haris_N.png"
												alt="Haris N.png" />
										</div>
										<div>&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA SUBBIDANG PENYULUHAN HUKUM, BANTUAN HUKUM DAN JARINGAN
										DOKUMENTRASI INFORMASI HUKUM</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">GATOT SUHARTO, SH.<br /> NIP.19670908 198703 1 001</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div>&nbsp;</div>
										<div class="zoom" align="center"><img src="images/Gatot.png" alt="Gatot.png" />
										</div>
										<div>&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA SUB BIDANG PEMAJUAN HAM</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">
										<p>-&nbsp; &nbsp;</p>
										<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp;LUSIE IRAWATI, SH.<br />NIP.19750917 200912 2 001</p>
										<p>&nbsp;</p>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">
										<div class="zoom" align="center">&nbsp;</div>
									</td>
								</tr>
								<tr valign="middle">
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">KEPALA SUBBIDANG PENGKAJIAN, PENELITIAN DAN PENGEMBANGAN HUKUM
										DAN HAK ASASI MANUSIA</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15; width: 294px; height: 71px; vertical-align: middle;"
										valign="middle">
										<p>&nbsp;</p>
										<p>NOVA WIJAYANTI, SH.<br />NIP.19841130 200901 2 002&nbsp;</p>
										<p>&nbsp;</p>
									</td>
									<td style="background-color: #f6e7e8; border: 2px solid #a00d15;">&nbsp; &nbsp;
										&nbsp;</td>
								</tr>
							</tbody>
						</table>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
					</div>

					<div id="Tokyo" class="tabcontent">
						<h2
							style="font-size: 20px; outline-width: 0px; outline-style: initial; outline-color: initial; text-align: center; padding: 0px; margin: 0px; border: 0px initial initial;">
							<strong> TUGAS POKOK DAN FUNGSI </strong>
						</h2>
						<h2
							style="font-size: 20px; outline-width: 0px; outline-style: initial; outline-color: initial; text-align: center; padding: 0px; margin: 0px; border: 0px initial initial;">
							<strong>KANTOR WILAYAH</strong>
						</h2>
						<h2
							style="font-size: 20px; outline-width: 0px; outline-style: initial; outline-color: initial; text-align: center; padding: 0px; margin: 0px; border: 0px initial initial;">
							<strong>KEMENTERIAN HUKUM DAN HAM RI</strong>
						</h2>
						<p style="font-size: 20px;"><strong>TUGAS</strong></p>
						<p style="font-size: 20px; text-align: center;">Kantor Wilayah mempunyai tugas melaksanakan
							tugas dan fungsi Kementerian Hukum dan Hak Asasi Manusia dalam wilayah provinsi berdasarkan
							kebijakan Menteri dan ketentuan peraturan perundang-undangan.</p>
						<p style="font-size: 20px;"><strong>FUNGSI</strong></p>
						<div style="font-size: 20px;">Untuk melaksanakan tugas sebagaimana dimaksud diatas, Kantor
							Wilayah menyelenggarakan fungsi:
							<ol>
								<li style="text-align: justify; font-size: 20px;" type="1">Pengkoordinasian perencanaan,
									pengendalian program, dan pelaporan;</li>
								<li style="text-align: justify; font-size: 20px;" type="1">Pelaksanaan pelayanan di
									bidang administrasi hukum umum, hak kekayaan intelektual, dan pemberian informasi
									hukum;</li>
								<li style="text-align: justify; font-size: 20px;" type="1">Pelaksanaan fasilitasi
									perancangan produk hukum daerah, pengembangan budaya hukum dan penyuluhan hukum,
									serta konsultasi dan bantuan hukum;</li>
								<li style="text-align: justify; font-size: 20px;" type="1">Pengoordinasian pelaksanaan
									operasional unit pelaksana teknis di lingkungan Kementerian Hukum dan Hak Asasi
									Manusia di bidang &nbsp;keimigrasian dan bidang pemasyarakatan;</li>
								<li style="text-align: justify; font-size: 20px;" type="1">Penguatan dan pelayanan hak
									asasi manusia dalam rangka mewujudkan penghormatan, pemenuhan, pemajuan,
									pelindungan, dan penegakan hak asasi manusia; dan</li>
								<li style="text-align: justify; font-size: 20px;" type="1">Pelaksanaan urusan
									administrasi di lingkungan Kantor Wilayah.</li>
							</ol>
						</div>

					</div>

				</div>
				<div class="modal-footer">
					<span style="font-size: 17px">Kantor Wilayah Kementrian Hukum dan HAM &nbsp;&nbsp;&nbsp;<i
							class="fa fa-heart" style="color: red"></i>&nbsp;&nbsp;&nbsp; Republik Indonesia</span>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
</div>

<!-- MODAL BUKU TAMU -->
<div class="modal fade" id="modal-layanan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<input type="hidden" id="loket">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Buku Tamu</h4>
			</div>
			<div class="modal-body" id="modal-body-layanan">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" id="simpan-buku-tamu">Simpan</button>
			</div>
		</div>
	</div>
</div>
<!-- END MODAL BUKU TAMU -->

<script type="text/javascript" src="pages/beranda/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#load_rating').load('pages/beranda/getRating.php').fadeIn("slow");

		$('#load_antrian').load('pages/beranda/getAntrian.php');
		$('#load_antrian2').load('pages/beranda/getAntrianAhu.php');
		$('#load_antrian3').load('pages/beranda/getAntrianKonsultasiHukum.php');
		$('#load_antrian4').load('pages/beranda/getAntrianInformasiDanPengaduan.php');
		$('#load_antrian5').load('pages/beranda/getAntrianHAM.php');
		$('#load_antrian6').load('pages/beranda/getAntrianPerpustakaanHukum.php');

		$("#simpan-buku-tamu").on('click', function () {
			var loket = $('#loket').val();
			$("#form-layanan").validate({
				rules: {
					'id_layanan[]': {
						required: true,
						minlength: 1
					}
				},
				messages: {
					'id_layanan[]': `<span style="color:red;">Jenis Layanan harus dipilih</span>`,
					nama: `<span style="color:red;">Nama harus diisi.</span>`,
					alamat: `<span style="color:red;">Alamat harus diisi.</span>`,
					no_hp: `<span style="color:red;">No.HP harus diisi.</span> `,
					jenis_pemohon: `<span style="color:red;">Jenis Layanan harus diisi.</span> `,
					email: `<span style = "color:red;">Email belum terisi / format tidak sesuai.</span >`,

				}
			})

			var valid = $("#form-layanan").valid();
			if (valid) {
				$('#modal-layanan').modal('hide');
				if (loket == 'KI') {
					save_ki()
				} else if (loket == 'AHU') {
					save_ahu()
				} else if (loket == 'KONSULTASI_HUKUM') {
					save_konsultasi_hukum()
				} else if (loket == 'INFORMASI_DAN_PENGADUAN') {
					save_informasi_dan_pengaduan()
				} else if (loket == 'IMIGRASIPAS') {
					save_imigrasipas()
				} else if (loket == 'POJOKWANI') {
					save_pojokwani()
				} else if (loket == 'PERPUSTAKAAN_HUKUM') {
					save_perpustakaan_hukum()
				}
			}
		})

		// antrian KI 
		$("#simpan_antrian").on('click', function () {
			$('#form-layanan').find("input[type=text], textarea").val("");
			$('#loket').val('KI');
			$('#modal-layanan').modal('show');
			$('#modal-body-layanan').load('pages/beranda/getLayanan.php?jenis=KI');
		});

		// antrian AHU
		$("#simpan_antrian2").on('click', function () {
			$('#form-layanan').find("input[type=text], textarea").val("");
			$('#loket').val('AHU');
			$('#modal-layanan').modal('show');
			$('#modal-body-layanan').load('pages/beranda/getLayanan.php?jenis=AHU');
		});

		// antrian konsultasi Hukum
		$("#simpan_antrian3").on('click', function () {
			$('#form-layanan').find("input[type=text], textarea").val("");
			$('#loket').val('KONSULTASI_HUKUM');
			$('#modal-layanan').modal('show');
			$('#modal-body-layanan').load('pages/beranda/getLayanan.php?jenis=KONSULTASI_HUKUM');
		});

		// antrian Informasi dan Pengaduan
		$("#simpan_antrian4").on('click', function () {
			$('#form-layanan').find("input[type=text], textarea").val("");
			$('#loket').val('INFORMASI_DAN_PENGADUAN');
			$('#modal-layanan').modal('show');
			$('#modal-body-layanan').load('pages/beranda/getLayanan.php?jenis=INFORMASI_DAN_PENGADUAN');
		});

		// antrian imigrasipas
		$("#simpan_antrian5").on('click', function () {
			$('#form-layanan').find("input[type=text], textarea").val("");
			$('#loket').val('IMIGRASIPAS');
			$('#modal-layanan').modal('show');
			$('#modal-body-layanan').load('pages/beranda/getLayanan.php?jenis=IMIGRASIPAS');
		});

		// antrian Perpustakaan Hukum
		$("#simpan_antrian6").on('click', function () {
			$('#form-layanan').find("input[type=text], textarea").val("");
			$('#loket').val('PERPUSTAKAAN_HUKUM');
			$('#modal-layanan').modal('show');
			$('#modal-body-layanan').load('pages/beranda/getLayanan.php?jenis=PERPUSTAKAAN_HUKUM');
		});

		$("#simpan_senyum1").on('click', function () {
			$.ajax({
				url: "pages/beranda/prosesSenyum1.php",
				type: "POST",
				cache: false,
				success: function (msg) {
					if (msg == "Sukses") {
						$('#modal-survey').modal('hide');
						$('#load_rating').load('pages/beranda/getRating.php').fadeIn("slow");
						$('#modal-sukses').modal('show');
					}
				}
			});
		});
		$("#simpan_senyum2").on('click', function () {
			$.ajax({
				url: "pages/beranda/prosesSenyum2.php",
				type: "POST",
				cache: false,
				success: function (msg) {
					if (msg == "Sukses") {
						$('#modal-survey').modal('hide');
						$('#load_rating').load('pages/beranda/getRating.php').fadeIn("slow");
						$('#modal-sukses').modal('show');
					}
				}
			});
		});
		$("#simpan_senyum3").on('click', function () {
			$.ajax({
				url: "pages/beranda/prosesSenyum3.php",
				type: "POST",
				cache: false,
				success: function (msg) {
					if (msg == "Sukses") {
						$('#modal-survey').modal('hide');
						$('#load_rating').load('pages/beranda/getRating.php').fadeIn("slow");
						$('#modal-sukses').modal('show');
					}
				}
			});
		});
		$("#simpan_senyum4").on('click', function () {
			$.ajax({
				url: "pages/beranda/prosesSenyum4.php",
				type: "POST",
				cache: false,
				success: function (msg) {
					if (msg == "Sukses") {
						$('#modal-survey').modal('hide');
						$('#load_rating').load('pages/beranda/getRating.php').fadeIn("slow");
						$('#modal-sukses').modal('show');
					}
				}
			});
		});
		$("#simpan_senyum5").on('click', function () {
			$.ajax({
				url: "pages/beranda/prosesSenyum5.php",
				type: "POST",
				cache: false,
				success: function (msg) {
					if (msg == "Sukses") {
						$('#modal-survey').modal('hide');
						$('#load_rating').load('pages/beranda/getRating.php').fadeIn("slow");
						$('#modal-sukses').modal('show');
					}
				}
			});
		});
	});


	function save_ki() {
		$.ajax({
			url: "pages/beranda/proses.php",
			type: "POST",
			cache: false,
			data: $('#form-layanan').serialize(),
			beforeSend: function (xhr) {
				$.gritter.add({
					// (string | mandatory) the heading of the notification
					title: 'Memproses',
					// (string | mandatory) the text inside the notification
					text: 'Sedang memproses antrian anda...',
					class_name: 'gritter-warning' + (!$('#simpan_antrian').get(0).checked ? ' gritter-light' : '')
				});
			},
			success: function (msg) {
				if (msg == "Sukses") {
					printPage('pages/beranda/print2.php');
					$('#load_antrian').load('pages/beranda/getAntrian.php').fadeIn("slow");

					$.ajax({
						url: "pages/beranda/print.php",
						type: "POST",
						success: function (data, textStatus, jqXHR) {
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
	}

	function save_ahu() {
		$.ajax({
			url: "pages/beranda/prosesAhu.php",
			type: "POST",
			cache: false,
			data: $('#form-layanan').serialize(),
			beforeSend: function (xhr) {
				$.gritter.add({
					// (string | mandatory) the heading of the notification
					title: 'Memproses',
					// (string | mandatory) the text inside the notification
					text: 'Sedang memproses antrian anda...',
					class_name: 'gritter-warning' + (!$('#simpan_antrian').get(0).checked ? ' gritter-light' : '')
				});
			},
			success: function (msg) {
				if (msg == "Sukses") {
					printPage('pages/beranda/print3.php');

					$('#load_antrian2').load('pages/beranda/getAntrianAhu.php').fadeIn("slow");

					$.ajax({
						url: "pages/beranda/print.php",
						type: "POST",
						success: function (data, textStatus, jqXHR) {
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
	}

	function save_apostile() {
		$.ajax({
			url: "pages/beranda/prosesApostile.php",
			type: "POST",
			cache: false,
			data: $('#form-layanan').serialize(),
			success: function (msg) {
				if (msg == "Sukses") {
					printPage('pages/beranda/printApostile.php');

					$('#load_antrian3').load('pages/beranda/getAntrianKonsultasiHukum.php').fadeIn("slow");

					$.ajax({
						url: "pages/beranda/print.php",
						type: "POST",
						success: function (data, textStatus, jqXHR) {
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
	}


	function save_konsultasi_hukum() {
		$.ajax({
			url: "pages/beranda/prosesKonsultasiHukum.php",
			type: "POST",
			cache: false,
			data: $('#form-layanan').serialize(),
			beforeSend: function (xhr) {
				$.gritter.add({
					// (string | mandatory) the heading of the notification
					title: 'Memproses',
					// (string | mandatory) the text inside the notification
					text: 'Sedang memproses antrian anda...',
					class_name: 'gritter-warning' + (!$('#simpan_antrian').get(0).checked ? ' gritter-light' : '')
				});
			},
			success: function (msg) {
				if (msg == "Sukses") {
					printPage('pages/beranda/printKonsultasiHukum.php');

					$('#load_antrian3').load('pages/beranda/getAntrianKonsultasiHukum.php').fadeIn("slow");

					$.ajax({
						url: "pages/beranda/print.php",
						type: "POST",
						success: function (data, textStatus, jqXHR) {
							// alert('Silahkan ambil nomor antrian Anda')
							$.gritter.add({
								// (string | mandatory) the heading of the notification
								title: 'Terima Kasih..',
								// (string | mandatory) the text inside the notification
								text: 'Silahkan Ambil Nomor Antrian Anda.',
								class_name: 'gritter-success' + (!$('#simpan_antrian').get(0).checked ? ' gritter-light' : '')
							});

							return false;
						}
					});

				} else {
					$.gritter.add({
						// (string | mandatory) the heading of the notification
						title: 'Gagal',
						// (string | mandatory) the text inside the notification
						text: 'Gagal mendaftarkan Antrian Konsultasi Hukum',
						class_name: 'gritter-error' + (!$('#simpan_antrian').get(0).checked ? ' gritter-light' : '')
					});

					return false;
				}
			}
		});
	}

	function save_informasi_dan_pengaduan() {
		$.ajax({
			url: "pages/beranda/prosesInformasiDanPengaduan.php",
			type: "POST",
			cache: false,
			data: $('#form-layanan').serialize(),
			beforeSend: function (xhr) {
				$.gritter.add({
					// (string | mandatory) the heading of the notification
					title: 'Memproses',
					// (string | mandatory) the text inside the notification
					text: 'Sedang memproses antrian anda...',
					class_name: 'gritter-warning' + (!$('#simpan_antrian').get(0).checked ? ' gritter-light' : '')
				});
			},
			success: function (msg) {
				if (msg == "Sukses") {
					printPage('pages/beranda/printInformasiDanPengaduan.php');

					$('#load_antrian4').load('pages/beranda/getAntrianInformasiDanPengaduan.php').fadeIn("slow");

					$.ajax({
						url: "pages/beranda/print.php",
						type: "POST",
						success: function (data, textStatus, jqXHR) {
							// alert('Silahkan ambil nomor antrian Anda')
							$.gritter.add({
								// (string | mandatory) the heading of the notification
								title: 'Terima Kasih..',
								// (string | mandatory) the text inside the notification
								text: 'Silahkan Ambil Nomor Antrian Anda.',
								class_name: 'gritter-success' + (!$('#simpan_antrian').get(0).checked ? ' gritter-light' : '')
							});

							return false;
						}
					});

				} else {
					$.gritter.add({
						// (string | mandatory) the heading of the notification
						title: 'Gagal',
						// (string | mandatory) the text inside the notification
						text: 'Gagal mendaftarkan Antrian Informasi dan Pengaduan',
						class_name: 'gritter-error' + (!$('#simpan_antrian').get(0).checked ? ' gritter-light' : '')
					});

					return false;
				}
			}
		});
	}

	function save_perpustakaan_hukum() {
		$.ajax({
			url: "pages/beranda/prosesPerpustakaanHukum.php",
			type: "POST",
			cache: false,
			data: $('#form-layanan').serialize(),
			beforeSend: function (xhr) {
				$.gritter.add({
					// (string | mandatory) the heading of the notification
					title: 'Memproses',
					// (string | mandatory) the text inside the notification
					text: 'Sedang memproses antrian anda...',
					class_name: 'gritter-warning' + (!$('#simpan_antrian').get(0).checked ? ' gritter-light' : '')
				});
			},
			success: function (msg) {
				if (msg == "Sukses") {
					printPage('pages/beranda/printPerpustakaanHukum.php');

					$('#load_antrian6').load('pages/beranda/getAntrianPerpustakaanHukum.php').fadeIn("slow");

					$.ajax({
						url: "pages/beranda/print.php",
						type: "POST",
						success: function (data, textStatus, jqXHR) {
							// alert('Silahkan ambil nomor antrian Anda')
							$.gritter.add({
								// (string | mandatory) the heading of the notification
								title: 'Terima Kasih..',
								// (string | mandatory) the text inside the notification
								text: 'Silahkan Ambil Nomor Antrian Anda.',
								class_name: 'gritter-success' + (!$('#simpan_antrian').get(0).checked ? ' gritter-light' : '')
							});

							return false;
						}
					});

				} else {
					$.gritter.add({
						// (string | mandatory) the heading of the notification
						title: 'Gagal',
						// (string | mandatory) the text inside the notification
						text: 'Gagal mendaftarkan Antrian Perpustakaan Hukum',
						class_name: 'gritter-error' + (!$('#simpan_antrian').get(0).checked ? ' gritter-light' : '')
					});

					return false;
				}
			}
		});
	}


	function save_ppidinformasihukum() {
		$.ajax({
			url: "pages/beranda/prosesPPID.php",
			type: "POST",
			cache: false,
			data: $('#form-layanan').serialize(),
			success: function (msg) {
				if (msg == "Sukses") {
					printPage('pages/beranda/printPPID.php');

					$('#load_antrian4').load('pages/beranda/getAntrianInformasiDanPengaduan.php').fadeIn("slow");

					$.ajax({
						url: "pages/beranda/printPPID.php",
						type: "POST",
						success: function (data, textStatus, jqXHR) {
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
	}

	function save_imigrasipas() {
		$.ajax({
			url: "pages/beranda/prosesham.php",
			type: "POST",
			cache: false,
			data: $('#form-layanan').serialize(),
			success: function (msg) {
				if (msg == "Sukses") {
					printPage('pages/beranda/print6.php');

					$('#load_antrian5').load('pages/beranda/getAntrianHAM.php').fadeIn("slow");

					$.ajax({
						url: "pages/beranda/print.php",
						type: "POST",
						success: function (data, textStatus, jqXHR) {
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
	}

	function save_pojokwani() {
		$.ajax({
			url: "pages/beranda/prosespojokwani.php",
			type: "POST",
			cache: false,
			data: $('#form-layanan').serialize(),
			success: function (msg) {
				if (msg == "Sukses") {
					printPage('pages/beranda/print7.php');

					$('#load_antrian6').load('pages/beranda/getAntrianPerpustakaanHukum.php').fadeIn("slow");

					$.ajax({
						url: "pages/beranda/print.php",
						type: "POST",
						success: function (data, textStatus, jqXHR) {
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
	}


	function closePrint() {
		document.body.removeChild(this.__container__);
	}

	function setPrint() {
		this.contentWindow.__container__ = this;
		this.contentWindow.onbeforeunload = closePrint;
		this.contentWindow.onafterprint = closePrint;
		this.contentWindow.focus(); // Required for IE
		this.contentWindow.print();
	}

	function printPage(sURL) {
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

	function openCity(evt, cityName) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(cityName).style.display = "block";
		evt.currentTarget.className += " active";
	}</script>