<?php
// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login
if (empty($_SESSION['antrian_user_account_name']) && empty($_SESSION['antrian_user_account_password'])) {
    echo "<meta http-equiv='refresh' content='0; url=../../login-error'>";
}

// jika user sudah login, maka jalankan perintah untuk insert, update, dan delete
else {
    // panggil fungsi untuk format tanggal
    include "../config/fungsi_tanggal.php";
    ?>

    <div class="content-body">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-xs-12">
                <div class="alert alert-primary alert-dismissible fade in mb-2" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong><i style="margin-right:7px" class="icon-info"></i></strong> Selamat datang
                    <strong><?php echo $_SESSION['antrian_fullname']; ?></strong>.
                    Anda login sebagai user <strong><?php echo $_SESSION['antrian_user_permissions']; ?></strong>.
                </div>
            </div>

            <div class="col-md-3 col-lg-3 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-block">
                            <div class="media">
                                <div class="media-body text-xs-left">
                                    <div id="load_jumlah_antrian"></div>
                                    <span>Jumlah Antrian</span>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="icon-users2 deep-orange font-large-2 float-xs-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-block">
                            <div class="media">
                                <div class="media-body text-xs-left">
                                    <div id="load_antrian_sekarang"></div>
                                    <span>Antrian Sekarang</span>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="icon-user-check teal font-large-2 float-xs-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-block">
                            <div class="media">
                                <div class="media-body text-xs-left">
                                    <div id="load_antrian_selanjutnya"></div>
                                    <span>Antrian Selanjutnya</span>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="icon-user-plus cyan font-large-2 float-xs-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-block">
                            <div class="media">
                                <div class="media-body text-xs-left">
                                    <div id="load_sisa_antrian"></div>
                                    <span>Sisa Antrian</span>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="icon-user pink font-large-2 float-xs-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="border-top: 1px solid #ddd;padding-bottom:15px;margin-top:-8px"></div>

        <div class="row">
            <div class="col-xl-3 col-lg-3 col-xs-12">
                <div class="card">
                    <div class="media" id="load_loket1"></div>
                </div>

                <div class="card">
                    <div class="media" id="load_loket2"></div>
                </div>

                <div class="card">
                    <div class="media" id="load_loket3"></div>
                </div>

                <div class="card">
                    <div class="media" id="load_loket4"></div>
                </div>

                <div class="card">
                    <div class="media" id="load_loket5"></div>
                </div>

                <div class="card">
                    <div class="media" id="load_loket6"></div>
                </div>
            </div>

            <div class="col-xl-9 col-lg-9 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><i class="icon-users2"></i> Panggil Antrian</h4>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block card-dashboard">
                            <table id="tabel-antrian" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nomor Antrian</th>
                                        <th>Panggil</th>
                                        <th>Loket</th>
                                        <th>Status</th>
                                        <th>Panggil</th>
                                        <th>Layanan</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL BUKU TAMU -->

    <audio id="tingtung" src="assets/audio/tingtung.mp3"></audio>

    <!-- auto refresh jumlah antrian pengunjung -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#load_jumlah_antrian').load('modules/antrian/getJumlahAntrian.php');
            $('#load_antrian_sekarang').load('modules/antrian/getAntrianSekarang.php');
            $('#load_antrian_selanjutnya').load('modules/antrian/getAntrianSelanjutnya.php');
            $('#load_sisa_antrian').load('modules/antrian/getSisaAntrian.php');

            $('#load_loket1').load('modules/antrian/getLoket1.php');
            $('#load_loket2').load('modules/antrian/getLoket2.php');
            $('#load_loket3').load('modules/antrian/getLoket3.php');
            $('#load_loket4').load('modules/antrian/getLoket4.php');
            $('#load_loket5').load('modules/antrian/getLoket5.php');
            $('#load_loket6').load('modules/antrian/getLoket6.php');

            // initiate dataTables plugin
            var table = $('#tabel-antrian').DataTable({
                "bAutoWidth": false,
                "lengthChange": false,
                "searching": false,
                "serverSide": true,
                "ajax": 'modules/antrian/data.php',
                "columnDefs": [
                    { "targets": 0, "width": '100px', "className": 'center' },
                    { "targets": 1, "visible": false },
                    { "targets": 2, "width": '100px', "className": 'center' },
                    { "targets": 3, "visible": false },
                    {
                        "targets": 4, "data": null, "orderable": false, "searchable": false, "width": '80px', "className": 'center',
                        "render": function (data, type, row) {
                            if (data[3] === '0') {
                                var btn = "<button data-toggle=\"tooltip\" data-placement=\"top\" title=\"Panggil\" class=\"btn mic btn-primary btn-sm\"><i class=\"icon-mic\"></i>";
                            } else {
                                var btn = "<button data-toggle=\"tooltip\" data-placement=\"top\" title=\"Panggil\" class=\"btn mic btn-outline-primary btn-sm\"><i class=\"icon-mic\"></i></button>";
                            };
                            return btn;
                        }
                    },
                    { "targets": 5, "width": '100px', "className": 'center' },
                    {
                        "targets": 6, "data": null, "orderable": false, "searchable": false, "width": '80px', "className": 'center',
                        "render": function (data, type, row) {
                            return "<button data-toggle=\"tooltip\" data-placement=\"top\" title=\"Detail Buku Tamu\" class=\"btn detail btn-primary btn-sm\"><i class=\"icon-file-text2\"></i></button>";
                        }
                    }
                ],
                "order": [[0, "desc"]],
                "iDisplayLength": 8
            });

            $('#tabel-antrian tbody').on('click', '.detail', function () {
                var data_tr = table.row($(this).parents('tr')).data();
                var ID = data_tr[6];
                // alert(ID);
                show_detail(ID);
            })

            $('#tabel-antrian tbody').on('click', '.mic', function () {
                var data_tr = table.row($(this).parents('tr')).data();
                var ID = data_tr[4];
                var bell = document.getElementById('tingtung');
                show_detail(ID);

                $.ajax({
                    url: "modules/antrian/proses.php",
                    type: "POST",
                    data: { ID: ID },
                    cache: false,
                    success: function (msg) {
                        if (msg == "1") {
                            // MAINKAN SUARA BEL PADA SAAT AWAL
                            //var laman= window.location.href;
                            //$("#result").load(laman);
                            bell.pause();
                            bell.currentTime = 0;
                            bell.play();
                            var ses = "<?php echo $_SESSION['antrian_user_permissions']; ?>";
                            // SET DELAY UNTUK MEMAINKAN REKAMAN NOMOR URUT  
                            totalwaktu = bell.duration * 700;
                            console.log(data_tr[2]);

                            // MAINKAN SUARA NOMOR URUT

                            setTimeout(function () {

                                return responsiveVoice.speak(" Nomor Antrian," + data_tr[1] + ", ke," + ses + "", "Indonesian Female", { rate: 0.8, pitch: 1, volume: 1 });
                            }, totalwaktu);

                            totalwaktu = totalwaktu + 700;
                        }
                    }
                });
            });

            setInterval(function () {
                $('#load_jumlah_antrian').load('modules/antrian/getJumlahAntrian.php').fadeIn("slow");
                $('#load_antrian_sekarang').load('modules/antrian/getAntrianSekarang.php');
                $('#load_antrian_selanjutnya').load('modules/antrian/getAntrianSelanjutnya.php');
                $('#load_sisa_antrian').load('modules/antrian/getSisaAntrian.php');
                $('#load_loket1').load('modules/antrian/getLoket1.php');
                $('#load_loket2').load('modules/antrian/getLoket2.php');
                $('#load_loket3').load('modules/antrian/getLoket3.php');
                $('#load_loket4').load('modules/antrian/getLoket4.php');
                $('#load_loket5').load('modules/antrian/getLoket5.php');
                $('#load_loket6').load('modules/antrian/getLoket6.php');
                table.ajax.reload(null, false);
            }, 5000); // refresh setiap 5000 milliseconds
        });

        function show_detail(id) {
            $.ajax({
                url: "modules/antrian/getBukuTamu.php",
                type: "POST",
                data: { ID: id },
                cache: false,
                dataType: "json",
                success: function (msg) {
                    console.log(msg);
                    if (msg.err == "0") {
                        $('#modal-layanan').modal('show');
                        var html = '';
                        html += '\
                                <div class="modal-dialog modal-lg" role="document">\
                                    <div class="modal-content">\
                                        <div class="modal-header">\
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>\
                                            <h4 class="modal-title" id="myModalLabel">Nomor Antrian <b>' + msg.data.no_antrian + '</b></h4>\
                                        </div>\
                                        <div class="modal-body" id="modal-body-layanan">\
                                            <div class="row">\
                                                <div class="col-md-12">\
                                                    <table class="table table-bordered">\
                                                        <tbody>\
                                                            <tr>\
                                                                <td>Nama</td>\
                                                                <td><b>' + msg.data.nama + '</b></td>\
                                                                <td width="25%">Layanan</td>\
                                                                <td width="25%"><b>' + msg.data.layanan_antrian + '</b></td>\
                                                            </tr>\
                                                            <tr>\
                                                                <td>Nomor HP</td>\
                                                                <td><b>' + msg.data.no_hp + '</b></td>\
                                                                <td>Jenis Pemohon</label</td>\
                                                                <td><b>' + msg.data.jenis_pemohon + '</b></td>\
                                                            </tr>\
                                                            <tr>\
                                                                <td>Alamat</label</td>\
                                                                <td><b>' + msg.data.alamat + '</b></td>\
                                                                <td>Email</label</td>\
                                                                <td><b>' + msg.data.email + '</b></td>\
                                                            </tr>\
                                                            <tr>\
                                                                <td>Jenis Layanan</label</td>\
                                                                <td colspan="3"><b>' + msg.data.jenis_layanan + '</b></td>\
                                                            </tr>\
                                                        </tbody>\
                                                    </table>\
                                                </div>\
                                            </div>\
                                        </div>\
                                        <div class="modal-footer">\
                                            <button type="button" id="btn-selesai" class="btn btn-primary" onClick="PrintFromDashboard(\''+ msg.data.ID + '\')">Cetak Antrian</button> \
                                            <button type="button" id="btn-selesai" class="btn btn-primary" onClick="Finish(\''+ msg.data.email + '\')">Selesai</button>\
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>\
                                        </div>\
                                    </div>\
                                </div>';
                        $('#modal-layanan').empty();
                        $('#modal-layanan').append(html);
                    }
                }
            });
        }
        function Finish(email) {
            // alert(email);
            $('#btn-selesai').attr('disabled', true);
            $('#btn-selesai').html('Proses kirim email ...');
            $.ajax({
                url: "modules/antrian/kirimEmail.php",
                type: "POST",
                data: { email: email },
                cache: false,
                success: function (msg) {
                    if (msg == "sukses") {
                        $('#modal-layanan').modal('hide');
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

        function PrintFromDashboard(id) {
            printPage(`modules/print/printDashboard.php?antrianID=${id}`);
        }
    </script>
<?php
}
?>