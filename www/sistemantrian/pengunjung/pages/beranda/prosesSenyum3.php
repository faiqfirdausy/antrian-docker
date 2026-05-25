<?php  
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' )) {
    // Panggil koneksi config.php untuk koneksi database
    require_once "../../../config/config.php";

    // fungsi untuk membuat ID antrian
    $result = $mysqli->query("SELECT max(ID) as kode FROM antrian")
                              or die('Ada kesalahan pada query tampil data id antrian: '.$mysqli->error);
    $data = $result->fetch_assoc();

    $tanggal = gmdate("Y-m-d", time()+60*60*7);

    // fungsi untuk membuat no antrian

    $nilai = 3;


    // perintah query untuk menyimpan data ke tabel antrian
    $insert = $mysqli->query("INSERT INTO survey(nilai,tanggal)
                              VALUES('$nilai','$tanggal')") 
                              or die('Ada kesalahan pada query insert : '.$mysqli->error);
    // cek query
    if ($insert) {
        // jika berhasil tampilkan pesan Sukses
        echo "Sukses";
    }
} else {
    echo '<script>window.location="../../error-404.html"</script>';
}
?>