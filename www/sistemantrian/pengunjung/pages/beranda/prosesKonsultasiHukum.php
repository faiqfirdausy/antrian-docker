<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
    // Panggil koneksi config.php untuk koneksi database
    require_once "../../../config/config.php";
    require_once "function.email.php";
    require_once "constant.php";

    // fungsi untuk membuat ID antrian
    $result = $mysqli->query("SELECT max(ID) as kode FROM antrian")
        or die('Ada kesalahan pada query tampil data id antrian: ' . $mysqli->error);
    $data = $result->fetch_assoc();

    $ID = $data['kode'] + 1;
    // $tanggal = gmdate("Y-m-d", time()+60*60*7);
    $tanggal = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['tanggal'])))));
    // $tanggal = date('Y-m-d', strtotime($tanggal));

    // fungsi untuk membuat no antrian
    $result = $mysqli->query("SELECT RIGHT(no_antrian,3) AS kode FROM antrian WHERE tanggal='$tanggal'  && layanan_antrian = '" . ANTRIAN_LAYANAN_KONSULTASI_HUKUM . "' ORDER BY ID DESC LIMIT 1")
        or die('Ada kesalahan pada query tampil data id antrian: ' . $mysqli->error);
    $rows = $result->num_rows;

    if ($rows <> 0) {
        $data = $result->fetch_assoc();
        $kode = $data['kode'] + 1;
    } else {
        $kode = '001';
    }
    $A = 'C';
    $buat_antrian = str_pad($kode, 3, "0", STR_PAD_LEFT);
    $no_antrian = $buat_antrian;
    $layanan_antrian = ANTRIAN_LAYANAN_KONSULTASI_HUKUM;
    $exp1 = substr($no_antrian, 0, 1);
    $exp2 = substr($no_antrian, 1, 1);
    $exp3 = substr($no_antrian, 2, 1);
    $panggil = $A . " " . $exp1 . " " . $exp2 . " " . $exp3;
    $no_antrian = $A . $buat_antrian;

    $nama = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nama'])))));
    $alamat = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['alamat'])))));
    $no_hp = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['no_hp'])))));
    $id_layanan = implode('::', $_POST['id_layanan']);
    $jenis_pemohon = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['jenis_pemohon'])))));
    $layanan = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['layanan'])))));
    $email = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['email'])))));

    // perintah query untuk menyimpan data ke tabel antrian
    $insert = $mysqli->query("INSERT INTO antrian(ID,tanggal,no_antrian,panggil,layanan_antrian,layanan,nama,alamat,no_hp,id_layanan,jenis_pemohon,email)
                              VALUES('$ID','$tanggal','$no_antrian','$panggil','$layanan_antrian','$layanan','$nama','$alamat','$no_hp','$id_layanan','$jenis_pemohon','$email')")
        or die('Ada kesalahan pada query insert : ' . $mysqli->error);
    kirimEmail($email, $layanan, $tanggal);
    // cek query
    if ($insert) {
        // jika berhasil tampilkan pesan Sukses
        echo "Sukses";
    }
} else {
    echo '<script>window.location="../../error-404.html"</script>';
}
?>