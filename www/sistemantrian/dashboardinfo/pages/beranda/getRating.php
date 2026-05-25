<h1>Nilai Kami</h1> <?php  
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' )) {

    // panggil file config.php untuk koneksi ke database
    require_once "../../../config/config.php";

    $hari_ini = gmdate("Y-m-d", time()+60*60*7);

    // fungsi query untuk menampilkan data dari tabel antrian
    $result = $mysqli->query("SELECT (total/jml) AS rata FROM (SELECT SUM(nilai) AS total, COUNT(nilai) AS jml FROM survey) AS T")
                              or die('Ada kesalahan pada query tampil jumlah antrian: '.$mysqli->error);
    $data = $result->fetch_assoc();
    $rata = $data['rata'];
?>
    <?php 
    $print = $rata;
    $print = $print * 20;
    $print =  number_format($print,1);
    echo ($print); ?> / 100

<?php  
} else {
    echo '<script>window.location="../../error-404.html"</script>';
}
?>