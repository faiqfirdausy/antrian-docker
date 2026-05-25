<?php  
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' )) {

    // panggil file config.php untuk koneksi ke database
    require_once "../../../config/config.php";

    $jenis = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_GET['jenis'])))));
    $jenis_pemohon = array
                        (
                            'PT' => 'PT', 
                            'CV' => 'CV', 
                            'PERORANGAN' => 'PERORANGAN',
                            'YAYASAN' => 'YAYASAN',
                            'KOPERASI' => 'KOPERASI',
                        );

    // fungsi query untuk menampilkan data dari tabel antrian
    $result = $mysqli->query("SELECT id_layanan, jenis_layanan FROM layanan WHERE layanan = '$jenis'")
                              or die('Ada kesalahan pada query tampil jumlah antrian: '.$mysqli->error);
?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="form-body">
                    <form id="form-layanan" method="POST">
                        <div class="col-lg-6">
                            <input type="hidden" value="<?= $jenis ?>" name="layanan">
                            <div class="form-group">
                                <label>Nama <span class="wajib-isi">*</span></label>
                                <input type="text" class="form-control" name="nama" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat <span class="wajib-isi">*</span></label>
                                <textarea class="form-control" name="alamat" autocomplete="off" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>No. HP <span class="wajib-isi">*</span></label>
                                <input type="text" maxlength="14" class="form-control" name="no_hp" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>Email <span class="wajib-isi">*</span></label>
                                <input type="email" class="form-control" name="email" autocomplete="off" required>
                            </div>
                            
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Tanggal Kunjungan <span class="wajib-isi">*</span></label>
                                <!-- <input type="text" class="form-control datepicker" name="tanggal" value="<?= date('d-m-Y') ?>" autocomplete="off" required> -->
                                <input type="date" name="tanggal" class="form-control" value="<?= date('Y-m-d') ?>">
                            </div>
                            <div class="form-group">
                                <label>Jenis Pemohon <span class="wajib-isi">*</span></label>
                                <select class="form-control" name="jenis_pemohon" autocomplete="off" required>
                                <?php 
                                    foreach ($jenis_pemohon as $key => $value) {
                                        echo '<option value="' . $key . '">' . $value . '</option>';
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jenis Layanan <span class="wajib-isi">*</span></label>
                                <?php 
                                    while ($data = $result->fetch_assoc()) {
                                       echo '
                                                <div class="form-check">
                                                    <label class="form-check-label"><input class="form-check-input" name="id_layanan[]" type="checkbox" value="' . $data['id_layanan'] . '"> ' . $data['jenis_layanan'] . '</label>
                                                </div>';
                                    }
                                ?>
                                <label id="id_layanan[]-error" class="error" for="id_layanan[]" style="display: none;"></label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
} else {
    echo '<script>window.location="../../error-404.html"</script>';
}
?>