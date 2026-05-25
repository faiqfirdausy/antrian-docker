<?php  
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' )) {

    // panggil file config.php untuk koneksi ke database
    require_once "../../../config/config.php";

    $hari_ini = gmdate("Y-m-d", time()+60*60*7);

    // fungsi query untuk menampilkan data dari tabel antrian
    $result = $mysqli->query("SELECT count(ID) as jumlah FROM antrian WHERE tanggal='$hari_ini' && layanan_antrian = 'Pelayanan IMIGRASIPAS'")
                              or die('Ada kesalahan pada query tampil jumlah antrian: '.$mysqli->error);
    $data = $result->fetch_assoc();
    $jumlah_antrian = $data['jumlah'];
?>
    Antrian : E<?php 
    $print = str_pad($jumlah_antrian, 3, "0", STR_PAD_LEFT);
    echo ($print); ?>
<?php  
} else {
    echo '<script>window.location="../../error-404.html"</script>';
}
?>